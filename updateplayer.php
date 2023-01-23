<?php
 include 'connection.php';
 $id=$_GET['id'];
 $sql="Select * from `tp` where Id=$id";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
 //echo $row['Id'];
 if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $position= $_POST['position'];
    $transferfee= $_POST['transferfee'];
    $pwd= $_POST['password'];
    $sql="update `tp` set Name='$name',Position='$position',Transferfees='$transferfee' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:myplayer.php');
    }
    else{
        die(mysqli_error($con));
    }
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <form method="post">
  <div class="container my-5">
  <div class="mb-3">
    <label>Id</label>
    <input type="text" value="<?php echo $row['Id'] ?>" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label>Name</label>
    <input type="text" value="<?php echo $row['Name'] ?>" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label>Position</label>
    <input type="text" value="<?php echo $row['Position'] ?>" name="position" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label>Transfer Fees</label>
    <input type="text" value="<?php echo $row['Transferfees'] ?>" name="transferfee" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
  </div>
  </div>
  </form>
  </body>
</html>