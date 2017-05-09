@extends('layout')



@section('content')
<h2>Gauge Chart</h2>
<div id="temps_div"></div>
<?= $lava->render('GaugeChart', 'Temps', 'temps_div') ?>
@endsection
