<!DOCTYPE html>
<html>
<head>
    <title>Swahili Creatives Registration</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
    Swahili Creatives Registration
    </div>
    <div class="card-body">
      <form action="/createmember" method="post">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">First name</label>
          <input type="text" id="title" name="firstname" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Last name</label>
          <input type="text" id="title" name="lastname" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" id="title" name="username" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" id="title" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Password</label>
          <input type="password" id="title" name="password" class="form-control" required="">
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>