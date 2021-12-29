@extends('template.main')

@section('title', 'Upgrade Akun')

@section('content')


<div class="container col-md-8">
    <div class="card p-4">
        @if (Auth::user()->roles === 'admin' || Auth::user()->roles === 'vip')
            <div class="alert alert-fill" role="alert"><em class="icon ni ni-alert-circle"></em>
                <strong>
                    Your Account VIP
                </strong>

                <div class="text mt-4">
                    <h3>Selamat Datang {{Auth::user()->name}}</h3>
                    <p class="mt-2">Raih Profit Sekarang juga, Lihat Sinyal pada Menu Dashboard</p>
                </div>
            </div>
        @else
        <div class="alert alert-icon alert-warning" role="alert">    <em class="icon ni ni-alert-circle"></em>
            <strong>
                Your Account is not VIP
            </strong>
            Please Upgrade Your Account !!
        </div>
        @endif

     @if (Auth::user()->tipeAkun === 'langganan')

        <h4>Upgrade Akun Langganan - Rp. 194.000/Bulan</h4>
        <div class="card-inner"><div class="align-center flex-wrap flex-md-nowrap g-4">

            <div class="nk-block-content">
                <div class="nk-block-content-head px-lg-4">
                    <h6 class="mt-3">Petunjuk Pembayaran</h6>
                    <p>Silahkan lakukan transfer sebesar Rp. 194.000 ke Nomor <strong> BNI 0802128055 atas nama Nofri Satriawan</strong></p>
                    <h6 class="mt-3">Petunjuk aktifasi</h6>
                    <p>Aktifkan akun dengan menekan tombol aktifasi akun, dan sertakan bukti transfer serta email yang digunakan saat pendaftaran</p>
                    <div class="mt-4">
                        <a href="https://wa.me/6289504190395?text=Saya%20ingin%20konfirmasi%20member%20uuzbot%20langganan%20" class="btn btn-lg btn-outline-primary">Konfrimasi via Whatsapp</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    @elseif (Auth::user()->tipeAkun === 'gratis')
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
                                    <a href="http://binomo.com?a=27170ee899d9" target="blank">
                                    <div class="card-inner">
                                        <div class="card-img mb-3">
                                            <img class="h-60px" src="images/binomo.png" alt="">
                                        </div>
                                         <div class="text-dark text-center">Klik Disini</div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">klik aktifkan akun dengan menyertakan email yang didaftarkan pada broker serta email yang didaftarkan pada uuzbot trading signals</p>
                        <div class="mt-4">
                            <a href="https://wa.me/6289504190395?text=Saya%20ingin%20konfirmasi%20member%20uuzbot%20VIP-GRATIS%20" class="btn btn-lg btn-outline-primary">Konfrimasi via Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endif
</div>

@endsection
