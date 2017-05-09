@extends('layout')

@section('content')


  
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
