@extends('layouts.app')

@section('content')
<div class="row dash-content">
    <div class="col-lg-8 col-md-8 col-sm-6">
        <button id="fullscreen"><i class="fas icons-dash maximize fa-arrow-left"></i><i class="fas icons-dash minimize hide fa-arrow-right"></i>  </button><span class="dash-header">Admin Dashboard</span><br>
       &nbsp; <i class="fas icons-dash fa-home"></i><span class=""> / Home</span>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">

    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card-white enquire-desc">
            <h4>Message</h4>
            <div style="margin-top:10px">
                {{ $enquire->message }}
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card-white enquire-down">
           <a href=""> <i class="fas enquire-download fa-download"></i></a>
           <div style="text-align:center;font-weight:500">{{ $size }}</div>
        </div>
        <div class="card-white enquire-info">
            <h4></h4>
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-6">
                    <div class="colm">
                    Name:
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-6" >
                    <div class="colm">
                    {{ $enquire->name }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-6">
                    <div class="colm">
                    Email:
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-6">
                    <div class="colm">
                    {{ $enquire->address }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-6">
                    <div class="colm">
                    Issue no:
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-6">
                    <div class="colm">
                    {{ $enquire->token }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-6">
                    <div class="colm">
                    Action:
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-6">
                    <div class="colm">

                       <a href=""> <i class="fas fa-reply"></i></a>
                       @if($enquire->served==0)
                       <a href="#" onclick="var result=confirm('Are you sure you want to mark this enquire as served?');
                        if(result){
                            event.preventDefault();
                            document.getElementById('confirm-form').submit();
                        }
                        "><i class="fas fa-check"></i></a>
                            <form id="confirm-form" action="{{route('enquire.update',[$enquire->id])}}" method="POST" style="display:none">
                                <input type="hidden" name="_method" value="put">
                                {{ csrf_field() }}
                            </form>
                            @endif

                       <a href=""> <i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
