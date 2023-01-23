<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>My Admin Panel</title>
    <style>
        .parent{
            width:80%;
            height:400px;
            margin-top:40px;
        }
        .div1{
            width:40%;
            height:200px;
            float:left;
            background: linear-gradient(45deg, red, blue);
            border-radius:20px;
        }
        .div2{
            width:40%;
            height:200px;
            float:right;
            background-color:pink;
            border-radius:20px;
        }
        a{
            text-decoration:none;
            color:white;
        }
    </style>
</head>
<body>
   <center><div class="parent">
        <div class="div1">
            <a href="myplayer.php"><h1>Update Player</h1></a>
        </div>
        <div class="div2">
            <a href="pointable.php"><h1>Update Table</h1></a>
        </div>
    </div>
  </center> 
</body>
</html>