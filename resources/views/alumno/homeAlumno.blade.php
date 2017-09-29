@extends('alumno.modulos.plantilla')

@section('title', 'Login')

@section('contenido')

<div class="col-md-8 col-md-offset-2">

  <div class="panel panel-default">
  <div class="panel-body">
    <h1>Calificaciones</h1>

<table class="table table-hover table-responsive table-bordered">
  <thead class="bg-success">
    <tr>
      <th>Materia</th>
      <th>Promedio</th>
    </tr>
  </thead>
  
  <tbody>
    @foreach ($alumnos as $alumno)
    @if ($alumno->id === Auth::user()->id)
    @foreach ($alumno->materias as $materia)
      
    <tr>
      <td>{{ $materia->nom_materia }}</td>
      <td>{{ substr($materia->final, 0,3) }}</td>
    </tr>
    @endforeach
    @endif
    @endforeach
  </tbody>
</table>
      @php
          
          $res = 0;
          foreach ($final as $valor) 
          {
            $res = $res + $valor;
          }

        @endphp
<h2>Promedio general: {{ substr($res / count($materias), 0,3) }}</h2>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Materias', 'Promedio'],

            @foreach ($alumnos as $alumno)
            @if ($alumno->id === Auth::user()->id)
            @foreach ($alumno->materias as $materia)
                  ['{{ $materia->nom_materia }}', {{ $materia->final }}],
            @endforeach
            @endif
            @endforeach
        ]);

        var options = {
          title: 'Calificaciones'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
  </div>
</div>

	

</div>
@endsection