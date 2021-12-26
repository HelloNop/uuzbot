@extends('template.main')

@section('title', 'Market')

@section('content')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title page-title">Markets</h5>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <!-- component CreateMarket -->
            @livewire('create-market')
            @livewire('list-market')
        </div>
    </div>
</div>

@endsection
