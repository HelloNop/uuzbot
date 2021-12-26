
<div class="nk-block">
    <div class="d-flex justify-content-end mb-3">
        <ul class="nk-block-tools g-3">
            <li>
                <div class="form-control-wrap">
                    <div class="form-icon form-icon-right"><em class="icon ni ni-search"></em>
                    </div><input type="text" class="form-control" id="" placeholder="Cari Sesuatu">
                </div>
            </li>
        </ul>
    </div>
    <div class="card card-bordered">
        <div class="card-inner-group">
            <div class="card-inner p-0">
                <div class="nk-tb-list">
                    <div class="nk-tb-item nk-tb-head">
                        <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext"><input
                                    type="checkbox" class="custom-control-input" id="pid"><label
                                    class="custom-control-label" for="pid"></label>
                            </div>
                        </div>
                            <div class="nk-tb-col tb-col"><span>Nama Market</span></div>
                            <div class="nk-tb-col"><span>Candle Code</span></div>
                            <div class="nk-tb-col tb-col"><span>Aksi</span></div>
                    </div>
                    @foreach ($markets as $market)
                    <div class="nk-tb-item">
                        <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext"><input
                                    type="checkbox" class="custom-control-input" id="pid1"><label
                                    class="custom-control-label" for="pid1"></label></div>
                        </div>
                        @if ($marketState !== $market->id)
                            <div class="nk-tb-col tb-col"><span class="tb-product"><span
                                class="title">{{$market->name}}</span></span></div>
                            <div class="nk-tb-col"><span class="tb-sub">{{$market->candle}}</span></div>
                        @endif
                        @if ($marketState === $market->id)
                            <div class="nk-tb-col tb-col">
                                <span class="tb-product">
                                    <span class="title">
                                        <div class="form-control-wrap"><input wire:model="name" type="text" class="form-control"
                                            id="nama-market" placeholder="Nama Market"></div>
                                    </span>
                                </span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub">
                                    <div class="form-control-wrap"><input wire:model="candle" type="text" class="form-control" id="code"
                                        placeholder="Code Candle Stick"></div>
                                </span>
                            </div>
                        @endif
                        <div class="nk-tb-col tb-col">
                            <ul class="nk-tb-actions gx-1">
                                @if ($marketState !== $market->id)
                                    <li class="nk-tb-action"><a wire:click="showMarketUpdate({{$market->id}})" class="btn btn-trigger btn-icon"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit"><em class="icon ni ni-edit"></em></a>
                                    </li>
                                    @elseif ($marketState === $market->id)
                                        <li class="nk-tb-action"><a wire:click="updateMarket({{$market->id}})" class="btn btn-trigger btn-icon"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Edit"><em class="icon ni ni-save"></em></a>
                                        </li>
                                @endif

                                <li class="nk-tb-action"><a  wire:click="delete({{$market->id}})" class="btn btn-trigger btn-icon"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Delete"><em
                                            class="icon ni ni-trash-alt"></em></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
                    <div class="card-inner">
                        <div class="nk-block-between-md g-3">
                            <div class="g">
                                <ul class="pagination justify-content-center justify-content-md-start">
                                    {{$markets->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
