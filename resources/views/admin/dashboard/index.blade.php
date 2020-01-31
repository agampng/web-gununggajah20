@extends('ui::layouts.app')

@section('content')

    <div class="ui segment attached"><h3>@lang('Dashboard')</h3>
        <div class="ui stackable two column grid">
            <div class="column">
                <div id="curve_chart" style="height: 400px; width: 600px"></div>
            </div>
            <div class="column" style="padding: 2rem">
                <div style="padding: 1rem; margin-top: 2rem"><i class="bookmark icon blue"></i>Jumlah pengunjung website hari ini: {{$thisDay}}</div>
                <div style="padding: 1rem"><i class="bookmark icon blue"></i>Jumlah pengunjung website minggu ini: {{$thisWeek}}</div>
                <div style="padding: 1rem"><i class="bookmark icon blue"></i>Jumlah pengunjung website bulan ini: {{$thisMonth}}</div>
            </div>
        </div>
    </div>

@endsection

@push('script')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Bulan', 'Pengunjung Web'], ['{!! $getMonth5 !!}',  {!! $thisMonth5 !!}], ['{!! $getMonth4 !!}',  {!! $thisMonth4 !!}], ['{!! $getMonth3 !!}',  {!! $thisMonth3 !!}], ['{!! $getMonth2 !!}',  {!! $thisMonth2 !!}], ['{!! $getMonth1 !!}',  {!! $thisMonth1 !!}], ['{!! $getMonth !!}',  {!! $thisMonth !!}]
        ]);

        var options = {
          title: 'Statistik Pengunjung Website 6 bulan terakhir ',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    
@endpush
