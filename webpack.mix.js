const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();

mix.styles(
    [
        // "/public/css/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css",
        "public/css/assets/vendor_components/bootstrap/dist/css/bootstrap.css",
        "public/css/assets/vendor_components/morris.js/morris.css",
        "public/css/assets/vendor_components/OwlCarousel2/dist/assets/owl.carousel.css",
        "public/css/assets/vendor_components/OwlCarousel2/dist/assets/owl.theme.default.css",
        "public/css/assets/vendor_components/horizontal-timeline/css/horizontal-timeline.css",
        "public/css/assets/vendor_components/flexslider/flexslider.css",
        "public/css/assets/vendor_components/prism/prism.css",
        "public/css/assets/vendor_components/datatable/datatables.min.css",
        "public/css/assets/vendor_components/Magnific-Popup-master/dist/magnific-popup.css",
        "public/css/assets/vendor_components/gallery/css/animated-masonry-gallery.css",
        "public/css/assets/vendor_components/lightbox-master/dist/ekko-lightbox.css",
        "public/css/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.css",
        "public/css/assets/vendor_components/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css",
        "public/css/assets/vendor_components/sweetalert/sweetalert.css",
        "public/css/assets/vendor_components/bootstrap-markdown-master/css/bootstrap-markdown.css",
        "public/css/assets/vendor_components/dropzone/dropzone.css",
        "public/css/assets/vendor_components/select2/dist/css/select2.min.css",
        "public/css/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css",
        "public/css/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
        "public/css/assets/vendor_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css",
        "public/css/assets/vendor_components/bootstrap-select/dist/css/bootstrap-select.css",
        "public/css/assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css",
        "public/css/assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css",
        "public/css/assets/vendor_components/raty-master/lib/jquery.raty.css",
        "public/css/assets/vendor_components/ion-rangeSlider/css/ion.rangeSlider.css",
        "public/css/assets/vendor_components/ion-rangeSlider/css/ion.rangeSlider.skinModern.css",
        "public/css/assets/vendor_components/gridstack/gridstack.css",
        "public/css/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css",
        "public/css/assets/vendor_components/nestable/nestable.css",
        "public/css/assets/vendor_components/bootstrap-switch/switch.css",
        "public/css/assets/vendor_components/c3/c3.min.css",
        "public/css/assets/vendor_components/chartist-js-develop/chartist.css",
        "public/css/assets/vendor_plugins/bootstrap-slider/slider.css",
        "public/css/assets/vendor_plugins/iCheck/flat/blue.css",
        "public/css/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css",
        "public/css/assets/vendor_plugins/iCheck/all.css",
        "public/css/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css",
        "public/css/assets/vendor_plugins/pace/pace.min.css",
        "public/css/assets/vendor_components/fullcalendar/fullcalendar.min.css",
        "public/css/assets/vendor_components/fullcalendar/fullcalendar.print.min.css",
        "public/css/assets/vendor_components/weather-icons/weather-icons.css",
        "public/css/assets/vendor_components/FlipClock-master/compiled/flipclock.css",
    ],
    "public/assets/main.css"
).version();
