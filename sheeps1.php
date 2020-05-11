
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
                    <strong id="mainHeroTitle">Волк и овцы</strong>
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



                <style>
                    .relative{
                        position: relative;
                    }
                    #wolf {
                        position: absolute;
                        top: 41px;
                        left: 234px;
                        height: 35px;
                        width: 35px;
                    }

                    .sheep {
                        position: absolute;
                        height: 35px;
                        width: 35px;
                        top: 490px;
                    }

                    #sheep_0 {
                        left: 42px;
                    }

                    #sheep_1 {
                        left: 170px;
                    }

                    #sheep_2 {
                        left: 299px;
                    }

                    #sheep_3 {
                        left: 427px;
                    }

                    .move {
                        height: 35px;
                        width: 35px;
                        background: lightgreen;
                        border-radius: 100%;
                    }

                    .rules, #movingHeadline {
                        position: absolute;
                    }

                    .rules {
                        top: 0px;
                        left: 620px;
                        width: 200px;
                    }

                    #movingHeadline {
                        top: 300px;
                        left: 620px;
                        width: 180px;
                    }
                </style>
<div class="relative">
                <canvas id='example'>Обновите браузер</canvas>

                <img id="wolf" width="15" height="15" />
                <img class="sheep" id="sheep_0" width="15" height="15" src="Game_Sheeps/images/sheep.png"/>
                <img class="sheep" id="sheep_1" width="15" height="15" src="/images/sheep.png"/>
                <img class="sheep" id="sheep_2" width="15" height="15" src="/images/sheep.png"/>
                <img class="sheep" id="sheep_3" width="15" height="15" src="/images/sheep.png"/
                <div class="rules"><h1>Правила игры</h1>
                    <p>Волку нужно добраться до нижнего поля.</p>
                    <p>Овцам нужно окружить волка, то есть, сделать так, чтобы у волка не осталось ходов.</p>
                    <button class="refresh" onclick="window.location.reload();">Сброс</button>
                </div>
</div>
                <!-- Описание проекта -->


                <div class="project-details" style="box-sizing:border-box;">
                    <div class="project-details-primary">
                        <h2>Описание проекта</h2>
                        <div class="project-details-intro">
                            <p>Популярная головоломка, придуманная в 1878 году Ноем Чепмэном. Представляет собой набор одинаковых квадратных костяшек с нанесёнными числами, заключённых в квадратную коробку. Длина стороны коробки в четыре раза больше длины стороны костяшек для набора из 15 элементов, соответственно в коробке остаётся незаполненным одно квадратное поле. Цель игры — перемещая костяшки по коробке, добиться упорядочивания их по номерам, желательно сделав как можно меньше перемещений. </p>
                        </div>
                        <p>Я написал эту игру без использования сторонних библиотек с помьщью одного лишь DOM API. Я считаю, что понимание работы чистого DOM API - это основа,
                            без которой переключаться на фреймворки нельзя. </p>

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
                <script src="scripts/jQuery.js" type="text/javascript"></script>
                <script src="Game_Sheeps/scripts/canvas.js" type="text/javascript"></script>
                <script src="Game_Sheeps/scripts/main.js" type="text/javascript"></script>
    </main>

<?php include "./footer.php"; ?>