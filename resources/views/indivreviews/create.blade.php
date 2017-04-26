@extends('layout')
@section('content')

        <h1>Add New Review</h1>
        <hr>

  <form method="POST" action="/indivreviews">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Title:</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>

  <div class="form-group">
    <label for="body">SportsPerson Review</label>
    <textarea id="review" name="review" class="form-control" required></textarea>
  </div>

  <div class="alert alert-error">

    <ul>
      @foreach ($errors->all() as $error)
        <li>
          {{ $error }}
        </li>
      @endforeach

    </ul>
  </div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
