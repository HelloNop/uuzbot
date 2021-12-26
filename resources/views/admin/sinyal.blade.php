@extends('template.main')

@section('title', 'Sinyal')

@section('content')

<div class="container-fluid">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Sinyal</h3>
                <div class="nk-block-des text-soft">
                    <p>Halaman membuat sinyal</p>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div>
    @livewire('create-sinyal')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block">
                <div class="card card-bordered card-stretch">
                    @livewire('list-sinyal')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection