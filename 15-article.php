

<?php include "./head.php"; ?>

<body>

<div id="siteWrapper" class="siteWrap">

    <header class="site-header" style="background-image: url(content/articles.jpg);">
        <div class="overlay" style="padding: 0 !important;">


            <?php include "./header.php"; ?>













            <div class="headingIntro">
                <p>
                    <em>Мои статьи о разработке и дизайне</em>
                </p>
                <p>
                    <strong id="mainHeroTitle">Статьи</strong>
                </p>



            </div>
        </div>
    </header>

    <main id="page">
        <div id="content">
            <div class="page-content">
                <div class="layout">

                    <main id="blogPostContainer" class="blogContent">
                        <div id="blogWrap" class="wrap" style="padding: 0px;">

                            <div class="blog-posts clearfix" style="margin-top: 1%;">
                                <article class="postSingle">
                                    <header class="entry-header">
                                        <p class="entry-meta">
                                            <span>Опубликовано</span>
                                            <time class="entry-time">19.04.2020 в 18:36</time>


                                        </p>

                                        <h1 class="introBlockHeading largerHeading">Пишем игру на чистом Javascript</h1>

<div class="blogPostImage">
    <div class="aboutPillar"><div class="paddingMy"></div></div>

    <div class="wrapAbout">
        <a title="Пишем игру на чистом Javascript" href='15.php'>
            <img alt="Пишем игру на чистом Javascript" src="content/15.jpg" style="border-radius:50%">
        </a>
    </div>
    <div class="aboutPillar"><div class="paddingMy"></div></div>
</div>
</header>

<div class="textParagraphBlog" style='margin-top:30px'>

    <p class="articleIntro">
        Разметка самая простая — только один элемент canvas с одноименным идентификатором. </p>




    <p>Все действия будут происходить в файле script.js, где мы напишем код нашей игры.

        Начнем с того, что создадим класс Game, который будет представлять собой Пятнашки в целом. Он будет получать в качестве параметров контекст рисования и размер одной пятнашки.</p>
    <p>Определим переменную arr, хранящую схему игрового поля, и переменную clicks, в которой будем хранить количество ходов игрока. Кроме того, создадим метод getClicks, который будет возвращать количество ходов. Он нам пригодится в конце игры, при выигрыше.

        Создадим несколько методов класса Game:
        — метод cellView получает координаты и рисует в них пятнашку.
        — метод numView определяет, как выглядит текст (цифра).
        — метод getNullCell возвращает позицию пустой клетки в массиве.
        — метод draw отрисовывает всю игру.
        — метод move обсчитывает перемещение пятнашки на пустую позицию и редактирует текущую схему игрового поля.
        — метод victory проверяет, сложены ли пятнашки.
        — метод mix перемешивает пятнашки заданное количество раз.
        — метод getRandomBool — вспомогательный, возвращает случайное логическое значение.</p>
    <h2>Обработка событий</h2>
    <p>
        Воспользуемся событием полной загрузки документа, определим наш холст, контекст рисования и создадим объект класса Game.</p>

</article>
</div>
                        </div>
                </div>
            </div>
        </div>
</div>
</div><!--конец контейнера блога -->


<?php include "./footer.php"; ?>