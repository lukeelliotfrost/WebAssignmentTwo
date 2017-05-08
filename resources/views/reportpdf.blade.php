<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>List of Reviews</title>
  <link rel="stylesheet" type="text/css" href="css/pdf.css">
</head>
<body>

<h1>Individual Reviews Database</h1>

<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Review</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($reviews as $review)
             <tr>
               <td>{{ $review->id }}</td>
               <td>{{ $review->title }}</td>
               <td>{{ $review->SportsPersonReview }}</td>
             </tr>
        @endforeach
    </tbody>
  </table>
</body>
