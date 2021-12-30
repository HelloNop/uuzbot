@extends('landing.layouts.app')

@section('title', 'Signal Trading')

@section('landing')
<div class="header-content my-auto py-5 is-dark">
    <div class="container">
        <div class="row flex-lg-row-reverse align-items-center justify-content-between g-gs">
            <div class="col-lg-6 mt-lg-0 mt-2 ">
                <div class="header-image header-image-s2 p-4">
                    <img src="images/home.png" alt="">
                </div><!-- .header-image -->
            </div><!-- .col- -->
            <div class="col-lg-5 col-md-10 order-first order-md-last">
                <div class="header-caption">
                    <h1 class="header-title fw-medium">Sinyal Trading Akurat Profit Setiap Hari </h1>
                    <div class="header-text">
                        <p>Mulai Trading dengan Uuzbot, buat akun gratis dan trading sekarang, jangan
                            sia siakan waktumu, raih profit hingga puluhan juta rupiah</p>
                    </div>
                    <ul class="header-action btns-inline">
                        <li><a href="{{route('register')}}" class="btn btn-danger btn-lg"><span>Dapatkan
                                    Sinyal</span></a>
                        </li>
                    </ul>
                </div><!-- .header-caption -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .header-content -->
<div class="header-brand pt-4 pb-5 py-lg-4">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-4 col-sm-4 col-lg-2">
                <div class="brand-item ">
                    <img src="images/binomo.png" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-4 col-sm-4 col-lg-2">
                <div class="brand-item">
                    <img src="images/iqoption.png" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-4 col-sm-4 col-lg-2">
                <div class="brand-item h-80px">
                    <img src="images/quotex.png" alt="">
                </div>
            </div><!-- .col -->
            <div class="col-4 col-sm-4 col-lg-2">
                <div class="brand-item h-80px">
                    <img src="images/olymtrade.png" alt="">
                </div>
            </div><!-- .col -->

        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .header-brand -->
</header><!-- .header -->

<section class="section section-feature pb-0" id="carakerja">
    <div class="container">
        <div class="row g-gs flex-row-reverse justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="img-block"><img src="images/howitwork.png" alt="Dashlite"></div>
            </div>
            <div class="col-lg-5">
                <div class="text-block">
                    <h2 class="title mb-3">Bagaimana UuzBot Bekerja ?</h2>
                    <p>dengan menggunakan beberapa teknikal analisis yang digabungkan, kami memperoleh sinyal secara
                        realtime, temukan petunjuk apakah kamu harus membeli atau menjual bersama kami</p>
                    <ul class="list list-lg list-purple list-checked-circle pt-1">
                        <li class="pl-5 pb-1"><strong>Moving Avarage (MA)</strong></li>
                        <li class="pl-5 pb-1"><strong>Relative Strength Index (RSI)</strong></li>
                        <li class="pl-5 pb-1"><strong>Bullish and Bearish</strong></li>
                        <li class="pl-5 pb-1"><strong>Fibonacci Sideways Moment</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section pb-0" id="harga">
    <div class="container">
        <div class="row justify-content-center text-tenter">
            <div class="col-xl-7 col-lg-9">
                <div class="section-head text-center mb-1">
                    <h2 class="title text-dark mb-0">Dapatkan Harga Terbaik</h2>
                    <p>Kamu bisa menggunakan sinyal ini secara gratis atau berlangganan</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row align-items-center g-0">
                    <div class="col-md-7">
                        <div class="card card-shadow round-xl bg-dark is-dark pb-4 pb-md-0">
                            <div class="card-inner card-inner-xl">
                                <div class="text-block">
                                    <h3 class="title mb-3">Akun Premium</h3>
                                    <ul class="list list-nostyle fs-15px mb-1">
                                        <li>Puluhan Market</li>
                                        <li>24 jam Sinyal Trading</li>
                                        <li>Dukungan admin 24/7</li>
                                        <li>Grup Trabar Telegram</li>
                                        <li>Realtime data</li>
                                    </ul>
                                    <ul class="btns-inline pt-4">
                                        <li><a href="/register" class="btn btn-round btn-xl btn-primary fs-16px">Rp. 194.000 per
                                                Bulan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div
                            class="card card-shadow card-bd-right-3px round-xl ml-lg-n7 ml-md-n5 mx-4 mr-md-0 mt-md-0 mt-n4">
                            <div class="card-inner card-inner-lg">
                                <div class="text-block is-compact pr-3">
                                    <h4 class="title text-azure">Akun Gratis</h4>
                                    <ul class="list list-nostyle fs-15px">
                                        <li>Market Terbatas</li>
                                        <li>24 jam Sinyal Trading</li>
                                        <li>Grup Trabar Telegram</li>
                                        <li class="note text-warning fs-14px">+ syarat dan ketentuan berlaku</li>
                                    </ul>
                                    <ul class="btns-inline pt-2">
                                        <li><a href="/register" class="btn btn-lg btn-round btn-secondary"> <span>Daftar
                                                    Sekarang</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
