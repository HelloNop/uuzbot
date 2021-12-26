

  <div class="card px-4 py-3 mb-4 border">
        <div class="row">
            <div class="col-sm-6 col-md-3 py-1 ">
                <div class="form-group">
                    <label class="form-label" for="market">Pilih Market</label>
                    <div class="form-control-wrap ">
                        <div class="form-control-select">
                            <select wire:model="market_id" class="form-control" id="market">
                                <option value="default_option">-- pilih market --</option>
                                @foreach ($markets as $market)
                                <option value="{{$market->id}}">{{$market->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 py-1  ">
                <div class="form-group">
                    <label class="form-label" for="sinyal">Pilih Sinyal</label>
                    <div class="form-control-wrap ">
                        <div class="form-control-select">
                            <select wire:model="sinyal" class="form-control" id="sinyal">
                                <option value="default_option">-- pilih sinyal--</option>
                                <option value="BUY">BUY</option>
                                <option value="SELL">SELL</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6  col-md-3 py-1  ">
                <div class="form-group">
                    <label class="form-label" for="time">Timepicker</label>
                    <div class="form-control-wrap">
                        <input wire:model="time" class="form-control text-white" type="time" value="00:00" id="time">
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 py-1 ">
                <div class="form-group">
                    <label class="form-label" for="open">Lama Open</label>
                    <div class="form-control-wrap ">
                        <div class="form-control-select">
                            <select wire:model="open" class="form-control" id="open">
                                <option value="default_option">-- waktu open --</option>
                                <option value="1 min">1 min</option>
                                <option value="5 min">5 min</option>
                                <option value="10 min">10 min</option>
                                <option value="15 min">15 min</option>
                                <option value="30 min">30 min</option>
                                <option value="1 Hour">1 Hour</option>
                                <option value="1 Day">1 Day</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end pt-4"><a wire:click="createSinyal"
                class="btn btn-primary"><span>Tambah</span> </a></div>
    </div>
