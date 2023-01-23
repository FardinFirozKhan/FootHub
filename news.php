<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/Flogo.jpg">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>News</title>
    <style>
        .target{
            color: blue;
            border-bottom: 4px solid #417bcc;
        }
        .nwsimg{
            height:200px;
            width:40%;
            float:left;
        }
        .news2{
            margin-top:20px;
            border:2px solid grey;
            border-radius:10px;
            padding:20px;
            height: 250px;
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
                  <a class="font" href="https://twitter.com/Sudiptya1821" target="_blank"><i class="fa-brands fa-twitter"></i></a>
          </div>
          <div class="search">
              <input type="text">
              <button class="sbtn" type="submit">SEARCH</button>
          </div>
       </div>
      </nav>

      <div class="navi">
        <a href="news.php" class="target">NEWS</a>
        <a href="transfer&rumours.php">TRANSFERS & RUMOURS</a>
        <a href="topplayer.php">MARKET VALUES</a>
        <a href="pointTable.php">COMPETITIONS</a>
        <a href="https://www.goal.com/en/live-scores" target="_blank">LIVE</a>
        <form action="signup.php" method="post">
          
        <button class="logIn" type="submit">FeedBack</button>
        </form>

    </div>

        <div class="container NewsLink">
                <a href="news2.php">
                    <div class="container news2">
                    <img class="nwsimg" src="images/hb.jpg" >
            <h3>Héctor Bellerín rejoins Barcelona after 11 years-following Arsenal termination of player's contract</h3>
           
                    </div>
                </a>

                <a href="news0.php">
                    <div class="container news2">
            <img class="nwsimg" src="images/mb.jpg" >
         <h3>Fenerbahce and Chelsea agree Batshuayi transfer - Spent last season at Besiktas</h3>
                    </div>
                </a>
                <a href="news3.php">
                    <div class="container news2">

            <img class="nwsimg" src="images/auba.jpg" >
            <h3>Chelsea sign Aubameyang - Barça set to receive transfer fee plus Alonso</h3>
                    </div>
                </a>
                <a href="news4.php">
                    <div class="container news2">

                    <img class="nwsimg" src="images/ag1.jpg" >
            <h3>Barça want to force permanent Griezmann transfer to Atlético - Buy option triggered?</h3>
                    </div>
                </a>
                <a href="news5.php">
                    <div class="container news2">

                    <img class="nwsimg" src="images/gp1.jpg" >
            <h3>Graham Potter joins Chelsea from Brighton - most expensive head coach ever?</h3>
                    </div>
                </a>
               
        </div>
        <div class="footer">
          <div class="oneRow">
            <div style="color: white;" class="common fb"><i class="fa-brands fa-facebook-f"><a href="https://www.facebook.com/pandaisback42" target="_blank"></i>Facebook</a></div>
            <div class="common ig" ><i  class="fa-brands fa-instagram"></i><a href="https://www.instagram.com/pizzakhabo.bhai/" target="_blank">Instagram</a></div>
            <div class="common twi"><i class="fa-brands fa-twitter"><a href="https://twitter.com/Sudiptya1821" target="_blank"></i>Twitter</a></div>
            <div class="common yt"><i class="fa-brands fa-youtube"></i>YouTube</div>
            <div class="common com"><i class="fa-solid fa-comments"></i>Community</div>
            <div class="common rss"><i class="fa-solid fa-square-rss"></i>RSS</div>
          </div>
          <div class="oneRow">
            <div class="alls">200 Like</div>
            <div class="alls">250 Followers</div>
            <div class="alls">500 Followers</div>
            <div class="alls">1000 Subscription</div>
            <div class="alls">650 Users</div>
            <div class="alls">5000 Subscription</div>
          </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>