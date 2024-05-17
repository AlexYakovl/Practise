<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake Game</title>
    <style>
        #gameContainer {
            align-items: center;
            justify-content: center;
            display: flex;
        }
        #gameCanvas {
            position: absolute;
            top: 90px;
            left: 40%;
            border: 1px solid black;
            margin-right: 20px;
            flex: flex;
        }
        #scoreContainer {
            font-family: "Lobster Two";
            color: white;
            font-size: 36px;
            user-select: none;
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
        .backhref{
            position: absolute;
            bottom: 40px;
            color: white;
            font-family: 'Lobster Two';
            font-size:  48px;
            flex: flex;
            left: 100px;
            user-select: none;
        }
    </style>
</head>
<body>
    <div id="gameContainer">
        <canvas id="gameCanvas" width="400" height="400"></canvas>
        <div id="scoreContainer">Score: <span id="score">0</span></div>
    </div>
    <script src="snake.js"></script>
    <a href="main.php" class="backhref" > Back to the main </a>
</body>
</html>
