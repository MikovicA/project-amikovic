@extends('layouts.admin')

@section('content')

@if (in_array(Auth::user()->role_id, [1, 3]))
<div class="container">
    <h1 class="mb-4">Statistika narudžbina</h1>

    <div id="chart_div" style="width: 100%; height: 500px;"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            const data = google.visualization.arrayToDataTable(@json($chartData));

            const options = {
                title: 'Broj narudžbina po danima',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            const chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</div>
@else
    <div class="container mt-5 text-center">
        <h1>Niste admin ili editor</h1>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Nazad na korisnički panel</a>
    </div>
@endif

@endsection
