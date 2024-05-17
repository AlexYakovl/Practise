document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('gameCanvas');
    const ctx = canvas.getContext('2d');

    const gridSize = 20;
    let snake = [{ x: 10, y: 10 }];
    let food = { x: 15, y: 15 };
    let dx = 0;
    let dy = 0;
    let nextDx = 0;
    let nextDy = 0;
    let score = 0;
    let rainbowColors = ['#ff0000', '#ff7f00', '#ffff00', '#00ff00', '#0000ff', '#4b0082', '#9400d3'];
    let currentColorIndex = 0;
    let lastRenderTime = 0;
    let gameSpeed = 125;
    let isGameOver = false;
    const scoreElement = document.getElementById('score');

    function drawSnake() {
        snake.forEach((segment, index) => {
            ctx.fillStyle = getSnakeColor(index);
            ctx.fillRect(segment.x * gridSize, segment.y * gridSize, gridSize, gridSize);
        });
    }

    function getSnakeColor(index) {
        return rainbowColors[(currentColorIndex + index) % rainbowColors.length];
    }

    function drawFood() {
        ctx.fillStyle = 'black';
        ctx.fillRect(food.x * gridSize, food.y * gridSize, gridSize, gridSize);
    }

    function moveSnake() {
        if (isGameOver) {
            return;
        }
        dx = nextDx;
        dy = nextDy;
        const head = { x: snake[0].x + dx, y: snake[0].y + dy };
        snake.unshift(head);
        if (head.x === food.x && head.y === food.y) {
            score++;
            scoreElement.textContent = score;
            generateFood();
        } else {
            snake.pop();
        }
    }

    function generateFood() {
        food = {
            x: Math.floor(Math.random() * canvas.width / gridSize),
            y: Math.floor(Math.random() * canvas.height / gridSize)
        };
    }

    function draw() {
        if (isGameOver) {
            return;
        }
        const currentTime = Date.now();
        const deltaTime = currentTime - lastRenderTime;
        if (deltaTime < gameSpeed) {
            requestAnimationFrame(draw);
            return;
        }

        lastRenderTime = currentTime;

        ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawGrid();
        drawSnake();
        drawFood();
        moveSnake();
        checkCollision();
        requestAnimationFrame(draw);
    }

    function drawGrid() {
        ctx.fillStyle = 'white';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.strokeStyle = 'gray';
        ctx.lineWidth = 1;
        for (let x = 0; x <= canvas.width; x += gridSize) {
            ctx.beginPath();
            ctx.moveTo(x, 0);
            ctx.lineTo(x, canvas.height);
            ctx.stroke();
        }
        for (let y = 0; y <= canvas.height; y += gridSize) {
            ctx.beginPath();
            ctx.moveTo(0, y);
            ctx.lineTo(canvas.width, y);
            ctx.stroke();
        }
    }

    function checkCollision() {
        const head = snake[0];
        if (head.x < 0 || head.x >= canvas.width / gridSize || head.y < 0 || head.y >= canvas.height / gridSize) {
            gameOver();
        }
        for (let i = 1; i < snake.length; i++) {
            if (head.x === snake[i].x && head.y === snake[i].y) {
                gameOver();
            }
        }
    }

    function gameOver() {
        isGameOver = true;
        ctx.fillStyle = 'red';
        ctx.font = '30px Arial';
        ctx.fillText('Game Over', canvas.width / 2 - 90, canvas.height / 2);
        setTimeout(() => {
            isGameOver = false;
            snake = [{ x: 10, y: 10 }];
            dx = 0;
            dy = 0;
            nextDx = 0;
            nextDy = 0;
            score = 0;
            currentColorIndex = 0;
            scoreElement.textContent = score;
            generateFood();
            requestAnimationFrame(draw);
        }, 2000);
    }

    function handleKeyPress(e) {
        if (isGameOver) {
            return;
        }
        switch (e.key) {
            case 'ArrowUp':
                if (dy === 0) {
                    nextDy = -1;
                    nextDx = 0;
                }
                break;
            case 'ArrowDown':
                if (dy === 0) {
                    nextDy = 1;
                    nextDx = 0;
                }
                break;
            case 'ArrowLeft':
                if (dx === 0) {
                    nextDx = -1;
                    nextDy = 0;
                }
                break;
            case 'ArrowRight':
                if (dx === 0) {
                    nextDx = 1;
                    nextDy = 0;
                }
                break;
        }
    }

    document.addEventListener('keydown', handleKeyPress);

    generateFood();
    requestAnimationFrame(draw);
});
