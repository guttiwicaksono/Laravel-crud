<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Edit Book</h2><br  />
        <form method="post" action="{{action('BookController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Title :</label>
            <input type="text" class="form-control" name="title" value="{{$book->title}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Author</label>
              <input type="text" class="form-control" name="author" value="{{$book->author}}">
            </div>
          </div>
          @php
          $date=date('d-m-Y', $book['date_published']);
          @endphp
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Date Published :</strong>  
            <input class="date form-control"  type="text" id="datepicker" name="date_published" value="{{$date}}">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Number of Pages :</label>
              <input type="text" class="form-control" name="pages" value="{{$book->pages}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>Type of Book</lable>
                <select name="type">
                  <option value="Novel"  @if($book->type=="Novel") selected @endif>Novel</option>
                  <option value="Documentation" @if($book->type=="Documentation") selected @endif>Documentation</option>  
                  <option value="Other" @if($book->type=="Other") selected @endif>Other</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>