
<?php include "./head.php"; ?>
<script src="scripts/game15.js" type="text/javascript" defer></script>
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
                                    <a href="provence.php"></a>
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

                        .count {
                            color: floralwhite;
                            width: 100%;
                            margin: 0 auto;
                            position: relative;
                            top: 50px;
                            left: 30px;
                            background: url("content/woodBack.png");
                            text-align: center;
                            font-size: 20px;
                        }
                        @media screen  and (max-device-width: 800px){
                            .count{
                                width: 80%;
                            }
                        }

                            .refresh {
                            margin-left: auto;
                            margin-right: auto;
                        }


                        .refresh a {
                            position: relative;
                            display: inline-block;
                            padding: 1.2em 2em;
                            text-decoration: none;
                            text-align: center;
                            cursor: pointer;
                            user-select: none;
                            color: white;
                        }
                        .refresh a::before {
                            content: '';
                            position: absolute;
                            top: 0;
                            left: 0;
                            bottom: 0;
                            right: 0;
                            background: linear-gradient(135deg, #794d07, #f1ce93);
                            border-radius: 4px;
                            transition: box-shadow 0.5s ease, transform 0.2s ease;
                            will-change: transform;
                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                            transform: translateY(var(--ty, 0)) rotateX(var(--rx, 0)) rotateY(var(--ry, 0)) translateZ(var(--tz, -12px));
                        }
                        .refresh a:hover::before {
                            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                        }
                        .refresh a::after {
                            position: relative;
                            display: inline-block;
                            content: attr(data-title);
                            transition: transform 0.2s ease;
                            font-weight: bold;
                            letter-spacing: 0.01em;
                            will-change: transform;
                            transform: translateY(var(--ty, 0)) rotateX(var(--rx, 0)) rotateY(var(--ry, 0));
                        }
                        body .refresh {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            height: 70px;
                            transform-style: preserve-3d;
                            transform: perspective(200px);
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
                     <div class="refresh">

                         <a onclick="window.location.reload();" id="asBut" data-title="Сброс"></a>
                     </div>
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
                        <h2>Описание проекта</h2>
                        <div class="project-details-intro">
                            <p>Популярная головоломка, придуманная в 1878 году Ноем Чепмэном. Представляет собой набор одинаковых квадратных костяшек с нанесёнными числами, заключённых в квадратную коробку. Длина стороны коробки в четыре раза больше длины стороны костяшек для набора из 15 элементов, соответственно в коробке остаётся незаполненным одно квадратное поле. Цель игры — перемещая костяшки по коробке, добиться упорядочивания их по номерам, желательно сделав как можно меньше перемещений. </p>
                        </div>
                        <p>Я написал эту игру без использования сторонних библиотек с помьщью одного лишь DOM API. Я считаю, что понимание работы чистого DOM API - это основа, без которой переключаться на фреймворки. </p>

                    </div>
                    <div class="project-details-secondary">
                        <div class="project-details-block project-details-sector">
                            <h2>Тип проекта</h2>
                            Браузерная игра
                        </div>
                        <div class="project-details-block">
                            <h2>Что я написал</h2>
                            <ul>
                                <li>Внешний вид</li>
                                <li>Движок игры</li>
                                <li>Система подсчета ходов</li>
                                <li>Интеграция с базой данных для публикации рекордсменов</li>
                            </ul>

                            <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                                <div style="outline: medium none;cursor:auto">
                                    <h2>Примененные технологии</h2>
                                    <ul><li>HTML5, CSS3/SASS, Javascript</li></ul>
                                </div>
                            </div>

                            <a class="buttonBlockElement" href="15-article.php">Подробнее</a>
                        </div>
                    </div>
                </div>



                <script>

                </script>

                <!-- конец описания проекта -->

                <script>
                    const docStyle = document.documentElement.style;
                    const aElem = document.querySelector('#asBut');
                    const boundingClientRect = aElem.getBoundingClientRect();

                    aElem.onmousemove = function(e) {

                        const x = e.clientX - boundingClientRect.left;
                        const y = e.clientY - boundingClientRect.top;

                        const xc = boundingClientRect.width/2;
                        const yc = boundingClientRect.height/2;

                        const dx = x - xc;
                        const dy = y - yc;

                        docStyle.setProperty('--rx', `${ dy/-30 }deg`);
                        docStyle.setProperty('--ry', `${ dx/5 }deg`)

                    }

                    aElem.onmouseleave = function(e) {

                        docStyle.setProperty('--ty', '0');
                        docStyle.setProperty('--rx', '0');
                        docStyle.setProperty('--ry', '0');

                    }

                    aElem.onmousedown = function(e) {

                        docStyle.setProperty('--tz', '-25px');

                    }

                    document.body.onmouseup = function(e) {

                        docStyle.setProperty('--tz', '-12px');

                    }
                 </script>

    </main>

<?php include "./footer.php"; ?>