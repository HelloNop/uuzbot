<div class="row mb-5">
    <div class="col-sm-12 col-md-5 py-2">
        <div class="form-group "><label class="form-label" for="nama-market">Nama Market</label>
            <div class="form-control-wrap"><input wire:model="MarketName" type="text" class="form-control"
                    id="nama-market" placeholder="Nama Market"></div>
            @error('MarketName') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="col-8 col-md-5  py-2">
        <div class="form-group"><label class="form-label" for="code">Candlestick</label>
            <div class="form-control-wrap"><input wire:model="CodeCandle" type="text" class="form-control" id="code"
                    placeholder="Code Candle Stick"></div>
            @error('CodeCandle') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="  col-2 col-md-2 pt-5"><a wire:click="createMarket" class="btn btn-primary"><span>Tambah</span> </a>
    </div>
</div>