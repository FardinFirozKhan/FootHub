<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer&Rumors</title> 
    <link rel="icon" type="image/x-icon" href="images/Flogo.jpg">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <style>
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
        <a href="transfer&rumours.php"  class="target">TRANSFERS & RUMOURS</a>
        <a href="topplayer.php">MARKET VALUES</a>
        <a href="pointTable.php">COMPETITIONS</a>
        <a href="https://www.goal.com/en/live-scores" target="_blank">LIVE</a>
        <button class="logIn" type="submit">Sign Up</button>

    </div>



<div class="transfer">
    <h1>Transfer</h1>
      <div class="transfer-table">
        <div class="Ltransfer">
          <h4>Last Transfer</h4>
        <table>
          <thead>
            <tr>
              <th colspan="2" class="player">Player/Position</th>
              <th class="club">Club</th>
              <th class="TFee">Transfer Fee</th>
            </tr>
          </thead>

            <tbody>

            <?php
                include 'connection.php';
                $selectquery="SELECT * FROM mvap";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){
                  
                  ?>
                  <tr>
                  <td class="player"><img class="TImg" src=<?php echo "images/".$res["Playerpicsrc"] ?> alt="">
                  
                  </td>
                  <td>
                    <a href="player.php?id=<?php echo $res["Id"] ?>" style="text-decoration: none;"><p style="font-weight: bold;"><?php  echo $res["Name"] ?></p></a>
                  <p class="PlrPos"><?php echo $res["Position"] ?></p>
                  </td>
                  <td>
                    <img class="clubImg" src=<?php echo "images/".$res["Clubpicsrc"] ?> alt="">
                  </td>
                  <td style="font-weight:bold;"><?php echo $res["Transferfees"] ?></td>
                </tr>
              <?php
               }
              ?>

             

              
            </tbody>

        </table>
        </div>
        <div class="Ltransfer">
          <h4>Top Summer Transfers</h4>
        <table>
          <thead>
            <tr>
              <th colspan="2" class="player">Player/Position</th>
              <th class="club">Club</th>
              <th class="TFee">Transfer Fee</th>
            </tr>
          </thead>

            <tbody>
            <?php
                include 'connection.php';
                $selectquery="SELECT * FROM `tp`";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){

                  ?>
                  <tr>
                  <td class="player"><img class="TImg" src=<?php echo "images/".$res["Playerpicsrc"] ?> alt="">
                  
                  </td>
                  <td>
                    <a href="player.php?id=<?php echo $res["Id"] ?>" style="text-decoration: none;"><p style="font-weight: bold;"><?php echo $res["Name"] ?></p></a>
                  <p class="PlrPos"><?php echo $res["Position"] ?></p>
                  </td>
                  <td>
                    <img class="clubImg" src=<?php echo "images/".$res["Clubpicsrc"] ?>  alt="">
                  </td>
                  <td style="font-weight:bold;"><?php echo $res["Transferfees"] ?></td>
                </tr>
              <?php
                }
              ?>
            </tbody>

        </table>
        </div>
        <div class="Ltransfer">
          <h4>Top Player</h4>
        <table>
          <thead>
            <tr>
              <th colspan="2" class="player">Player/Position</th>
              <th class="club">Club</th>
              <th class="TFee">Market Value</th>
            </tr>
          </thead>

            <tbody>
            <?php
                include 'connection.php';
                $selectquery="SELECT * FROM tp";
                $query= mysqli_query($con,$selectquery);
                while(  $res= mysqli_fetch_array($query)){

                  ?>
                  <tr>
                  <td class="player"><img class="TImg" src=<?php echo "images/".$res["Playerpicsrc"] ?> alt="">
                  
                  </td>
                  <td>
                    <a href="player.php?id=<?php echo $res["Id"] ?>" style="text-decoration: none;"><p style="font-weight: bold;"><?php echo $res["Name"] ?></p></a>
                  <p class="PlrPos"><?php echo $res["Position"] ?></p>
                  </td>
                  <td>
                    <img class="clubImg" src=<?php echo "images/".$res["Clubpicsrc"] ?>  alt="">
                  </td>
                  <td style="font-weight:bold;"><?php echo $res["Transferfees"] ?></td>
                </tr>
              <?php
                }
              ?>
            </tbody>
                  
        </table>
        </div>
      </div>
      
  </div>

</body>
</html>