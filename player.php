<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            width:70%;
  font-family: sans-serif; 
  margin:auto;

}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
img{
    height:150px;
    width:25%;
    float:left;
}
.info{
    margin-left:100px;
}
h1,h3{
    text-align:center;
}
.main{
    width:auto;
    border: 2px solid grey;
    padding:10px;
    box-shadow: 4px 2px 2px 4px grey;
}
.center {
  margin-left: auto;
  margin-right: auto;
}

    </style>
</head>
<body>
    <div class="container main">


        
<?php
     include 'connection.php';
     $id= $_GET["id"];
     $query1="SELECT * FROM mvap where id=$id";
     $query= mysqli_query($con,$query1);
     while(  $res= mysqli_fetch_array($query)){
                  
        ?>
        <div class="container all">
        <img src=<?php echo "images/".$res["Playerpicsrc"] ?>>
        <h1 class="info"><?php  echo $res["Name"] ?></h1>
        <h3 class="info"><?php echo $res["Position"] ?></h3>
        </div>


    <?php
     }
     ?>
<div class="container">
<table class="content-table center">
  <thead>
    <tr>
      <th>Age</th>
      <th>Height</th>
      <th>weight</th>
      <th>Salary</th>
      <th>Marital Status</th>
    </tr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1>Parsonal Info</h1>
  </thead>
  <tbody>
  <?php
    
     $selectquery="SELECT * FROM personalinfo where Player_ID=$id";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){
                  
                  ?>
    <tr>
      <td><?php  echo $res["Age"] ?></td>
      <td><?php  echo $res["Height"] ?></td>
      <td><?php  echo $res["Weight"] ?></td>
      <td><?php  echo $res["Salary_in_Euro_PY"]."M" ?></td>
      <td><?php  echo $res["Marital_Status"] ?></td>
    </tr>
   <?php
     }
     ?>
  </tbody>
</table>

</div>

<h1>Achievment</h1>

<table class="content-table center">
  <thead>
    <tr>
      <th>Trophies</th>
      <th>Golden Boots</th>
      <th>Golden Ball</th>
      <th>Ballon Dor</th>
      <th>PLAYER OF THE YEAR</th>
    <th>Top Scorer</th>
    </tr>
    <h1></h1>
  </thead>
  <tbody>
  <?php
    
     $selectquery="SELECT * FROM achievements where Player_ID=$id";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){
                  
                  ?>
    <tr>
      <td><?php  echo $res["Trophies"] ?></td>
      <td><?php  echo $res["Golden_Boots"] ?></td>
      <td><?php  echo $res["Golden_Ball"] ?></td>
      <td><?php  echo $res["Golden_Ball"] ?></td>
      <td><?php  echo $res["PLAYER_OF_THE_YEAR"] ?></td>
      <td><?php  echo $res["Top_Scorer"] ?></td>
    </tr>
   <?php
     }
     ?>
  </tbody>
</table>


<h1>clubstats</h1>

<table class="content-table center">
  <thead>
    <tr>
      <th>Club Name</th>
      <th>Jersey No</th>
      <th>Appreance</th>
      <th>Goals</th>
      <th>Assists</th>
    <th>Yellow Card</th>
    <th>Red Card</th>
    </tr>
    <h1></h1>
  </thead>
  <tbody>
  <?php
    
     $selectquery="SELECT * FROM playersclubstats where Player_ID=$id";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){
                  
                  ?>
    <tr>
      <td><?php  echo $res["Club_Name"] ?></td>
      <td><?php  echo $res["Jersey_NO"] ?></td>
      <td><?php  echo $res["Appreance"] ?></td>
      <td><?php  echo $res["Goals"] ?></td>
      <td><?php  echo $res["Assists"] ?></td>
      <td><?php  echo $res["Yellow_Card"] ?></td>
      <td><?php  echo $res["Red_Card"] ?></td>
    </tr>
   <?php
     }
     ?>
  </tbody>
</table>
    
    

    </div>
</body>
</html>