
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

    <!-- Раздел постов -->

    <div class="hrContainer">
        <hr class="hrHomePage5">
    </div>

    <h1 class="introBlockHeading" style="padding-bottom:0;">Последние статьи</h1>
    <div class="blog-posts clearfix">

        <article class="published post home">
            <a href="15-article.php">
                <img class="attachment-post-thumbnail" width="260" height="260" alt="Пишем игру на чистом Javascript" src="/content/15.jpg">
            </a>
            <header class="entry-header">
                <p class="entry-meta">
                    <small>Опубликовано</small>
                    <time itemprop="datePublished">19.04.2020 в 18:36</time>

                    <span class="entry-comments-link">

</span>
                </p>
                <h2 class="entry-title" itemprop="headline"><a rel="bookmark" href="15-article.php">Пишем игру на чистом Javascript</a></h2>
                <a class="more-link go-right" href="15-article.php">Продолжить чтение?</a>
            </header>
            <div class="entry-content" itemprop="text"></div>

            <footer class="entry-footer"></footer>
        </article>

        <article class="published post home">
            <a href="ai.php">
                <img class="attachment-post-thumbnail" width="260" height="260" alt="Создаем простой ИИ" src="/content/ai.jpg">
            </a>
            <header class="entry-header">
                <p class="entry-meta">
                    <small>Опубликовано</small>
                    <time itemprop="datePublished">20.04.2020 в 10:25</time>

                    <span class="entry-comments-link">

</span>
                </p>
                <h2 class="entry-title" itemprop="headline"><a rel="bookmark" href="ai.php">Создаем простой искусственный интеллект</a></h2>
                <a class="more-link go-right" href="ai.php">Продолжить чтение?</a>
            </header>
            <div class="entry-content" itemprop="text"></div>
            <footer class="entry-footer"></footer>
        </article>

        <article class="published post home">
            <a href="interact.php">
                <img class="attachment-post-thumbnail" width="260" height="260" alt="Интерактивный дизайн" src="content/inter-design.jpg">
            </a>
            <header class="entry-header">
                <p class="entry-meta">
                    <small>Опубликовано</small>
                    <time itemprop="datePublished">21.04.2020 в 15:08</time>

                    <span class="entry-comments-link">

</span>
                </p>
                <h2 class="entry-title" itemprop="headline"><a rel="bookmark" href="interact.php">Интерактивный дизайн</a></h2>
                <a class="more-link go-right" href="interact.php">Продолжить чтение?</a>
            </header>
            <div class="entry-content" itemprop="text"></div>
            <footer class="entry-footer"></footer>
        </article>

    </div>
    <!-- конец раздела постов -->


<?php include "./footer.php"; ?>