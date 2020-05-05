
var sheeps = document.getElementsByClassName("sheep");

$(document).ready(function () {
    var posX, posY, newX, newY, aimed, whoseMove, movesArr = document.getElementsByClassName('move'),
        allFigCoord = [];

    //функция добавляет варианты хода
    function addElem(posX, posY, id) {
        if (posX > 0) {
            $("body").append("<div class='move' id=" + id + "><style>#" + id + "{position: relative; top: " + (newY - posY) + "px; left: " + (newX + posX) + "px; }</style></div>");
        } else {
            $("body").append("<div class='move' id=" + id + "><style>#" + id + "{position: relative; top: " + (newY - posY) + "px; left: " + (newX + posX) + "px; }</style></div>");
        }
    }

    //функция вычисляет позицию объекта
    function getPos(elem) {
        posX = $(elem).css("left");
        posY = $(elem).css("top");
        return [posX, posY];
    }

    //функция трансформирует строку координат в цифровой вариант
    function transPos(posX, posY) {
        if (typeof(posX) === "object") {
            posY = posX[1];
            posX = posX[0];
        }
        var str = '', str1 = '';
        var regExp = /[0-9]/;
        for (j = 0; j < 4; j++) {
            if (posX.charAt(j).match(regExp)) {
                str += posX.charAt(j);
            }
        }
        for (j = 0; j < 4; j++) {
            if (posY.charAt(j).match(regExp)) {
                str1 += posY.charAt(j);
            }
        }
        return [Number(str), Number(str1)];
    }

    //функция удаляет варианты хода на занятую клетку
    function removeMoves() {
        allFigCoord = [];
        allFigCoord.push(transPos(getPos(wolf)));
        for (i = 0; i < 4; i++) {
            var oneSheep = sheeps[i];
            var oneSheepCoord = transPos(getPos(oneSheep));
            allFigCoord.push(oneSheepCoord);
        }
        for (m = 0; m < movesArr.length; m++) {
            var movChecking = transPos(getPos(movesArr[m]));
            for (k = 0; k < allFigCoord.length; k++) {
                if (movChecking[0] <= (allFigCoord[k][0] + 10) && movChecking[0] >= (allFigCoord[k][0] - 10) && movChecking[1] <= (allFigCoord[k][1] + 10) && movChecking[1] >= (allFigCoord[k][1] - 10)) {
                    movesArr[m].parentNode.removeChild(movesArr[m]);
                    m--;
                }
            }
        }
    }

    //функция определяет, чей ход
    function whoIsMoving() {
        if (!whoseMove) {
            var rand = Math.floor(Math.random() * 2);
            if (rand > 0) {
                whoseMove = "sheeps";
            } else {
                whoseMove = "wolf";
            }
        }
        var movingItem;
        movingHeadline = document.getElementById('movingHeadline');
        if (movingHeadline) {
            $("#movingHeadline").remove();
        }
        if (whoseMove === "sheeps") {
            movingItem = "Ходят овцы";
        }
        else {
            movingItem = "Ходит волк";
        }
        $("body").append("<h1 id='movingHeadline'>" + movingItem + "</h1>");
        return whoseMove;
    }

    //если ходит волк, выдаем варианты хода
    function wolfsMoving() {
        posX = $("#wolf").css("left");
        posY = $("#wolf").css("top");
        newX = transPos(posX, posY)[0];
        newY = transPos(posX, posY)[1];
        if (newY < 45 && newX > 37 && newX < 458) {
            addElem(-64, -64, 'wolfMoveRightDown');
            addElem(64, -64, 'wolfMoveLeftDown');
        } else if (newY < 45 && newX > 37) {
            addElem(-64, -64, 'wolfMoveRightDown');
        } else if (newY < 45 && newX < 458) {
            addElem(64, -64, 'wolfMoveLeftDown');
        } else if (newX >= 470) {
            addElem(-64, -64, 'wolfMoveRightDown');
            addElem(-64, 64, 'wolfMoveRightUp');
        } else if (newX <= 45) {
            addElem(64, -64, 'wolfMoveLeftDown');
            addElem(64, 64, 'wolfMoveLeftUp');
        } else {
            addElem(-64, -64, 'wolfMoveRightDown');
            addElem(64, -64, 'wolfMoveLeftDown');
            addElem(-64, 64, 'wolfMoveRightUp');
            addElem(64, 64, 'wolfMoveLeftUp');
        }
        var moves = [], sheepsPos = [];
        for (i = 0; i < 4; i++) {
            var coord = movesArr[i];
            if (!coord) {
                break;
            }
            moves.push(getPos(coord));
        }
        for (i = 0; i < 4; i++) {
            var shcoor = document.getElementsByClassName("sheep")[i];
            sheepsPos.push(getPos(shcoor));
        }
        aimed = ("#wolf");
        removeMoves();
    }

    whoIsMoving();
    //если ходят овцы, выдаем варианты хода
    $(".sheep").click(function (event) {
        if (whoseMove === "wolf") {
            return;
        }
        $(".move").remove();
        var ev = event.target;
        for (i = 0; i < 4; i++) {
            if (ev === sheeps[i]) {
                aimed = ("#sheep_" + i);
                posX = $("#sheep_" + i).css("left");
                posY = $("#sheep_" + i).css("top");
                newX = transPos(posX, posY)[0];
                newY = transPos(posX, posY)[1];
                if (newY < 80) {
                    return;
                } else if (newX < 45) {
                    addElem(64, 64, "moveToRight");
                } else if (newX > 480) {
                    addElem(-64, 64, "moveToLeft");
                } else {
                    addElem(64, 64, "moveToRight");
                    addElem(-64, 64, "moveToLeft");
                }
            }
        }
        removeMoves();
    });


    $('#wolf').click(function () {
        if (whoseMove === "sheeps") {
            return;
        }
        $(".move").remove();
        wolfsMoving();
    });
    //функция перемещает указанное объект
    $("body").on("click", ".move", function (event) {
        var ev = event.target;
        idOfAim = ev.id;
        posX = $("#" + idOfAim).css("left");
        var str = '', str1 = '';
        var regExp = /[0-9]/;
        for (j = 0; j < 4; j++) {
            if (posX.charAt(j).match(regExp)) {
                str += posX.charAt(j);
            }
        }
        newX = Number(str);
        posY = $("#" + idOfAim).css("top");
        for (j = 0; j < 4; j++) {
            if (posY.charAt(j).match(regExp)) {
                str1 += posY.charAt(j);
            }
        }
        newY = Number(str1);
        $(aimed).css({"left": (newX + "px"), "top": (newY + "px")});
        var moves = [];
        for (i = 0; i < 4; i++) {
            var coord = movesArr[i];
            if (!coord) {
                break;
            }
            moves.push(getPos(coord));
        }
        $(".move").remove();
        //если у волка не осталось ходов, выиграли овцы
        if (whoseMove === "sheeps") {
            wolfsMoving();
            if (movesArr.length < 1) {
                return alert('Победили овцы!');
            }
        }
        $(".move").remove();
        //если волк достиг последнего ряда - он выиграл
        if (whoseMove === "wolf" && newY > 485) {
            return alert("Победил волк!");
        }
        if (whoseMove === "wolf") {
            whoseMove = "sheeps";
        }
        else {
            whoseMove = "wolf";
        }
        whoIsMoving();
    });

});