@extends('layouts.app')

@section('content')
    <div class="row dash-content">
        <div class="col-lg-8 col-md-8 col-sm-6">
            <i class="fas icons-dash fa-arrow-left"></i> <span class="dash-header">Admin Dashboard</span><br>
           &nbsp; <i class="fas icons-dash fa-home"></i><span class=""> / Home</span>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">

        </div>
        <div class="row" style="width:100%">
            <div class="col-lg-3 col-md-3 col-sm-12" style="width:100%">
                <div class="dash-card bg-yellow">

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12" style="width:100%">
                <div class="dash-card bg-blue">

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12" style="width:100%">
                <div class="dash-card bg-aqua">

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12" style="width:100%">
                <div class="dash-card bg-pink">

                </div>
            </div>
        </div>
    </div>
    <div class="dash-graph-project">

    </div>
@endsection
