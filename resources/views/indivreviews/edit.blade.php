@extends('layout')

@section('content')

  <div class="row">
            <form action="/indivreviews/{{$indivreviews->id}}" method="POST">
              {{ csrf_field() }}
              {{ method_field('patch') }}

              <div class="form-group">
                <textarea name="body" class="form-control">{{ $indivreviews->title }}</textarea>
              </div>
              <div class="form-group">
                <textarea name="body" class="form-control">{{ $indivreviews->SportsPersonReview }}</textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Review</button>
              </div>
            </form>
          </div>




@endsection
