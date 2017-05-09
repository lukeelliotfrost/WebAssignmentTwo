@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <a class="btn btn-info" href="/indivreviews/index">Reviews</a>
                    <a class="btn btn-primary" href="/reviewpdf">Download PDF</a>
                    <a class="btn btn-primary" href="/charts">Chart 1</a>
                    <a class="btn btn-primary" href="/gcharts">Chart 2</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('layouts.footer')
