@extends('layout')
@section('content')

  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Create New Review</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-primary" href="/indivreviews/index"> Back</a>
          </div>
      </div>
  </div>

  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif

  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
@endif

<div class="row">
  <form action="/indivreviews/create" method="POST">
      {{ csrf_field() }}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <textarea name="title" class="form-control"></textarea>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Review:</strong>
              <textarea name="SportsPersonReview" class="form-control"></textarea>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
  </form>


</div>
@endsection
