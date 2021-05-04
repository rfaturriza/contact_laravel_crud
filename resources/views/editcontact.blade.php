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
      <h2>Update Contact</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('App\Http\Controllers\ContactController@update', $id)}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" name="firstname" value="{{$contact->firstname}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" name="lastname" value="{{$contact->lastname}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="address">Address:</label>
            <input type="text" class="form-control" name="address" value="{{$contact->address}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="phone_number">phone_number:</label>
            <input type="text" class="form-control" name="phone_number" value="{{$contact->phone_number}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="date_of_birth">date of birth:</label>
            <input type="text" class="form-control" name="date_of_birth" value="{{$contact->date_of_birth}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="photo">Photo:</label>
            <input type="file" class="form-control" name="photo"> 
            @if ($contact->photo==null)
                <p>No picture</p>
            @else
                <img src={{ asset('images/'.$contact->photo) }} alt="" width="100px">   
            @endif  
          </div> 
        </div>       
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{route('show')}}"><div class="btn btn-primary">List data</div></a>

          </div>
        </div>
      </form>      
   </div>
  </body>
</html>