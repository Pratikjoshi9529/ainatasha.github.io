<?php 
include("db.php");
if(isset($_POST['submit'])){
$sql = "INSERT INTO usr (name,dob,pass)
VALUES ('$_POST[name1]','$_POST[dob]','$_POST[pass]')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('New record created successfully')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>AI Buddy Signup</title>
    <style type="text/css">

    </style>
  </head>
  <body>
   
    <form method="post" action="" class="p-5" id="command">
      <center><h3>Signup</h3></center>
      <div class="form-group">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="name1" placeholder="Enter Your Name">
      </div>
      <div class="form-group">
              <label class="form-label">Date of Birth</label>
              <input type="date" class="form-control" name="dob" placeholder="Enter DOB">
      </div>
      <div class="form-group">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="pass" placeholder="Enter Password">
      </div>
      <div class="form-group">
              <input type="submit" name="submit" value="Signup" class="btn btn-success">
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>