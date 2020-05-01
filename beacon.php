
<?php include "./head.php"; ?>

<body>

<div id="siteWrapper" class="siteWrap">

    <header class="site-header" style="background-image: url(content/beaconBanner.jpg);">
        <div class="overlay" style="padding: 0 !important;">


            <?php include "./header.php"; ?>













            <div class="headingIntro">
                <p>
                    <em>Мини-сайт</em>
                </p>
                <p>
                    <strong id="mainHeroTitle">Beacon</strong>
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
                                    <a href="provence.php"></a>
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
                                    <a href="my-port.php"></a>
                                </div>

                            </nav>
                        </div>

                    </div>

                </div>
                <div class="hrContainer" style="margin-top:0;
                    margin-bottom:30px;">
                </div>



                <div class="MyMultiDeviceImages">
        <img src="content/beacons.jpg" alt=""/>
    </div>

    <!-- Описание проекта -->


    <div class="project-details" style="box-sizing:border-box;">
        <div class="project-details-primary">
            <h2>Описание проекта</h2>
            <div class="project-details-intro">
                <p>По сути, beacon - это одностраничный шаблон интернет-витрины, который можно переделать под нужды заказчика. Он создан для демострации адаптивного дизайна и эффектных анимаций. </p>
            </div>
            <p>На сайте реализован jQuery-скрипт, позволяющий увеличивать и уменьшать количество товара нажатием кнопки. </p>
            <p> Также здесь присутствует JS-скрипт валидации, запрещающий вводить данные в поле Last Name без заполнения поля First Name, а также запрещающий ввод в поле Email без заполнения двух предыдущих полей.  </p>

        </div>
        <div class="project-details-secondary">
            <div class="project-details-block project-details-sector">
                <h2>Тип проекта</h2>
                Минисайт
            </div>
            <div class="project-details-block">
                <h2>Что я написал</h2>
                <ul>
                    <li>Верстка сайта</li>
                    <li>Скрипты и сложные анимации</li>
                    <li>Адаптивный дизайн</li>
                </ul>

                <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                    <div style="outline: medium none;cursor:auto">
                        <h2>Использованные технологии</h2>
                        <ul><li>HTML5, CSS3/SASS, JQuery, Ajax, PHP, Photoshop</li></ul>
                    </div>
                </div>

                <a class="buttonBlockElement" href="beacons/index.php">Превью сайта</a>
            </div>
        </div>
    </div>
    </main>




    <!-- конец описания проекта -->

<?php include "./footer.php"; ?>