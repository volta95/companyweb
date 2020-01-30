@extends('layouts.app')

@section('content')
<div class="row dash-content">
    <div class="col-lg-8 col-md-8 col-sm-6">
        <button id="fullscreen"><i class="fas icons-dash maximize fa-arrow-left"></i><i class="fas icons-dash minimize hide fa-arrow-right"></i>  </button><span class="dash-header">Admin Dashboard</span><br>
       &nbsp; <i class="fas icons-dash fa-home"></i><span class=""> / Home</span>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">

    </div>
<div class="enquire-table">
    <h1>enquires list</h1>
    <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
         <!-- <th>Phone</th>-->
          <th>message</th>
          <th>Token</th>
          <th>Status</th>
          <th></th>
        </tr>

    @foreach ($enquires as $enquire)
    <tr>
        <td style="width:180px;text-transform:capitalize">{{ $enquire->name }}</td>
        <td>{{ $enquire->address }}</td>
        <td>{{ $enquire->message }}</td>
        <td>{{ $enquire->token }}</td>
        @if($enquire->served==0)
        <td>Pending</td>
        @else
        <td>served</td>
        @endif
    <td><a href="enquire/{{$enquire->id}}">View</a></td>
      </tr>
    @endforeach
    <div class="float:right;margin-top:10px">
    {{ $enquires->links() }}
    </div>
</table>

</div>
</div>
@endsection
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      margin-top: 40px;
    }

    td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
