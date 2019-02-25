<?php
/**
 * Created by PhpStorm.
 * User: 毛胤年
 * Date: 2019/4/3
 * Time: 下午 02:54
 */?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Nian's Website</title>
    <link rel="stylesheet" href="css/work.css"/>
    <link rel="stylesheet" href="css/general.css"/>
    <link href="https://fonts.googleapis.com/css?family=Croissant+One|Lora|Pacifico|Source+Sans+Pro:400" rel="stylesheet">
</head>
<body>
<?php include_once('./navbar.php');?>

<header class="header-container flex-container-row">
    <div class="header-text">My Works</div>
</header>
<div class="article flex-container-row" id="carbout-container">
    <div>
        <div class="heading">Carbout</div>
        <div class='sub-heading'><b>An APP calculating and recording users’ daily carbon footprint.</b></div>
        <div class="text ">
            <ul>
                <li>
                    <div class="highlight">
                        <a href="https://climatechange.tw/Climate/CreativityContest">&nbsp;Honorable Mention Award&nbsp;</a>
                    </div>
                    - Climate Change Creativity Contest
                </li>
                <li>Scan QR-code of invoice in Taiwan to get carbon footprint</li>
                <li>Analyze user's carbon footprint</li>
                <li>Calculate average carbon footprint with price when riding public transport</li>
            </ul>
        </div>
    </div>
    <div id = "APP-img"></div>
</div>

<div class="fixed-img" id="img-1"></div>

<div class="article flex-container-row" id="IFS-container">
    <div>
        <div class="heading">Intelligent Factory System (IFS)</div>
        <div class='sub-heading'>An IOT system collects and analyzes data <br>from factory with Raspberry Pi and ESP-8266.</div>
        <div class="text">
            <ul>
                <li>
                    <div class="highlight">
                        <a href="https://energy.nstm.gov.tw/energy_2018/cs_share_article_detail.php?aid=aqujhgomcmkg&cid=23&dtype=c&sub=L">&nbsp;Honorable Mention Award&nbsp;</a>
                    </div>
                    - Taiwan Clean Energy Creativity Contest
                </li>
                <li>Collect data with different sensors(e.g. electric current,temperature)</li>
                <li>3D Printed IFS-Box</li>
                <li>GUI with C++ Qt5</li>
                <li>Wireless communication with Wi-Fi</li>
                <li>Analyze data with Python</li>
            </ul>
        </div>
    </div>
    <div id = "IFS-img"></div>
</div>

<div class="fixed-img" id="img-2"></div>
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


