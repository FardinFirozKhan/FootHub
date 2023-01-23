<?php
 include 'connection.php';
 if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $comments= $_POST['comments'];
    $sql="insert into `feedback`(name,email,comments) values ('$name','$email','$comments')";
    $result=mysqli_query($con,$sql);
    if($result){
    header('location:index.php');
    }
    else{
        die(mysqli_error($con));
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback form</title>
    <style>
   input[type=text] {
      width: 30%;
      padding: 8px 15px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .borobox {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

    button[type=submit] {
      width: 30%;
      background-color: salmon;
      color: white;
      padding: 8px 15px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type=submit]:hover {
      background-color: burlywood;
    }

    div{
      margin-top: 5%;
      margin-left: 25%;
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      width: 50%;
      position: absolute;
      border: 3px solid #73AD21;
      padding: 10px;
      text-align: center;
    }
      h2{
      padding: 60px;
      text-align: center;
      background: skyblue;
      color: white;
      font-size: 30px;
      font-style: italic;
  }
    
    </style>
</head>
<body>
    <div class="container formdata">
       <center> <h2>FeedBack</h2></center>
    <form action="" method="post">

        Name:
        <input type="text" name="name" placeholder="Name"><br>
        Email:
        <input type="text" name="email" placeholder="Email"><br>
        Feedback:
        <input type="text" class="borobox" name="comments" placeholder="Comments"><br>
        <br>
        <center><button type="submit" name="submit">Submit</button></center>
    </form>
    </div>
   
</body>
</html>