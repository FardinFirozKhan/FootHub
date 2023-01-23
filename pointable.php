
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="images/Flogo.jpg">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <style>
        .target{
            color: blue;
            border-bottom: 4px solid #417bcc;
        }
        table {
  border-collapse: collapse;
  width: 100%;
  border="1" 
  cellpadding="2" 
}

th, td {
  text-align: left;
  padding: 8px;
  spacing: 20px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #1A3151;
  color: white;
}
.top{
	
  border-radius: 5px;
  background-color:  #E5E5BE;
  padding: 30px;
  width: 71.3%;
  position: absolute;
  border: 3px solid #1A3151;
  padding: 10px;
}
.TImg{
  height:65px;
  width:40%;
}
.clubImg{
  height:65px;
  width:40%;
}
    </style>
</head>
<body>

        <table>
                <thead>
                  <tr class="PTable">
                    <th class="Tside rank">#</th>
                    <th class="TClub">Club</th>
                    <th class="tableInfo">Matches</th>
                    <th class="tableInfo">GD</th>
                    <th class="tableInfo">PTS</th>
                    <th>Operation</th>
                  </tr>
                </thead>
                <tbody>
          <?php
                include 'connection.php';
                $selectquery="SELECT * FROM point_table";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){

                  ?>
            <tr>
              <td><?php echo $res["Rank"] ?></td>
              <td><?php echo $res["Club_Name"] ?></td>
              <td  class="Tside"><?php echo $res["Match_played"] ?></td>
              <td  class="Tside"><?php echo $res["GD"] ?></td>
              <td  class="Tside"><?php echo $res["points"] ?></td>
              <td><button class="btn btn-primary"><a href="updatetable.php?id=<?php echo $res["Club_Id"] ?>" class="text-light">Update</a></button>
                  <button class="btn btn-danger"><a href="deletetable.php?id=<?php echo $res["Club_Id"] ?>" class="text-light">Delete</a></button>
      </td>

            </tr>
           
            <?php
                }
            ?>
          </tbody>
              </table>



        
</body>
</html>