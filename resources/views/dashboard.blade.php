@extends('template.main')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">
    <div class="row">
        @livewire('dashboard')
        @livewire('candle-stick')
    </div>
</div>
@endsection
