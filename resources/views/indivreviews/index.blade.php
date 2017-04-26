@extends('layout')

@section('content')

  <a href="indivreviews/create" class="btn btn-primary">Add New Review</a>
  <table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Review</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($indiv_reviews as $indivreview)
        <tr>
          <td>{{ $indivreview->id }}</td>
          <td>{{ $indivreview->title }}</td>
          <td>{{ $indivreview->SportsPersonReview }}</td>
          <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
          </td>
        </tr>

      @endforeach
    </tbody>

  </table>

@endsection
