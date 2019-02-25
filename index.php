<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Nian's Website</title>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="css/general.css"/>
    <link href="https://fonts.googleapis.com/css?family=Croissant+One|Lora|Pacifico" rel="stylesheet">
</head>
<body>
<?php include_once('./navbar.php');?>

<header class="header-container flex-container-row">
    <div class="header-text">Welcome to<br>My Website</div>
</header>


<img id="profile" src="images/profile.png" alt="profile">

<div class="article">
    <div class="heading">About me</div>
    My friends call me Nian.&nbsp;
    I'm studying at National Chung Cheng University (CCU), majoring in Computer Science.&nbsp;
    I love cats and raise one named MIMI. You can click link on navigator bar for looking MIMI's photo.
</div>

<div class="fixed-img flex-container-column" id="img-1"></div>

<div class="article">
    <div class="heading">Awards</div>
    <ul>
        <li><b>National Chung Cheng University - Presidential Honor Award</b></li>
        <li><b>Climate Change Creativity Contest - Honorable Mention Award</b><br>
            <span class="highlight">Carbout</span> - An APP calculating and recording users’ daily carbon footprint.
        </li>
        <li><b>Taiwan Clean Energy Creativity Contest - Honorable Mention Award</b><br>
            <span class="highlight">IFS</span> - Collect and analyze data from factory with Raspberry Pi and ESP-8266.
        </li>

    </ul>
</div>

<div class="fixed-img flex-container-column" id="last-img" onclick="location.href='https://github.com/yt8956gh'">
    <div class="flex-container-column" id="github-card">
        <img id="github-img" src="images/GitHub-Mark-120px-plus.png" alt="github_img">
        <div id="github-text">My Github</div>
    </div>
</div>


<footer>
    <div class="flex-container-column copyright">
        <div id="contact-background">
            <div id="contact-container">
                <span>©2019 designed by Mao,Yin-Nian CCU-CSIE 405410010. All rights reserved.</span>
                <span>Email: yt8956789@csie.io</span>
            </div>
        </div>
    </div>
</footer>

</body>
</html>

