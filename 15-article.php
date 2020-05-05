

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
        В этой статье я пошагово опишу разработку простой браузерной игры - "Пятнашки". Сразу скажу, что мое решение не претендует на звание самого короткого либо самого производительного.
        Более того, использование некоторых встроенных методов, вроде array.map() или array.forEach() укоротило бы код программы. Но после финальной инспекции кода я решил оставить все как есть,
потому что такой реализации в Интернете еще нет.    </p>




    <p>Для начала напишем в HTML таблицу, в которой будут происходить действия игры.</p>
    <div class="codeInject">
      <pre><code>&lt;<strong class="tag">div</strong> <strong class="cl">class</strong>=<strong class="val">"wrap15"&gt;</strong>
              &lt;<strong class="tag">table</strong> <strong class="cl">class</strong>=<strong class="val">"table-bordered"</strong> <strong class="cl">onselectstart</strong>="<strong class="tag">return</strong> <strong class="false">false</strong>" <strong class="cl">onmousedown</strong>="<strong class="tag">return</strong> <strong class="false">false</strong>"&gt;
     &lt;<strong class="tag">tbody</strong>&gt;
         &lt;<strong class="tag">tr</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"0"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"1"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"2"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"3"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
         &lt;/<strong class="tag">tr</strong>r&gt;
         &lt;<strong class="tag">tr</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"4"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"5"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"6"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"7"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
         &lt;/<strong class="tag">tr</strong>&gt;
         &lt;<strong class="tag">tr</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"8"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"9"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"10"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"11"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
         &lt;/<strong class="tag">tr</strong>&gt;
         &lt;<strong class="tag">tr</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"12"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"13"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"14"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
              &lt;<strong class="tag">td</strong> <strong class="cl">class</strong>=<strong class="val">"p-3"</strong> <strong class="cl">id</strong>=<strong class="val">"15"</strong>&gt;&lt;/<strong class="tag">td</strong>&gt;
         &lt;/<strong class="tag">tr</strong>&gt;
     &lt;/<strong class="tag">tbody</strong>&gt;
  &lt;/<strong class="tag">table</strong>&gt;
&lt;/<strong class="tag">div</strong>&gt;</code></pre>
    </div>
    <p> Думаю, проблем с пониманием вышеуказанного кода не возникнет: создаем таблицу с четырьмя рядами, по четыре строки в каждом.
        В аттрибутах таблицы прописываем запрет на выделение области нажатия мышки, чтобы при двойном клике не срабатывало выделение синим.
        Каждой клетке присваеваем свой id, начиная с 0
        (нумервция массивов в JS начинается с 0, поэтому нам будет удобно под нее подстроиться).</p>
    <p>Мы могли бы сформировать таблицу динамически с помьщью скрипта, тогда проще было бы присваивать id каждой ячейке, но я считаю, что использование html-кода выглядит более наглядно и понятно.</p>
     <p> Сразу добавим кнопку сброса игры, она будет просто перезагружать страницу.</p>
    <div class="codeInject">
        <pre><code>&lt;<strong class="tag">div</strong> <strong class="cl">class</strong>=<strong class="val">"refresh"</strong>&gt;
    &lt;<strong class="tag">a</strong> <strong class="cl">onclick</strong>=<strong class="val">"window.location.reload();"</strong> <strong class="cl">id</strong>=<strong class="val">"asBut"</strong> <strong class="cl">data-title</strong>=<strong class="val">"Сброс"</strong>&gt;&lt;/<strong class="tag">a</strong>&gt;
&lt;/<strong class="tag">div</strong>&gt;</code> </pre>
    </div>
    <p>Теперь перейдем непосредственно к скрипту. Создаем папку scripts и файл game15.js, после чего подключаем скрипт к html страничке. </p>
    <div class="codeInject"><code>
            &lt;<strong class="tag">script</strong>  <strong class="cl">src</strong>= <strong class="val">"scripts/game15.js"</strong> <strong class="cl">type</strong>=<strong class="val">"text/javascript"</strong>&gt;&lt;/<strong class="tag">script</strong>&gt;
        </code></div>

    <p>   Теперь начинаем работу над игрой. Нам нужен массив чисел от 1 до 15: писать его вручную мы, конечно, не будем. Воспользуемся циклом.</p>
    <div class="codeInject">
        <pre><code><strong class="func">function</strong> <strong class="cl">fift</strong>(){
    <strong class="func">const</strong> result = [];
    <strong class="tag">for</strong> (i = <strong class="false">1</strong>; i <= <strong class="false">15</strong>; i++){
        result.<strong class="func">push</strong>(i);
    }
    <strong class="tag">return</strong> result;
}
<strong class="func">const</strong> fifteen = <strong class="func">fift</strong>();</code></pre>
    </div>

    <p>  Вы скажете: "Неужели это проще, чем написать 1, 2... 15? Может, и не проще, но только потому, что в JS нет PHP-шного Range. </p>
    <p>  Теперь напишем функцию перемешивания номеров. Скажу честно, сначала я написал эту функцию как чистый рандом: наполнение клеток номерами от 1 до 15 в случайном порядке.</p>
    <p>Через несколько проигранных в такую игру сессий я искренне решил, что пятнашки раскладывать разучился.
        Ходил, сокрушался, жаловался жене и только спустя время подумал: может быть дело в неправильной расстановке костяшек?</p>
    <p>Может быть перемешивать номера нужно не случайно, а по правилам игры?</p>
       <p> Семен Семеныч!  </p>
    <img width="100%" height="auto" src="content/facepalm.jpg" />
    <p>В общем, функция должна рандомно менять пустое поле с соседними костяшками.
        Начинаем с объявления пустого массива, который будет сохранять промежуточные значения комбинации перемешанных номеров.</p>
        <p>После - откроем цикл с 2000 итераций (думаю, должно хватить) и объявим несколько буферных переменных, в которые будет сохранено значение перед заменой на ноль.</p>
    <div class="codeInject">
        <pre><code><strong class="greyText">//функция перемешивания номеров</strong>
<strong class="func">function</strong> <strong class="cl">shuffle</strong>(<strong class="tag">arr</strong>){
<strong class="func">const</strong> newArr = [];
arr.<strong class="func">push</strong>(0);
    <strong class="func">for</strong>(i = <strong class="false">0</strong>; i < <strong class="false">2000</strong>; i++){
        <strong class="func">let</strong> rand = <strong class="func">Math.ceil</strong>(<strong class="func">Math.random</strong>()* <strong class="false">4</strong>);
        <strong class="func">const</strong> idx = arr.<strong class="func">indexOf</strong>(<strong class="false">0</strong>);
        <strong class="greyText">//сюда сохраняется число перед заменой на ноль</strong>
        <strong class="func">let</strong> bufferR = arr[idx + <strong class="false">1</strong>];
        <strong class="func">let</strong> bufferL = arr[idx - <strong class="false">1</strong>];
        <strong class="func">let</strong> bufferD = arr[idx + <strong class="false">4</strong>];
        <strong class="func">let</strong> bufferU = arr[idx - <strong class="false">4</strong>];</code></pre>
    </div>
    <p> Здесь я прервал функцию, чтобы коротко описать, что произошло выше и что будет происходить дальше. Выше мы создали алгоритм, который случайным образом выбирает одну из 4 цифр.
    Каждая цифра соответствует стороне, в которую будет помещена пустая ячейка. Если же пустая ячейка стоит на краю, то в сторону границы она "пойти" не может - в этом случае мы шлем ее в противоположную сторону. </p>
    <p>Воспользуемся связкой switch/case, потому что она удобно группирует условия.</p>

    <div class="codeInject">
        <pre><code><strong class="greyText">//если ноль в углу, мешаем в другую сторону</strong>
        <strong class="tag">switch</strong>(rand){
            <strong class="tag">case</strong> <strong class="false">1</strong>:
                <strong class="tag">switch</strong>(arr.<strong class="func">indexOf</strong>(<strong class="false">0</strong>)){
                    <strong class="tag">case</strong> <strong class="false">0</strong>:
                    <strong class="tag">case</strong> <strong class="false">4</strong>:
                    <strong class="tag">case</strong> <strong class="false">8</strong>:
                    <strong class="tag">case</strong> <strong class="false">12</strong>:
                        arr[idx] = bufferR;
                        arr[idx + <strong class="false">1</strong>] = <strong class="false">0</strong>;
                        <strong class="tag">break</strong>;
                    <strong class="tag">default</strong>:
                        arr[idx - <strong class="false">1</strong>] = <strong class="false">0</strong>;
                        arr[idx] = bufferL;
                        <strong class="tag">break</strong>;
                }
                <strong class="tag">break</strong>;
            <strong class="tag">case</strong> <strong class="false">2</strong>:
                <strong class="tag">switch</strong>(idx){
                    <strong class="tag">case</strong> <strong class="false">0</strong>:
                    <strong class="tag">case</strong> <strong class="false">1</strong>:
                    <strong class="tag">case</strong> <strong class="false">2</strong>:
                    <strong class="tag">case</strong> <strong class="false">3</strong>:
                        arr[idx] = bufferD;
                        arr[idx + <strong class="false">4</strong>] = <strong class="false">0</strong>;
                        <strong class="tag">break</strong>;
                    <strong class="tag">default</strong>:
                        arr[idx] = bufferU;
                        arr[idx - <strong class="false">4</strong>] = <strong class="false">0</strong>;
                        <strong class="tag">break</strong>;
                }
                <strong class="tag">break</strong>;
            <strong class="tag">case</strong> <strong class="false">3</strong>:
                <strong class="tag">switch</strong>(idx){
                    <strong class="tag">case</strong> <strong class="false">3</strong>:
                    <strong class="tag">case</strong> <strong class="false">7</strong>:
                    <strong class="tag">case</strong> <strong class="false">11</strong>:
                    <strong class="tag">case</strong> <strong class="false">15</strong>:
                        arr[idx - <strong class="false">1</strong>] = <strong class="false">0</strong>;
                        arr[idx] = bufferL;
                        arr[idx - <strong class="false">1</strong>] = <strong class="false">0</strong>;
                        <strong class="tag">break</strong>;
                    <strong class="tag">default</strong>:
                        arr[idx] = bufferR;
                        arr[idx + <strong class="false">1</strong>] = <strong class="false">0</strong>;
                        <strong class="tag">break</strong>;
                }
                <strong class="tag">break</strong>;
            <strong class="tag">case</strong> <strong class="false">4</strong>:
                <strong class="tag">switch</strong>(idx){
                    <strong class="tag">case</strong> <strong class="false">12</strong>:
                    <strong class="tag">case</strong> <strong class="false">13</strong>:
                    <strong class="tag">case</strong> <strong class="false">14</strong>:
                    <strong class="tag">case</strong> <strong class="false">15</strong>:
                        arr[idx] = bufferU;
                        arr[idx - <strong class="false">4</strong>] = <strong class="false">0</strong>;
                        <strong class="tag">break</strong>;
                    <strong class="tag">default</strong>:
                        arr[idx] = bufferD;
                        arr[idx + <strong class="false">4</strong>] = <strong class="false">0</strong>;
                        <strong class="tag">break</strong>;
                }
            <strong class="tag">break</strong>;
        }
    }
    <strong class="greyText">//удаляем ноль из массива и заменяем его пустой строкой</strong>
    arr[arr.<strong class="func">indexOf</strong>(<strong class="false">0</strong>)] = '';
    <strong class="tag">return</strong> arr;
}</code></pre>
    </div>

    <p> Мы перемешали массив, получив случайную комбинацию костяшек, но при этом, её все еще можно разлдожить, чтобы пройти игру.
        Теперь надо наполнить таблицу полученными значениями. Для этого воспользуемся циклом.</p>
    <div class="codeInject">
        <pre><code><strong class="func">let</strong> shuf = <strong class="func">shuffle</strong>(fifteen);
<strong class="func">for</strong>(i = <strong class="false">0</strong>; i < shuf.length; i++){
    <strong class="func">document.getElementById</strong>(i).innerHTML = shuf[i];
}</code></pre>
    </div>

    <p>Последний этап разработки игры - создание функции, которая будет реагировать на клик мышкой, перемещать костяшки и проверять не завершена ли игра.
    Назовем функцию changeItem, зададим в качестве аргумента событие event - то есть цель, на которой сработал обработчик.
    </p>
    <div class="codeInject">
        <pre><code><strong class="func">function</strong> <strong class="cl">changeItem</strong>(<strong class="tag">event</strong>){
    <strong class="func">let</strong> neighbour = [], empty;
    <strong class="greyText">//ищем соседа пустой клетки</strong>
    <strong class="func">function</strong> findN(){
        <strong class="tag">for</strong>(i = <strong class="false">0</strong>; i < shuf.length; i++){
            <strong class="func">document.getElementById</strong>(i).innerHTML = shuf[i];
            <strong class="tag">if</strong>(shuf[i] === ''){
                empty = <strong class="func">document.getElementById</strong>(i);
                <strong class="tag">if</strong>(<strong class="func">document.getElementById</strong>((i - <strong class="false">1</strong>)) && i !== <strong class="false">4</strong> && i != <strong class="false">8</strong> && i != <strong class="false">12</strong>){
                    neighbour.<strong class="func">push</strong>(<strong class="func">document.getElementById</strong>((i - <strong class="false">1</strong>)));
                }
                <strong class="tag">if</strong> (<strong class="func">document.getElementById</strong>((i + <strong class="false">1</strong>)) && i !== <strong class="false">3</strong> && i != <strong class="false">7</strong> && i != <strong class="false">11</strong>){
                    neighbour.<strong class="func">push</strong>(<strong class="func">document.getElementById</strong>((i + <strong class="func">1</strong>)));
                }
                <strong class="tag">if</strong> (<strong class="func">document.getElementById</strong>((i - <strong class="false">4</strong>))){
                    neighbour.<strong class="func">push</strong>(<strong class="func">document.getElementById</strong>((i - <strong class="false">4</strong>)));
                }
                <strong class="tag">if</strong> (<strong class="func">document.getElementById</strong>((i + <strong class="false">4</strong>)))
                    neighbour.<strong class="func">push</strong>(<strong class="func">document.getElementById</strong>((i + <strong class="false">4</strong>)));
            }
        }
    }
    <strong class="func">findN</strong>();</code></pre>
    </div>
    <p>Остановимся, чтобы разобраться, что здесь произошло. Мы объявили функцию "найди соседа" пустой ячейки. Соседи нам будут нужны для того, чтобы на них срабатывал обработчик,
        все остальные элементы приложения должны оставаться неактивными.</p>
    <p>После обнаружения соседи пустой ячейки собираются массив из элементов страницы, на которых и будет срабатывать обработчик.</p>
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