
<?php include "./head.php"; ?>

<body>

<div id="siteWrapper" class="siteWrap">

    <header class="site-header" style="background: url(content/woodBack.png) repeat;">
        <div class="overlay" style="padding: 0 !important;">


            <?php include "./header.php"; ?>













            <div class="headingIntro">
                <p>
                    <em>Игра</em>
                </p>
                <p>
                    <strong id="mainHeroTitle">Пятнашки</strong>
                </p>



            </div>
        </div>
    </header>
    <main id="page">
        <div id="content">
            <div class="page-content projectOverViewWide" >

                <div class="projectNavWrapper">
                    <div class="projectNavContainer">
                        <div>
                            <nav class="projectNavigationControl">
                                <div class="prev">
                                    <a href="my-port.php"></a>
                                </div>


                                <a href="portfolio.php" style="
                            position: absolute;left: 50%; margin-left: -24px;">
                                <span style="height: 20px;overflow: hidden;position: relative;width: 20px;left:10px;margin-top:11px;">
                                <i class="b1 c1"></i>
                                <i class="b1 c2"></i>
                                <i class="b1 c3"></i>
                                <i class="b2 c1"></i>
                                <i class="b2 c2"></i>
                                <i class="b2 c3"></i>
                                <i class="b3 c1"></i>
                                <i class="b3 c2"></i>
                                <i class="b3 c3"></i>
                                </span>
                                </a>

                                <div class="next">
                                    <a href="beacon.php"></a>
                                </div>

                            </nav>
                        </div>

                    </div>

                </div>
                <div class="hrContainer" style="margin-top:0;
                    margin-bottom:30px;">
                </div>



                <div class="MyMultiDeviceImages">

                    <style>
                        .wrap15{

                            width: 100%;
                            height: 100%;
                        }
                        td {
                            border: lightgrey solid;
                            background: url('content/woodTd.jpg');

                        }
                        td #empty{
                            background: none;
                        }
                        .table-bordered {
                            border: black;
                            padding: 5px;
                            background: url("content/woodBack.png");
                            display: inline-block;
                            position: relative;

                        }


                        .p-3 {
                            border-radius: 10%;
                            color: floralwhite;
                            font-family: sans-serif;
                            font-size: 300%;
                            text-align: center;
                            width: 100px;
                            height: 90px;
                            margin: 0;
                            padding: 0;
                        }

                        .p-3:hover {
                            border: saddlebrown solid ;
                            cursor: pointer;
                        }

                        .table-active {
                            background: lightgrey;
                        }

                        .instruction {
                            position: relative;
                            width: 150px;
                            left: 30px;
                            top: 120px;
                        }

                        .count {
                            width: 100%;
                            position: relative;
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
                            margin-left: auto;
                            margin-right: auto;
                        }
                    </style>
                 <div class="wrap15">
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

                        </tbody>

                    </table>
                     <div><button class="refresh" onclick="window.location.reload();">Сброс</button></div>
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
                 </div>






                </div>

                <!-- Описание проекта -->


                <div class="project-details" style="box-sizing:border-box;">
                    <div class="project-details-primary">
                        <h2>Project Description</h2>
                        <div class="project-details-intro">
                            <p>I needed a portfolio website in order to showcase my abilities and gain work as a web designer and developer.
                                I take pride in everything I do and I knew that I had to take extra care with this project as it would help me line up more interesting work. </p>
                        </div>
                        <p>I wanted to do something really simple and clean by using as much white space as I could get away with. A lot of websites at the moment are split into alternating coloured blocks where the sections are clearly visible. This was a look I knew I wanted to avoid as I wanted to stand out as much as possible. </p>
                        <p> With this in mind I chose three colours initially - black, white and grey and began splitting content out using simple grey HR tags which would subtly lead the user to the next section. This is done without broadcasting that there is a section at all. I think what this does is introduce a flow to the content and also entices the user to scroll further.    </p>
                        <p> I wanted to display a large image in the background that would really grab the users as they land on each page. The photo I chose for the home page header is of a past trip I had to Swan park in Buncrana. This makes the site personal straight away and this is clear to the users. To this effect I also added a section containing images of past experiences I have had with friends and family and on my own. These images give a little insight into my personality without going overboard. </p>
                        <p> In order for me to benefit from the site I needed to be clear about what I am offering. Being a server-side developer for the most part of my career to date I wanted to use this as an advantage. The advantage of having someone who has a passion for web design but who is also proficient at coding. To highlight this I used two SVG graphics which are very visual and easy on the eye.  </p>
                        <p> Whilst I built the pages out to display the relative information about me and my services I began to dabble with the idea of adding some server side code to the site. I decided to build a blog engine and I did this using PHP and a MYSQL backend database.
                            In addition to this I built nested comment functionality to allow users to leave comments on individual blog pages. </p>
                        <p> I did not have great PHP experience prior to this project and decided to use the language to improve my ability with it. In line with this I also chose not to use an HTML framework such as bootstrap. The reason for this is because I wanted to achieve a deeper understanding of responsive web design.  I also believe that these types of frameworks are bloated and contain a lot of things you don't need.  This project was completed with pure HTML, CSS, JQuery and PHP.</p>
                        <p>
                            I also developed an administrative backend for the site in order for me to be able to post new blog articles and approve/decline comments. You can see some screenshots of the admin backend below...
                        </p>
                    </div>
                    <div class="project-details-secondary">
                        <div class="project-details-block project-details-sector">
                            <h2>Project Type</h2>
                            Personal Portfolio Creation
                        </div>
                        <div class="project-details-block">
                            <h2>What I did</h2>
                            <ul>
                                <li>Website Design</li>
                                <li>Blog Engine</li>
                                <li>Nested Comment System</li>
                                <li>Responsive Website Design</li>
                                <li>Administrative backend</li>
                            </ul>

                            <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                                <div style="outline: medium none;cursor:auto">
                                    <h2>Technology used</h2>
                                    <ul><li>HTML5, CSS3/SASS, JQuery, Ajax, PHP,Photoshop</li></ul>
                                </div>
                            </div>

                            <a class="buttonBlockElement" href="index.php">Visit website</a>
                        </div>
                    </div>
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

                <!-- конец описания проекта -->

<?php include "./footer.php"; ?>