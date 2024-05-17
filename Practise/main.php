<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <style>
    *{
      box-sizing: border-box;
    }

    body {
    background-image: url("pic/fon.png");
    background-repeat: no-repeat;
    overflow: hidden;
    background-size: auto;
    text-align: left;
    margin-top: 20px;
    font-family: Arial, sans-serif;
    transition: background-color 0.5s ease;
    scroll-behavior: smooth;
    }

    .logo {
    position: absolute;
    left: 100px;
    width: 200px;
    height: 200px;
    border-radius: 20px;
    filter: drop-shadow(3px 3px 3px #00000036);
    user-select: none;
    }

    .card{
      padding: 20px;
      background: white;
      border-radius: 20px;
      margin-top: 20px;
      font-family: 'Comic Sans MS', cursive;
      width: 270px;
      text-align: center
    }

    .card-title{
      font-size: 18px;
      font-weight: bold;
      font-family: 'Comic Sans MS', cursive;
    }


    .container{
      padding: 10px;
      height: 1343px;
      background-size: cover;
    }
    
    .snaketext{
      position: absolute;
      bottom: 40px;
      color: white;
      font-family: 'Lobster Two';
      font-size:  48px;
      flex: flex;
      left: 100px;
      user-select: none;
    }
    .texthold{
      left: 100px;
      top: 400px;
      position: absolute;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 60px;
      flex-wrap: wrap;
      user-select: none;
    }

    .toptext{
      left: 1820px;
      position: absolute;
      user-select: none;
    }
    .toptext1{
      left: 100px;
      position: absolute;
      top:160px;
      color: white;
      font-family: 'Lobster';
      font-size:  64px;
      flex: flex;
      user-select: none;
    }
    .toptext2{
      left: 100px;
      position: absolute;
      top:260px;
      color: white;
      font-family: 'Lobster Two';
      font-size:  48px;
      flex: flex;
      user-select: none;
    }

    .main_info {
    padding: 15px;
    }

  </style>


  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Sound Stream </title>
</head>
<body>
<div>
<a href="/main.php" class="main_info">
    <img class="logo" src="pic/et.webp" alt="Веб-сервис для скачивания с вконтакте и ютуб">
    </a>
    <p class="toptext1">Sound Stream</p>
    <p class="toptext2" > Choose what to download?</p>
</div>
  <a href="snake.php" class="snaketext">
      Do you want to play a snake?
    </a>
  <div class="texthold">
    <div class="card">
      <div class="card-title">
      <a href="garant.php"> Download video from YT </a>
      </div>
    </div>

    <div class="card">
      <div class="card-title">
      <a href="garant.php"> Download music from YT </a>
      </div>
    </div>

    <div class="card">
      <div class="card-title">
      <a href="garant.php"> Download video from VK </a>
      </div>
    </div>

      </div>
  </div>
</body>
</html>