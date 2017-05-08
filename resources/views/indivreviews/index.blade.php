@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Individual SportsPerson Reviews</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/indivreviews/create"> Create New Review</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Review</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($indivreviews as $key => $indivreview)
    <tr>
        <td>{{ $indivreview->title }}</td>
        <td>{{ $indivreview->SportsPersonReview }}</td>
        <td>
            <a class="btn btn-info" href="/indivreviews/show/{{$indivreview->id}}">Show</a>
            <a class="btn btn-primary" href="/indivreviews/edit/{{$indivreview->id}}">Edit</a>
            <a class="btn btn-primary" href="/indivreviews/delete/{{$indivreview->id}}">Delete</a>
        </td>
    </tr>
    @endforeach
    </table>


  </div>


@endsection
