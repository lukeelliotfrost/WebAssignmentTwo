@extends('layout')

@section('content')
  <h1 class="">Display Reviews</h1>
  <a href="/"><h4>Back to Home</h4></a>
  <div class="container">
      <ul class="list-group">
        @if (empty($indivreviews))
          <label class="label-warning">No Reviews to display.</label>
        @else
          <label class="label-warning">Some Reviews to display</label>
        @endif

        @foreach ($indivreviews as $indivreview)
          <li class="list-group-item list-group-item-info">
            <a href="/indivreviews/{{ $indivreview->id }}">{{$indivreview->title}}</a>
          </li>
        @endforeach
      </ul>
  </div>

  <hr />

  <div class="container">
    <h3>Add a New Review</h3>
    <form action="/indivreviews" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <textarea name="title" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Card</button>
      </div>
    </form>

    @if (count($errors))
      <ul>
        @foreach ($errors->all() as $error)
          <li style="color:red">
            {{ $error }}
          </li>
        @endforeach
      </ul>
    @endif

  </div>

  <hr />

  <div class="container">
      <ul class="list-group">
        @unless (empty($indivreviews))
          <label class="label-warning">Some other Reviews to display</label>
        @endunless

        @foreach ($indivreviews as $key => $value)
          <li class="list-group-item list-group-item-success">
            {{$value}}
          </li>
        @endforeach
      </ul>
  </div>


@endsection
