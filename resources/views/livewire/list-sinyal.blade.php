
<div class="card-inner-group">
    <div class="card-inner position-relative card-tools-toggle" data-select2-id="23">
        <div class="card-title-group" data-select2-id="22">
            <div class="card-tools">
                <div class="form-inline flex-nowrap gx-3">
                    <div class="btn-wrap">
                        <span>
                            <button
                                class="btn btn-dim btn-outline-light disabled"><em
                                    class="icon ni ni-trash-alt"></em>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-inner p-0">
        <div class="nk-tb-list nk-tb-ulist">
            <div class="nk-tb-item nk-tb-head">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext"><input
                            type="checkbox" class="custom-control-input" id="uid"><label
                            class="custom-control-label" for="uid"></label></div>
                </div>
                <div class="nk-tb-col"><span class="sub-text">Market</span></div>
                <div class="nk-tb-col tb-col-mb"><span class="sub-text">Sinyal</span></div>
                <div class="nk-tb-col tb-col"><span class="sub-text">Open</span></div>
                <div class="nk-tb-col tb-col"><span class="sub-text">Waktu</span></div>
                <div class="nk-tb-col tb-col"><span class="sub-text"></span></div>
                <div class="nk-tb-col tb-col"><span class="sub-text"></span></div>
            </div>
           @foreach ($sinyals as $sinyal)
            <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                    <div class="custom-control custom-control-sm custom-checkbox notext"><input
                            type="checkbox" class="custom-control-input" id="uid1"><label
                            class="custom-control-label" for="uid1"></label></div>
                </div>
                <div class="nk-tb-col">
                        <div class="user-card">
                            <div class="user-info"><span class="tb-lead">{{$sinyal->Market->name}}</span>
                            </div>
                        </div>
                    </div>
                @if ($sinyalUpdate !== $sinyal->id)
                    <div class="nk-tb-col tb-col-mb"><span class="tb-amount">{{$sinyal->signal}}</span></div>
                    <div class="nk-tb-col tb-col"><span>{{$sinyal->open}}</span></div>
                @endif
                @if ($sinyalUpdate === $sinyal->id)
                    <div class="nk-tb-col tb-col-mb">
                        <span class="tb-amount">
                            <select wire:model="signal" class="form-control" id="sinyal">
                                <option value="default_option">--{{$sinyal->signal}}--</option>
                                <option value="BUY">BUY</option>
                                <option value="SELL">SELL</option>
                            </select>
                        </span>
                    </div>
                    <div class="nk-tb-col tb-col">
                        <span>
                            <select wire:model="open" class="form-control" id="open">
                                <option value="default_option">-- {{$sinyal->open}} --</option>
                                <option value="1 min">1 min</option>
                                <option value="5 min">5 min</option>
                                <option value="10 min">10 min</option>
                                <option value="15 min">15 min</option>
                                <option value="30 min">30 min</option>
                                <option value="1 Hour">1 Hour</option>
                                <option value="1 Day">1 Day</option>
                            </select>
                        </span>
                    </div>
                @endif
                <div class="nk-tb-col tb-col"><span>{{$sinyal->waktu}}</span></div>
                <div class="nk-tb-col tb-col"><span class="tb-status text-success"></span>
                </div>
                <div class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1">
                        @if ($sinyalUpdate !== $sinyal->id)
                            <li class="nk-tb-action"><a wire:click="showSinyalUpdate({{$sinyal->id}})" class="btn btn-trigger btn-icon"
                                data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="Edit"><em class="icon ni ni-edit"></em></a>
                            </li>
                            @elseif ($sinyalUpdate == $sinyal->id)
                                <li class="nk-tb-action"><a wire:click="updateSinyal({{$sinyal->id}})" class="btn btn-trigger btn-icon"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit"><em class="icon ni ni-save"></em></a>
                                </li>
                        @endif
                        <li class="nk-tb-action"><a wire:click="delete({{$sinyal->id}})" class="btn btn-trigger btn-icon"
                                data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="Delete"><em
                                    class="icon ni ni-trash-alt"></em></a>
                        </li>
                    </ul>
                </div>
            </div>

            @endforeach
        </div>
    </div>

    <div class="card-inner">
        <div class="nk-block-between-md g-3">
            <div class="g">
                <ul class="pagination justify-content-center justify-content-md-start">

                    {{ $sinyals->onEachSide(3)->links() }}
                </ul>
            </div>
        </div>
    </div>
</div>
