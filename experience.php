
<?php include "./head.php"; ?>

<body>

<div id="siteWrapper" class="siteWrap">

    <header class="site-header" style="background-image: url(content/skill.jpg);">
        <div class="overlay" style="padding: 0 !important;">


            <?php include "./header.php"; ?>













            <div class="headingIntro">
                <p>
                    <em>Мой опыт и уровень способностей</em>
                </p>
                <p>
                    <strong id="mainHeroTitle">Опыт</strong>
                </p>

            </div>
        </div>
    </header>

    <!-- Начало раздела навыков -->
    <style>
        @media (min-device-width: 500px) {
            #skillswrapper {
                display: block;
                margin: 0 auto;
            }
        }
        @media (min-device-width: 1000px) {
                #skillswrapper {
                    width: 1000px;
                    margin: 0 auto;
                }
        }
            @media (min-device-width: 1300px) {
              #skillswrapper{
                width: 1000px;
                margin: 0 auto;
            }
        }

    </style>
<div id="skillswrapper">
    <?php include "./skills.php"; ?>
</div>
    <!-- Конец раздела навыков -->


    <!-- Начало раздела опыта -->
    <div class="MyFullWidth" style="background-color:#f1f1f2;margin-top:0;margin-bottom:0">
        <div class="page-content">
    <div class="workExpJobContainer">
        <div class="ProjectContentOuter">

            <div class="paddingMy" style="clear:none">
                <div style="cursor:auto;outline:medium none">

                    <a href="http://www.developer-web.site"><h2>developer-web.site</h2></a>
                </div>

            </div>


        </div>

        <div class="MyCol2">
            <div class="paddingMy" style="clear:none">
                <h3>Фриланс проекты в сфере программирования и дизайна</h3><span><i>С октября 2019 года - по настоящее время</i></span>
                <p> <br>
                    Я занимаюсь разработкой сайтов и приложений в свободное от основной работы время.
                    Стараюсь писать чистый и понятный код, верстать высококачественные адаптивные сайты с легким и приятным дизайном.

                </p>
            </div>

            <div class="hrContainer" style="margin-bottom:20px;">
                <hr class="hrHomePage" style="width:100%">
            </div>

        </div>
    </div>

    </div>
    <!-- конец раздела опыта -->

        <!-- Начало раздела образования -->

        <section id="text-4" class="widget widget_text">

            <div class="widget-wrap">

                <div class="textwidget">

                    <div id="resources">

                        <div class="experienceWrap">
                            <h1 class="introBlockHeading" style="padding-left:0;text-align:left">Образование</h1>
                            <div class="hrContainer" style="margin-bottom:20px;"></div>
                              <div class="left">

                                <h3>
                                    Полное высшее образование. Экономико-правовой факультет.
                                </h3>
                                <p>
                                     Донецкий национальный университет 2006-2011 годы.
                                </p>
                              </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Конец раздела образования -->



<?php include "./footer.php"; ?>