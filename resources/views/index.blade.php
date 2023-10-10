<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<h2><center>Welcome to ABC SCHOOL Student Portal</center></h2>

<form method="post" action="{{route('store')}}">
    <h3>Create New Student Account</h3>
    @csrf
    @method('POST')
  <div class="mb-3">
    <label for="name" class="form-label">Student Name</label>
    <input type="name" name="name" class="form-control" id="name" aria-describedby="name">
    <span class="text-danger">
        @error('name')
        {{$message}}
        @enderror
    </span>
  </div><br>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="emial" name = "email" class="form-control" id="email">
    <span class="text-danger">
        @error('email')
        {{$message}}
        @enderror
    </span>
  </div><br>
  <div class="mb-3">
    <label for="class" class="form-label">Class</label>
    <input type="class" name = "class" class="form-control" id="class">
  </div><br>
  <div class="mb-3">
    <label for="section" class="form-label">Section</label>
    <input type="section" name = "section" class="form-control" id="class">
  </div><br>
  <div class="mb-3">
    <label for="roll" class="form-label">Roll #</label>
    <input type="roll" name = "roll" class="form-control" id="roll">
  </div><br>

<input type="submit" class="btn btn-primary"><br><br>
<a href="{{url('/main')}}">Show Data</a>
</form>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
