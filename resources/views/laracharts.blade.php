@extends('layout')



@section('content')
<h2>Geo Chart</h2>
<div id="pop-div" style="width:800px;border:1px solid black"></div>
<?= $lava->render('GeoChart', 'Popularity', 'pop-div') ?>
@endsection
