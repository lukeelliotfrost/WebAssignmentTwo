<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach ($indivreviews as $indivreviewsreview)
        <li>
          <a href="/indivreviews/{{ $indivreviewsreview->id }}">
            
            {{ $indivreviewsreview->SportsPersonReview }}

            </a>
            </li>
      @endforeach

    </ul>
  </body>
</html>
