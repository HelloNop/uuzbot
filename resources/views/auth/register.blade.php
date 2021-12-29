@extends('landing.layouts.app')

@section('title', 'Register')

@section('landing')

<div class="nk-content ">
    <div class="nk-block nk-block-middle nk-auth-body wide-xs mt-0">
        <div class="card card-bordered">
            <div class="card-inner card-inner-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">Register</h4>
                        <div class="nk-block-des">
                            <p>Buat akun baru dan mulai trading dengan UuzBot Sinyal</p>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="tipeAkun">Tipe Akun</label>
                        <div class="form-control-wrap">
                            <div class="form-control-select">
                                <select id="tipeAkun" class="form-control @error('tipeAkun') is-invalid @enderror" name="tipeAkun">
                                    <option value="">-- Langganan atau Gratis --</option>
                                    <option value="langganan">Langganan Rp. 194.000/Bulan</option>
                                    <option value="gratis">Gratis</option>
                                </select>
                            </div>
                            @error('tipeAkun')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="name">Nama</label>
                        <div class="form-control-wrap">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="Masukkan Nama">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <div class="form-control-wrap">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Masukkan Email Aktif">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <div class="form-control-wrap">
                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Isi Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Konfirmasi Password</label>
                        <div class="form-control-wrap">
                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Ketikkan Kembali Password ">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-control-xs custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox">
                            <label class="custom-control-label" for="checkbox">I agree to Dashlite <a href="#">Privacy
                                    Policy</a> &amp; <a href="#"> Terms.</a></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block">Register</button>
                    </div>
                </form>
                <div class="form-note-s2 text-center pt-4"> Sudah punya akun? <a href="login"><strong>Login
                            disini</strong></a>
                </div>
            </div>
        </div>
    </div>

</div>





@endsection
