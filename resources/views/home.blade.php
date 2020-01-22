@extends('layouts.app')

@section('content')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>


    <div class="row dash-content">
        <div class="col-lg-8 col-md-8 col-sm-6">
            <button id="fullscreen"><i class="fas icons-dash maximize fa-arrow-left"></i><i class="fas icons-dash minimize hide fa-arrow-right"></i>  </button><span class="dash-header">Admin Dashboard</span><br>
           &nbsp; <i class="fas icons-dash fa-home"></i><span class=""> / Home</span>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">

        </div>
        <div class="row" style="width:100%;margin-top:35px">
            <div class="col-lg-3 col-md-6 col-sm-12" >
                <div class="dash-card bg-yellow">

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" >
                <div class="dash-card bg-blue">

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" >
                <div class="dash-card bg-aqua">

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="dash-card bg-pink">

                </div>
            </div>
        </div>
        <div class="row" style="width:100%;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="dash-graph-project">
                    <div id="curve_chart" ></div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="dash-card-sec">
                    <div class="row dash-1">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <i class="fas fa-envelope"></i>
                             Inbox
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                                <h5>45</h5>
                        </div>
                    </div>
                    <div class="row dash-1">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <i class="far fa-eye"></i>
                             Profile visits
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                                <h5 style="border-color:#E71D36;color:#E71D36">256</h5>
                        </div>
                    </div>
                    <div class="row dash-1">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <i class="fas fa-bell"></i>
                             Notifications
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                                <h5 style="border-color:#2EC4B6;color:#2EC4B6">156</h5>
                        </div>
                    </div>
                    <div class="row dash-1">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <i class="far fa-comments"></i>
                             Messages
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                                <h5 style="border-color:#011627;color:#011627">156</h5>
                        </div>
                    </div>
                    <div class="row dash-1" style="border-bottom:none">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <i class="fas fa-bookmark"></i>
                             Bookmarks
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                                <h5 style="border-color: #22af46;color: #22af46;">156</h5>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="dash-card-sec">

                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="dash-card-sec">

                </div>
            </div>
        </div>

    </div>

@endsection
