@extends('layouts.main')

@section('heading')
@include('layouts.header')
@stop

@section('content')

<!-- Title and Top Buttons Start -->
<div class="page-title-container">
    <div class="row">

        <!-- Title Start -->
        <div class="col-12 col-sm-6">
            <h1 class="mb-0 pb-0 display-4" id="title">Dashboard</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboards</a></li>
            </ul>
            </nav>
        </div>
        <!-- Title End -->

        <!-- Top Buttons Start -->
        {{-- <div class="col-12 col-sm-6 d-flex align-items-start justify-content-end">
            <!-- Tour Button Start -->
            <button type="button" class="btn btn-outline-primary btn-icon btn-icon-end w-100 w-sm-auto" id="dashboardTourButton">
            <span>Take a Tour</span>
            <i data-cs-icon="flag"></i>
            </button>
            <!-- Tour Button End -->
        </div> --}}
        <!-- Top Buttons End -->

        <div style="min-height:1500px">
                Index
        </div>

    </div>
</div>
<!-- Title and Top Buttons End -->

@endsection