
        <div class="col-sm-2" wire:poll.keep-alive.1000ms>
            <div  class="row ">
                @foreach ($markets as $market )
                        <div class="col-6 col-md-12 mb-2">
                            <div class="card border">
                                <div  class="m-2">
                                   <div class="d-flex justify-content-between">
                                        <span class="text-white">{{$market->name}}</span>
                                        <a href="#" ><span class="text-white"><em class="icon ni ni-line-chart-up"></em></span></a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="timer">
                                            <h4 class="pt-3">
                                                <em class="icon ni ni-clock"></em>
                                                {{date('H:i:s')}}
                                            </h4>
                                        </div>
                                            @foreach ($market->sinyals as $sinyal)
                                                @if ($sinyal->waktu === $time)
                                                    <div class="d-flex align-items-center">
                                                        @if ($sinyal->signal === "BUY")
                                                            <h3 class="text-success text-bold pt-3"><em class="icon ni ni-upword-alt-fill"></em>
                                                                {{$sinyal->signal}}
                                                            </h3>
                                                        @else
                                                            <h3 class="text-danger text-bold pt-3"><em
                                                                class="icon ni ni-downward-alt-fill"></em>
                                                                {{$sinyal->signal}}
                                                            </h3>
                                                        @endif
                                                    </div>
                                                    @elseif ($sinyal->notif === $time)
                                                    <h3 class="text-warning text-bold pt-3"><em class="icon ni ni-na"></em>
                                                        Hold
                                                    </h3>
                                                @endif
                                            @endforeach
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="pt-2">
                                            <em class="icon ni ni-code"></em>
                                            {{date('H:i:s')}}
                                        </div>
                                        <div class="pt-2">
                                            <em class="icon ni ni-signal"></em>
                                            {{date('H:i')}}
                                        </div>
                                        <div class="pt-2">
                                            @foreach ($market->sinyals as $sinyal)
                                                @if ($sinyal->waktu === $time)
                                                        <em class="icon ni ni-meter"></em>
                                                        {{$sinyal->open}}
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
