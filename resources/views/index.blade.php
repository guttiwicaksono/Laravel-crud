<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Date Published</th>
        <th>Number of Pages</th>
        <th>Type of Book</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($books as $book)
      @php
        $date=date('Y-m-d', $book['date_published']);
        @endphp
      <tr>
        <td>{{$book['id']}}</td>
        <td>{{$book['title']}}</td>
        <td>{{$book['author']}}</td>
        <td>{{$date}}</td>        
        <td>{{$book['pages']}}</td>
        <td>{{$book['type']}}</td>
        
        <td><a href="{{action('BookController@edit', $book['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('BookController@destroy', $book['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>