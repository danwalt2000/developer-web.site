<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <style>
        td {
            border: lightgrey dotted 0.1px;
        }

        .headline {
            position: absolute;
            top: 35px;
            left: 390px;
        }

        .table-bordered {
            position: absolute;
            top: 100px;
            left: 300px;
        }

        .gem-puzzle {
            height: 320px;
            width: 370px;
        }

        .p-3 {
            color: grey;
            font-family: sans-serif;
            font-size: 250%;
            text-align: center;
            width: 100px;
            height: 90px;
            margin: 0;
            padding: 0;
        }

        .p-3:hover {
            background: rgba(10, 10, 10, 0.1);
            cursor: pointer;
        }

        .table-active {
            background: lightgrey;
        }

        .instruction {
            position: absolute;
            width: 150px;
            left: 30px;
            top: 120px;
        }

        .count {
            position: absolute;
            top: 50px;
            left: 30px;
            background: lightgrey;
            text-align: center;
            font-size: 20px;
        }

        .records {
            position: absolute;
            top: 50px;
            left: 800px;
            width: 150px;

        }

        .refresh {
            margin-top: 470px;
            position: absolute;
            left: 460px;
        }
    </style>
    <title>ПЯТНАШКИ</title>
</head>
<body>
<h1 class="headline">ПЯТНАШКИ</h1>
<table class="table-bordered" onselectstart="return false" onmousedown="return false">
    <tbody>
    <tr>
        <td class="p-3" id="0"></td>
        <td class="p-3" id="1"></td>
        <td class="p-3" id="2"></td>
        <td class="p-3" id="3"></td>
    </tr>
    <tr>
        <td class="p-3" id="4"></td>
        <td class="p-3" id="5"></td>
        <td class="p-3" id="6"></td>
        <td class="p-3" id="7"></td>
    </tr>
    <tr>
        <td class="p-3" id="8"></td>
        <td class="p-3" id="9"></td>
        <td class="p-3" id="10"></td>
        <td class="p-3" id="11"></td>
    </tr>
    <tr>
        <td class="p-3" id="12"></td>
        <td class="p-3" id="13"></td>
        <td class="p-3" id="14"></td>
        <td class="p-3" id="15"></td>
    </tr>
    <button class="refresh" onclick="window.location.reload();">Сброс</button>
    </tbody>

</table>

<div class="count"><p>Счетчик ходов:
    <div id="counter">0</div>
    </p></div>

<dialog id="winModal">
    <form method="post">
        <section>

            <p>Введите имя <input type="text" name='winName' id='winName'>
        </section>
        <menu>
            <button id="cancel" type="reset" onclick="winModal.close()">Отмена</button>
            <button id="winSub" type="submit" name="score">Подтвердить</button>
        </menu>
    </form>
</dialog>

<div class="instruction">
    <h1>Инструкция</h1>
    <p>Соберите костяшки подряд от 1 до 15 за наименьшее количество ходов. Последним должно быть пустое поле.</p>
    <br>
    <p>Для смены костяшек, кликните на ту, что необходимо поставить в пустое поле.</p>
    <br>
    <p>Можно пользоваться стрелочками на клавиатуре</p></div>
<br>

<div class="records"><h1>Рекордсмены</h1>
    <?php
    require_once 'connection.php'; // подключаем скрипт

    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

    // выполняем операции с базой данных
    $query = "SELECT * FROM rec ORDER BY score LIMIT 20";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $queryScore = "SELECT score FROM rec LIMIT 20 ORDER BY ASC";
    $resultScore = mysqli_query($link, $queryScore);

    $sql = mysqli_query($link, $query);
    while ($result1 = mysqli_fetch_array($sql)) {
        echo "<tr>{$result1['name']}: {$result1['score']} {$resultScore}<tr><br>";
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = htmlspecialchars($_POST["winName"]);
        $score = $_POST["score"];
        if (isset($username)) {
            $quer = "INSERT INTO rec (name, score) VALUES('$username', '$score')";
            $res = mysqli_query($link, $quer) or die("Ошибка " . mysqli_error($link));
            echo "<meta http-equiv='refresh' content='0'>";
            exit();
        } else {
            $feedback = $validation_error;
        }

    }
    mysqli_close($link);
    ?>
</div>
<script>
    function fift() {
        var result = [];
        for (i = 1; i <= 15; i++) {
            result.push(i);
        }
        return result;
    }

    var fifteen = fift();
    var w = winName.value;
    var c = Number(counter.innerHTML);

    function getC() {
        return c;
    }

    //функция перемешивания номеров
    function shuffle(arr) {
        var newArr = [];
        arr.push(0);
        for (i = 0; i < 2000; i++) {
            var rand = Math.ceil(Math.random() * 4);
            var idx = arr.indexOf(0);
            //сюда сохраняется число перед заменой на ноль
            var bufferR = arr[idx + 1];
            var bufferL = arr[idx - 1];
            var bufferD = arr[idx + 4];
            var bufferU = arr[idx - 4];

            //если ноль в углу, мешаем в другую сторону
            switch (rand) {
                case 1:
                    switch (arr.indexOf(0)) {
                        case 0:
                        case 4:
                        case 8:
                        case 12:
                            arr[idx] = bufferR;
                            arr[idx + 1] = 0;
                            break;
                        default:
                            arr[idx - 1] = 0;
                            arr[idx] = bufferL;
                            break;
                    }
                    break;
                case 2:
                    switch (idx) {
                        case 0:
                        case 1:
                        case 2:
                        case 3:
                            arr[idx] = bufferD;
                            arr[idx + 4] = 0;
                            break;
                        default:
                            arr[idx] = bufferU;
                            arr[idx - 4] = 0;
                            break;
                    }
                    break;
                case 3:
                    switch (idx) {
                        case 3:
                        case 7:
                        case 11:
                        case 15:
                            arr[idx - 1] = 0;
                            arr[idx] = bufferL;
                            arr[idx - 1] = 0;
                            break;
                        default:
                            arr[idx] = bufferR;
                            arr[idx + 1] = 0;
                            break;
                    }
                    break;
                case 4:
                    switch (idx) {
                        case 12:
                        case 13:
                        case 14:
                        case 15:
                            arr[idx] = bufferU;
                            arr[idx - 4] = 0;
                            break;
                        default:
                            arr[idx] = bufferD;
                            arr[idx + 4] = 0;
                            break;
                    }
                    break;
            }
        }
        arr[arr.indexOf(0)] = '';
        return arr;
    }

    var shuf = shuffle(fifteen);
    for (i = 0; i < shuf.length; i++) {
        document.getElementById(i).innerHTML = shuf[i];
    }

    function changeItem(event) {
        var neighbour = [], empty;

        //ищем соседа пустой клетки
        function findN() {
            for (i = 0; i < shuf.length; i++) {
                document.getElementById(i).innerHTML = shuf[i];
                if (shuf[i] === '') {
                    empty = document.getElementById(i);
                    if (document.getElementById((i - 1)) && i !== 4 && i != 8 && i != 12) {
                        neighbour.push(document.getElementById((i - 1)));
                    }
                    if (document.getElementById((i + 1)) && i !== 3 && i != 7 && i != 11) {
                        neighbour.push(document.getElementById((i + 1)));
                    }
                    if (document.getElementById((i - 4))) {
                        neighbour.push(document.getElementById((i - 4)));
                    }
                    if (document.getElementById((i + 4)))
                        neighbour.push(document.getElementById((i + 4)));
                }
            }
        }

        findN();
        var empId = Number(empty.id);
        var target = event.target;

        //добавляем функцию управления стрелками клавиатуры
        if (event.code === "ArrowUp" && empId < 12) {
            target = document.getElementById(empId + 4);
        } else if (event.code === "ArrowDown" && empId > 3) {
            target = document.getElementById(empId - 4);
        } else if (event.code === "ArrowLeft" && empId !== 3 && empId !== 7 && empId !== 11 && empId !== 15) {
            target = document.getElementById(empId + 1);
        } else if (event.code === "ArrowRight" && empId !== 0 && empId !== 4 && empId !== 8 && empId !== 12) {
            target = document.getElementById(empId - 1);
        }

        //если кликнули мышкой по соседу, выполняем замену
        if (neighbour.includes(target)) {
            var buffer = target.innerHTML;
            var idx = shuf.indexOf(Number(target.innerHTML));
            target.innerHTML = '';
            empty.innerHTML = buffer;
            var numb = [];
            for (i = 0; i < shuf.length; i++) {
                numb.push(Number(document.getElementById(i).innerHTML));
            }
            numb[numb.indexOf(0)] = '';
            shuf = numb;

            //добавим счетчик ходов
            var counter = document.getElementById('counter');
            c++;
            counter.innerHTML = c;
        }
        var newFift = fift();
        newFift.push('');
        if (shuf.toString() === newFift.toString()) {
            var newElement = document.createElement('div');
            newElement.innerHTML = "<h1>Вы выиграли!</h1><p>Общее количество ходов: " + c + "</p>";
            newElement.id = "win";
            var ch = document.getElementById("win");

            //этот код в старых браузерах работать не будет
            if (!ch) {
                document.body.appendChild(newElement);
                winModal.insertBefore(newElement, winName);
                winSub.value = c;
            }
            winModal.showModal();
            var winName = document.getElementById('winName');
            document.onclick = null;
        }
    }

    document.onclick = changeItem;
    document.onkeyup = changeItem;
</script>

</body>

</html>