<?php
 include 'connection.php';
 $id=$_GET['id'];
 $sql="Select * from `point_table` where Club_Id=$id";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
 //echo $row['Id'];
 if(isset($_POST['submit'])){
    $rank= $_POST['rank'];
    $club= $_POST['club'];
    $gd= $_POST['gd'];
    $match= $_POST['played'];
    $points=$_POST['points'];
    $sql="update `point_table` set Club_Name='$club',Rank='$rank',GD='$gd',Match_played='$match',points='$points' where Club_Id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:pointable.php');
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
    <label>Rank</label>
    <input type="text" value="<?php echo $row['Rank'] ?>" name="rank" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label>Club Name</label>
    <input type="text" value="<?php echo $row['Club_Name'] ?>" name="club" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label>Matches</label>
    <input type="text" value="<?php echo $row['Match_played'] ?>" name="played" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label>GD</label>
    <input type="text" value="<?php echo $row['GD'] ?>" name="gd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label>Points</label>
    <input type="text" value="<?php echo $row['points'] ?>" name="points" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
  </div>
  </div>
  </form>
  </body>
</html>