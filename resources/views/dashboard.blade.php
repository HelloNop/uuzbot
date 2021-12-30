@extends('template.main')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">
    <div class="alert alert-icon alert-primary text-white" role="alert"><em class="icon ni ni-alert-circle"></em>
        <marquee behavior="" direction="">
        <p>Kompensasi Maksimal K2 ------------- Kompen Searah ------------- Harap Jaga MM</p>
        </marquee>

    </div>
    <div class="row">

        @livewire('dashboard')
        @livewire('candle-stick')
</div>
@endsection
