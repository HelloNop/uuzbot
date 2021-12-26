@extends('template.main')

@section('title', 'Upgrade Akun')

@section('content')


<div class="container col-md-8">
    <div class="alert alert-icon alert-warning" role="alert">    <em class="icon ni ni-alert-circle"></em>
        <strong>
            Your Account is not VIP
        </strong>
        Please Upgrade Your Account !!
     </div>


    <div class="card p-4">
        <h4>Upgrade Akun Langganan - Rp. 194.000/Bulan</h4>
        <div class="card-inner"><div class="align-center flex-wrap flex-md-nowrap g-4">

            <div class="nk-block-content">
                <div class="nk-block-content-head px-lg-4">
                    <h6 class="mt-3">Petunjuk Pembayaran</h6>
                    <p>Silahkan lakukan transfer sebesar Rp. 194.000 ke Nomor <strong> BNI 0802128055 atas nama Nofri Satriawan</strong></p>
                    <h6 class="mt-3">Petunjuk aktifasi</h6>
                    <p>Aktifkan akun dengan menekan tombol aktifasi akun, dan sertakan bukti transfer serta email yang digunakan saat pendaftaran</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-lg btn-outline-primary">Aktifkan Akun</a>
                    </div>
                </div>
            </div>


            </div>
        </div>

    </div>
    <div class="card p-4">
        <h4>Upgrade Akun VIP (gratis)</h4>
        <div class="card-inner">
            <div class="align-center flex-wrap flex-md-nowrap g-4">
                <div class="nk-block-content">
                    <div class="nk-block-content-head px-lg-4">
                        <h6 class="mt-1">Petunjuk Aktifasi</h6>
                        <p>Silahkan lakukan pendaftaran pada broker berikut dan lakukan deposit minimal $10</p>
                        <div class="row g-gs">
                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="card card-full">
                                    <div class="card-inner">
                                        <div class="card-img mb-3">
                                            <img class="h-60px" src="images/binomo.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="card card-full">
                                    <div class="card-inner">
                                        <div class="card-img mb-3">
                                            <img class="h-60px" src="/landing/images/icon/libs/bootstrap.png" alt="">
                                        </div>
                                        <div class="text-dark h6">Coming Soon</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="card card-full">
                                    <div class="card-inner">
                                        <div class="card-img mb-3">
                                            <img class="h-60px" src="/landing/images/icon/libs/bootstrap.png" alt="">
                                        </div>
                                        <div class="text-dark h6">Coming Soon</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="card card-full">
                                    <div class="card-inner">
                                        <div class="card-img mb-3">
                                            <img class="h-60px" src="/landing/images/icon/libs/bootstrap.png" alt="">
                                        </div>
                                        <div class="text-dark h6">Coming Soon</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">klik aktifkan akun dengan menyertakan email yang didaftarkan pada broker serta email yang didaftarkan pada uuzbot trading signals</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-lg btn-outline-primary">Aktifkan Akun</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




@endsection
