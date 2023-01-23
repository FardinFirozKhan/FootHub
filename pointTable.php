<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/Flogo.jpg">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        td{
            border-bottom: 2px solid black;
            border-right: 2px solid black;
        }
        table{
            width:100%;
        }
        .target{
            color: blue;
            border-bottom: 4px solid #417bcc;
        }
    </style>
</head>
<body>
<nav>
       <div>
        <div class="logo">
            <a href="index.php">
              <img src="images/Flogo.jpg" alt="" width="auto" height="70" class="hlogo">
            </a>
            <a class="font" href="https://www.facebook.com/pandaisback42" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                  <a class="font" href="https://www.instagram.com/pizzakhabo.bhai/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                  <a class="font" href="https://twitter.com/SudiptyaChanda6" target="_blank"><i class="fa-brands fa-twitter"></i></a>
          </div>
          <div class="search">
              <input type="text">
              <button class="sbtn" type="submit">SEARCH</button>
          </div>
       </div>
      </nav>

      <div class="navi">
        <a href="news.php">NEWS</a>
        <a href="transfer&rumours.php">TRANSFERS & RUMOURS</a>
        <a href="topplayer.php">MARKET VALUES</a>
        <a href="pointTable.php" class="target">COMPETITIONS</a>
        <a href="https://www.goal.com/en/live-scores" target="_blank">LIVE</a>
        <form action="signup.php" method="post">
          
        <button class="logIn" type="submit">FeedBack</button>
        </form>

    </div>



<table>
                <thead>
                  <tr class="PTable">
                    <th class="Tside rank">#</th>
                    <th class="TClub">Club</th>
                    <th class="tableInfo">Matches</th>
                    <th class="tableInfo">GD</th>
                    <th class="tableInfo">PTS</th>
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
            </tr>
           
            <?php
                }
            ?>
          </tbody>
              </table>


              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>