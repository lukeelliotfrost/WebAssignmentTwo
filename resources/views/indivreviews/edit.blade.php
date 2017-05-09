@extends('layout')

@section('content')

  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Edit Review</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-success" href="/indivreviews/index"> Reviews</a>
          </div>
      </div>
  </div>

      <div class="row">
            <form action="/indivreviews/edit/{{$review->id}}" method="POST">
              {{ csrf_field() }}

              <div class="form-group">
                <textarea name="title" class="form-control">{{ $review->title }}</textarea>
              </div>
              <div class="form-group">
                <textarea name="SportsPersonReview" class="form-control">{{ $review->SportsPersonReview }}</textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Review</button>
              </div>
            </form>
          </div>




@endsection
