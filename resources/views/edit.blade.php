<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

</head>
<body>

    <form method="post" action="{{url('/update/'.$school->id)}}">
        @csrf
        @method('PUT')
      <div class="mb-5">
        <label for="name" class="form-label">Student Name</label>
        <input type="name" name="name" class="form-control" id="name" value="{{$school->name}}">
      </div><br>

      <div class="mb-5">
        <label for="email" class="form-label">Email</label>
        <input type="emial" name = "email" class="form-control" id="email" value="{{$school->email}}">
      </div><br>
      <div class="mb-5">
        <label for="class" class="form-label">Class</label>
        <input type="class" name = "class" class="form-control" id="class" value="{{$school->class}}">
      </div><br>
      <div class="mb-5">
        <label for="section" class="form-label">Section</label>
        <input type="section" name = "section" class="form-control" id="class" value="section">
      </div><br>
      <div class="mb-5">
        <label for="roll" class="form-label">Roll #</label>
        <input type="roll" name = "roll" class="form-control" id="roll" value="{{$school->roll}}">
      </div><br>

    <input type="submit" name="save" id="submit" value="Update" class="btn btn-dark">

    </form>

</body>
</html>
