<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact CRUD </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Contact CRUD</h2><br/>
      <div class="container">
    </div>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
      <form method="post" action="{{url('add')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" name="firstname" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" name="lastname" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="address">Address:</label>
            <input type="text" class="form-control" name="address" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="phone_number">Phone Number:</label>
            <input type="text" class="form-control" name="phone_number" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="text" class="form-control" name="date_of_birth" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="photo">Photo:</label>
            <input type="file" class="form-control" name="photo" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{route('show')}}"><div class="btn btn-primary">List data</div></a>

          </div>
        </div>
      </form>      
   </div>
  </body>
</html>