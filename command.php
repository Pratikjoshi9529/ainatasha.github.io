<?php 
include("db.php");
if(isset($_POST['submit'])){
$sql = "INSERT INTO command (command, uoc)
VALUES ('$_POST[cmd]', '$_POST[cmdu]')";

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

    <title>AI Buddy</title>
    <style type="text/css">

    </style>
  </head>
  <body>
   
    <form method="post" action="" class="p-5" id="command">
      <center><h3>Create New Command for Natasha</h3></center>
      <div class="form-group">
              <label class="form-label">Enter Command Here</label>
              <input type="text" class="form-control" name="cmd" placeholder="Enter Your Command Here">
      </div>
      <div class="form-group">
              <label class="form-label">Enter Command Action</label>
              <input type="text" class="form-control" name="cmdu" placeholder="Enter Action on Command">
      </div>
      <div class="form-group">
              <input type="submit" name="submit" value="Add Command" class="btn btn-success">
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>