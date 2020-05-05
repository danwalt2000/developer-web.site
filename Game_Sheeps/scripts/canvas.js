const example = document.getElementById("example");
let ctx = example.getContext('2d');
const wolf = document.getElementById("wolf");
const sheep0 = document.getElementById("sheep_0");
const sheep1 = document.getElementById("sheep_1");
const sheep2 = document.getElementById("sheep_2");
const sheep3 = document.getElementById("sheep_3");



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

ctx.drawImage(wolf, 228, 36);
ctx.drawImage(sheep0, 34, 485);
ctx.drawImage(sheep1, 164, 485);
ctx.drawImage(sheep2, 292, 485);
ctx.drawImage(sheep3, 420, 485);

//export { wolf, sheep0, sheep1, sheep2, sheep3 };