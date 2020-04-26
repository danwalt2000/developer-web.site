

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
                                            <time class="entry-time">20.04.2020 в 10:25</time>


                                        </p>

                                        <h1 class="introBlockHeading largerHeading">Создаем простой искусственный интеллект</h1>

<div class="blogPostImage">
    <div class="aboutPillar"><div class="paddingMy"></div></div>

    <div class="wrapAbout">
        <a title="Пишем игру на чистом Javascript" href='ai.php'>
            <img alt="Пишем игру на чистом Javascript" src="content/ai.jpg" style="border-radius:50%">
        </a>
    </div>
    <div class="aboutPillar"><div class="paddingMy"></div></div>
</div>
</header>

<div class="textParagraphBlog" style='margin-top:30px'>

    <p class="articleIntro">
        Как написать бота, которого будет нельзя обыграть в «крестики-нолики», или Знакомство с правилом «минимакс» </p>




    <p>Вполне возможно, что после сотен партий в «крестики-нолики» вы задумывались: каков же оптимальный алгоритм? Но если вы здесь, то вы наверняка ещё и пробовали написать реализацию этой игры. Мы пойдём дальше и напишем бота, который будет невозможно обыграть в «крестики-нолики». Предугадав ваш вопрос «почему?», ответим: благодаря алгоритму «минимакс».

        Как и профессиональный шахматист, этот алгоритм просчитывает действия соперника на несколько ходов вперёд — до тех пор, пока не достигнет конца партии, будь то победа, поражение или ничья. Попав в это конечное состояние, ИИ начислит себе положительное количество очков (в нашем случае +10) за победу, отрицательное (-10) — за поражение, и нейтральное (0) — за ничью.

        В то же время алгоритм проводит аналогичные расчёты для ходов игрока. Он будет выбирать ход с наиболее высоким баллом, если ходит ИИ, и ход с наименьшим, если ходит игрок. Используя такую стратегию, минимакс избегает поражения.

        Попробуйте сыграть вот в такую игру.</p>
    <p>Алгоритм «минимакс» проще всего описать в виде рекурсивной функции, которая:

        возвращает значение, если найдено конечное состояние (+10, 0, -10),
        проходит по всем пустым клеткам на поле,
        вызывает минимакс-функцию для каждой из них (рекурсия),
        оценивает полученные значения
        и возвращает наилучшее из них.</p>
    <h2>Реализация минимакса</h2>
    <p>
        Мы рассмотрим ситуацию, когда игра подходит к концу (смотрите картинку ниже). Поскольку минимакс проходит по всем возможным состояниям игры (а их сотни тысяч), имеет смысл рассматривать эндшпиль — так нам придётся отслеживать меньшее количество рекурсивных вызовов функции (всего 9).

        Пусть ИИ играет крестиками, человек — ноликами.</p>

</article>
</div>
                        </div>
                </div>
            </div>
        </div>
</div>
</div><!-- конец контейнера блога -->


<?php include "./footer.php"; ?>