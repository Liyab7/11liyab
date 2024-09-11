<?php
    session_start();

    include("php/config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTS ARENA</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
        <div class="wrapper">
        <nav class="navbar">
        <img class="Logo" src="./Img/LOGO.png">
         <a href="home.php"></a>

            <?php
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id='$id'");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }

            echo "<a href='edit.php?'></a>";
            ?>

               <a href="php/logout.php"> </a>

               <ul>
        <li><a class="active" href="index.html">HOME</a></li>
        <li><a href="Football.html">FOOTBALL</a></li>
        <li><a href="Basketball.html">BASKETBALL</a></li>
        <li><a href="Athletics.html">ATHLETICS</a></li>
        <li><a href="Wrestling.html">WRESTLING</a></li>
        <li><a href="About.html">ABOUT</a></li>
        <li><a href="contact.html">CONTACT</a></li>
        <li><a href="login.html">LOGIN</a></li>
  

    </ul>

</nav>
<div class="center">
    <marquee behavior=slide scrollamount="20%" > <h2 >Welcome To The World Of Sports</h2></marquee>
    <h4>
        Get ready to dive into the exhilarating world of sports with us.<br><br> Whether you're a die-hard fan,
                 a casual spectator, or an aspiring athlete, our website is your go-to destination for all things sports.<br> <br>
         From the latest game highlights to in-depth player interviews, we've got you covered.
        </h4>
        <div class="btn">
            <a href="About.html"><button >About Us </button></a>

        </div>
    </div>
    </div>
</body>
</html>