var example = document.getElementById("example");
var ctx = example.getContext('2d');
var wolf = document.createElement("img");
wolf.id = "wolf";
wolf.setAttribute('src', "Game_Sheeps/images/wolf.png");
example.width = 600;
example.height = 600;
ctx.strokeStyle = '#B70A02'; // меняем цвет рамки
ctx.strokeRect(15, 15, 532, 532);
ctx.strokeRect(18, 18, 520, 520);
ctx.fillStyle = '#AF5200'; // меняем цвет клеток
ctx.fillRect(20, 20, 512, 512);
for (i = 0; i < 8; i += 2)
    for (j = 0; j < 8; j += 2) {
        ctx.clearRect(20 + i * 64, 20 + j * 64, 64, 64);
        ctx.clearRect(20 + (i + 1) * 64, 20 + (j + 1) * 64, 64, 64);
    }

ctx.drawImage(wolf, 234, 41);