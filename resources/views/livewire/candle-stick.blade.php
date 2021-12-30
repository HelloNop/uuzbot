
<div class="col-md-9 embed-responsive">
    <div class="p-6">
                {{-- <div class="tradingview-widget-container">
                    <div id="tradingview_1603c"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">

                                new TradingView.widget(
                                    {
                                        "width": 1300,
                                        "height": 630,
                                        "symbol": "binomo",
                                        "interval": "1",
                                        "timezone": "Asia/Bangkok",
                                        "theme": "dark",
                                        "style": "1",
                                        "locale": "id",
                                        "toolbar_bg": "#f1f3f6",
                                        "enable_publishing": false,
                                        "hide_top_toolbar": true,
                                        "hide_side_toolbar": false,
                                        "save_image": false,
                                        "container_id": "tradingview_1603c"
                                    }
                                );
                            </script>
                </div> --}}


            <div class="card p-2">
                <div id="chartdiv" style="height: 500px; width:max-width"></div>
                <img class="bg-white" src="/images/clok.png" alt="" srcset="" style="width: 90px; margin-top:-19px; margin-left:-7px; z-index: 999">
            </div>
</div>

<script>
    am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv");

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
    am5themes_Animated.new(root),
    am5themes_Dark.new(root)
    ]);

    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(
    am5xy.XYChart.new(root, {
        focusable: true,
        panX: false,
        panY: false,
        wheelX: "none",
        wheelY: "none"
    })
    );

    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
    categoryField: "value",
    renderer: am5xy.AxisRendererX.new(root, {
        minGridDistance: 70
    }),
    tooltip: am5.Tooltip.new(root, {})
    }));

    xAxis.get("renderer").labels.template.adapters.add("text", function(text, target) {
    if (target.dataItem) {
        return root.numberFormatter.format(Number(target.dataItem.get("category")), "#.####");
    }
    return text;
    });

    var yAxis = chart.yAxes.push(
    am5xy.ValueAxis.new(root, {
        maxDeviation: 0.1,
        renderer: am5xy.AxisRendererY.new(root, {})
    })
    );

    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/

    var bidsTotalVolume = chart.series.push(am5xy.StepLineSeries.new(root, {
    minBulletDistance: 10,
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "bidstotalvolume",
    categoryXField: "value",
    stroke: am5.color(0x00ff00),
    fill: am5.color(0x00ff00),
    tooltip: am5.Tooltip.new(root, {
        pointerOrientation: "horizontal",
        labelText: "[width: 120px]Ask:[/][bold]{categoryX}[/]\n[width: 120px]Total volume:[/][bold]{valueY}[/]\n[width: 120px]Volume:[/][bold]{bidsvolume}[/]"
    })
    }));
    bidsTotalVolume.strokes.template.set("strokeWidth", 2)
    bidsTotalVolume.fills.template.setAll({
    visible: true,
    fillOpacity: 0.2
    });

    var asksTotalVolume = chart.series.push(am5xy.StepLineSeries.new(root, {
    minBulletDistance: 10,
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "askstotalvolume",
    categoryXField: "value",
    stroke: am5.color(0xf00f00),
    fill: am5.color(0xff0000),
    tooltip: am5.Tooltip.new(root, {
        pointerOrientation: "horizontal",
        labelText: "[width: 120px]Ask:[/][bold]{categoryX}[/]\n[width: 120px]Total volume:[/][bold]{valueY}[/]\n[width: 120px]Volume:[/][bold]{asksvolume}[/]"
    })
    }));
    asksTotalVolume.strokes.template.set("strokeWidth", 2)
    asksTotalVolume.fills.template.setAll({
    visible: true,
    fillOpacity: 0.2
    });

    var bidVolume = chart.series.push(am5xy.ColumnSeries.new(root, {
    minBulletDistance: 10,
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "bidsvolume",
    categoryXField: "value",
    fill: am5.color(0x000000)
    }));
    bidVolume.columns.template.set("fillOpacity", 0.2);

    var asksVolume = chart.series.push(am5xy.ColumnSeries.new(root, {
    minBulletDistance: 10,
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "asksvolume",
    categoryXField: "value",
    fill: am5.color(0x000000)
    }));
    asksVolume.columns.template.set("fillOpacity", 0.2);

    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
    xAxis: xAxis
    }));
    cursor.lineY.set("visible", false);

    // Data loader
    function loadData() {
    am5.net.load("https://poloniex.com/public?command=returnOrderBook&currencyPair=BTC_ETH&depth=50").then(function(result) {
        var data = am5.JSONParser.parse(result.response);
        var res = [];
        processData(data.bids, "bids", true, res);
        processData(data.asks, "asks", false, res);
        xAxis.data.setAll(res);
        bidsTotalVolume.data.setAll(res);
        asksTotalVolume.data.setAll(res);
        bidVolume.data.setAll(res);
        asksVolume.data.setAll(res);
    });
    }

    loadData();

    setInterval(loadData, 30000);


    // Function to process (sort and calculate cummulative volume)
    function processData(list, type, desc, res) {

    // Convert to data points
    for(var i = 0; i < list.length; i++) {
        list[i] = {
        value: Number(list[i][0]),
        volume: Number(list[i][1]),
        }
    }

    // Sort list just in case
    list.sort(function(a, b) {
        if (a.value > b.value) {
        return 1;
        }
        else if (a.value < b.value) {
        return -1;
        }
        else {
        return 0;
        }
    });

    // Calculate cummulative volume
    if (desc) {
        for(var i = list.length - 1; i >= 0; i--) {
        if (i < (list.length - 1)) {
            list[i].totalvolume = list[i+1].totalvolume + list[i].volume;
        }
        else {
            list[i].totalvolume = list[i].volume;
        }
        var dp = {};
        dp["value"] = list[i].value;
        dp[type + "volume"] = list[i].volume;
        dp[type + "totalvolume"] = list[i].totalvolume;
        res.unshift(dp);
        }
    }
    else {
        for(var i = 0; i < list.length; i++) {
        if (i > 0) {
            list[i].totalvolume = list[i-1].totalvolume + list[i].volume;
        }
        else {
            list[i].totalvolume = list[i].volume;
        }
        var dp = {};
        dp["value"] = list[i].value;
        dp[type + "volume"] = list[i].volume;
        dp[type + "totalvolume"] = list[i].totalvolume;
        res.push(dp);
        }
    }

    }

    }); // end am5.ready()
</script>


