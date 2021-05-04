<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>List of Contact</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
  <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>List Contact data</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('create') }}" class="btn btn-primary">add data</a>
                </div>
            </div>
        </div>
    </div>
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
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Date of Birth</th>
        <th>Photo</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($contacts as $contact)
      <tr>
        <td>{{$contact->id}}</td>
        <td>{{$contact->firstname}}</td>
        <td>{{$contact->lastname}}</td>
        <td>{{$contact->address}}</td>
        <td>{{$contact->phone_number}}</td>
        <td>{{$contact->date_of_birth}}</td>
        <td><img src="images/{{$contact->photo}}" alt="" width="100px"></td>
        <td><a href="{{action('App\Http\Controllers\ContactController@edit', $contact->id)}}" class="btn btn-warning">Edit</a></td>
        <td>        
          <form action="{{action('App\Http\Controllers\ContactController@destroy', $contact->id)}}" method="post">
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