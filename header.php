<!DOCTYPE html>
<!--
Очень мило, что вы заглянули "под капот" моего сайта. Приятного просмотра! ;) 
- Виталий.
-->

<html lang="ru">
    <head>
        <meta property="og:url" content="http://developer-web.site" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Портфолио веб-разработчика и дизайнера" />
        <meta property="og:description" content="Я - веб-дизайнер и разработчик широкого профиля. Специализируюсь на верстке и настройке серверной части веб-приложений и сайтов. Я искренне считаю, что высококлассный веб-дизайн должен быть чистым и простым, и, в то же время, привлекающим внимание пользователя." />
        <meta property="og:image" content="content/logo.gif" />
         <link rel="icon" href="..." />
        <link href="style/style.css" rel="stylesheet" type="text/css"/>
        <link href="style/swipebox.css" rel="stylesheet" type="text/css"/> 
        <title>Портфолио web-разработчика и дизайнера</title>
        <meta charset="UTF-8">
       <meta name="description" content="Веб-разработчик и дизайнер. Нужен крутой сайт - свяжитесь со мной!">
         <meta name="keywords" content="Программист, разработчик, дизайнер, портфолио, PHP, Javascript, jQuery, создание сайтов, верстка, Украина, Донецк, Ukraine, software development, web-design, web-development, frontend, backend, coding"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="scripts/jQuery.js" defer></script>
        <script src="scripts/swipebox.js" defer></script>
        <script src="Scripts/home.js" type="text/javascript" defer></script>
        <script src="Scripts/main.js" type="text/javascript" defer></script>
        <script src="Scripts/notificationsignup.js" type="text/javascript" defer></script>
     

    </head>


<!-- Конец head -->

 
    <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=287467251609482";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


       <div id="siteWrapper" class="siteWrap">
            
            <header class="site-header" style="height:100vh !important;">
            <div class="overlay" style="width:100%;height:100vh !important">
            <div class="logoDiv">
                
                <a href='index.php'>
                <div id="logoImage">
                    <img src="content/logo.gif" alt="Logo"/>
                </div>
                    </a>
                  
                  </div>
                
                <input id="mobileNavToggle" class="mobile-nav-toggle-box hidden" type="checkbox" name="mobile-nav-toggle">
                <div id="overlayNav">
                
                <div id="mobileNavWrapper" class="nav-wrapper">
                <nav id="mobileNavigation">
                <div class="index home active">
                <a href="index.php"> Главная </a>
                </div>
                <div class="index home">
                <a href="about.html"> Обо мне </a>
                </div>
                <div class="index home">
                <a href="portfolio.html"> Портфолио </a>
                </div>
                <div class="index home">
                <a href="experience.html"> Навыки </a>
                </div>
                <div class="index home">
                <a href="blog-articles.php"> Блог </a>
                </div>
                    <div class="index home social">
                        <a class="iconMobileNav twitter" title="GitHub" href="https://github.com/danwalt2000">
                        <svg viewBox="0 0 28.3 23" style="width:35px;">
                        <path d="M 23.300781 6.523438 C 22.183594 4.613281 20.667969 3.097656 18.753906 1.980469 C 16.839844 0.863281 14.753906 0.304688 12.488281 0.304688 C 10.222656 0.304688 8.132812 0.863281 6.21875 1.980469 C 4.304688 3.097656 2.792969 4.613281 1.675781 6.523438 C 0.558594 8.4375 0 10.527344 0 12.792969 C 0 15.511719 0.792969 17.960938 2.382812 20.132812 C 3.96875 22.304688 6.019531 23.808594 8.535156 24.644531 C 8.828125 24.699219 9.046875 24.660156 9.1875 24.53125 C 9.328125 24.402344 9.398438 24.238281 9.398438 24.042969 C 9.398438 24.011719 9.394531 23.71875 9.390625 23.164062 C 9.382812 22.613281 9.382812 22.128906 9.382812 21.71875 L 9.007812 21.785156 C 8.769531 21.828125 8.46875 21.84375 8.105469 21.839844 C 7.742188 21.835938 7.363281 21.796875 6.976562 21.726562 C 6.585938 21.65625 6.222656 21.492188 5.886719 21.238281 C 5.550781 20.984375 5.3125 20.652344 5.171875 20.238281 L 5.007812 19.867188 C 4.898438 19.617188 4.730469 19.339844 4.496094 19.035156 C 4.261719 18.734375 4.027344 18.527344 3.789062 18.417969 L 3.675781 18.335938 C 3.597656 18.28125 3.527344 18.21875 3.464844 18.140625 C 3.398438 18.066406 3.347656 17.988281 3.316406 17.914062 C 3.285156 17.839844 3.3125 17.777344 3.398438 17.726562 C 3.484375 17.679688 3.640625 17.652344 3.871094 17.652344 L 4.195312 17.703125 C 4.410156 17.746094 4.679688 17.875 5 18.09375 C 5.320312 18.308594 5.582031 18.589844 5.789062 18.9375 C 6.039062 19.382812 6.339844 19.722656 6.691406 19.953125 C 7.042969 20.1875 7.398438 20.304688 7.753906 20.304688 C 8.113281 20.304688 8.421875 20.277344 8.683594 20.222656 C 8.941406 20.167969 9.1875 20.085938 9.414062 19.980469 C 9.511719 19.253906 9.777344 18.695312 10.210938 18.304688 C 9.59375 18.238281 9.035156 18.140625 8.542969 18.011719 C 8.050781 17.882812 7.542969 17.667969 7.015625 17.375 C 6.488281 17.085938 6.054688 16.722656 5.707031 16.289062 C 5.359375 15.855469 5.074219 15.285156 4.851562 14.582031 C 4.632812 13.875 4.519531 13.0625 4.519531 12.140625 C 4.519531 10.828125 4.949219 9.714844 5.804688 8.792969 C 5.402344 7.804688 5.441406 6.699219 5.917969 5.476562 C 6.234375 5.378906 6.699219 5.449219 7.316406 5.695312 C 7.933594 5.9375 8.386719 6.148438 8.675781 6.320312 C 8.960938 6.492188 9.191406 6.640625 9.363281 6.761719 C 10.375 6.476562 11.414062 6.335938 12.488281 6.335938 C 13.558594 6.335938 14.601562 6.476562 15.609375 6.761719 L 16.226562 6.371094 C 16.648438 6.109375 17.148438 5.871094 17.722656 5.652344 C 18.296875 5.4375 18.734375 5.378906 19.039062 5.476562 C 19.527344 6.699219 19.570312 7.804688 19.167969 8.792969 C 20.027344 9.714844 20.453125 10.832031 20.453125 12.140625 C 20.453125 13.0625 20.34375 13.878906 20.121094 14.589844 C 19.898438 15.296875 19.613281 15.867188 19.257812 16.296875 C 18.90625 16.722656 18.46875 17.085938 17.941406 17.375 C 17.417969 17.667969 16.90625 17.882812 16.414062 18.011719 C 15.921875 18.140625 15.363281 18.238281 14.746094 18.304688 C 15.3125 18.792969 15.59375 19.5625 15.59375 20.613281 L 15.59375 24.042969 C 15.59375 24.238281 15.660156 24.402344 15.796875 24.53125 C 15.929688 24.660156 16.144531 24.699219 16.4375 24.644531 C 18.953125 23.808594 21.003906 22.304688 22.59375 20.132812 C 24.179688 17.960938 24.972656 15.511719 24.972656 12.792969 C 24.972656 10.527344 24.414062 8.4375 23.300781 6.523438 Z M 23.300781 6.523438">
                        </svg>
                        </a>  
                        
                         
                        <a href="www.facebook.com/danwalt2000" class="iconMobileNav facebook" title="Facebook"><svg style="width:35px;" viewBox="0 0 28.3 23"><path d="M 23.515625 0 L 1.375 0 C 0.617188 0 0 0.613281 0 1.375 L 0 23.515625 C 0 24.277344 0.617188 24.890625 1.375 24.890625 L 13.292969 24.890625 L 13.292969 15.25 L 10.050781 15.25 L 10.050781 11.496094 L 13.292969 11.496094 L 13.292969 8.722656 C 13.292969 5.511719 15.257812 3.757812 18.125 3.757812 C 19.5 3.757812 20.679688 3.863281 21.023438 3.90625 L 21.023438 7.265625 L 19.035156 7.265625 C 17.472656 7.265625 17.171875 8.007812 17.171875 9.09375 L 17.171875 11.492188 L 20.894531 11.492188 L 20.40625 15.25 L 17.171875 15.25 L 17.171875 24.890625 L 23.515625 24.890625 C 24.273438 24.890625 24.890625 24.273438 24.890625 23.515625 L 24.890625 1.375 C 24.890625 0.613281 24.273438 0 23.515625 0 Z M 23.515625 0"/></svg><!--[if lt IE 9]><em>Facebook</em><![endif]--></a>
                        </div>
                    
                <div class="index base">
                </div>
                </nav>
                </div>
                </div>
                <label id="mobileNavBars" class="mobile-nav-toggle-label show-on-scroll-mobile" for="mobileNavToggle" onclick="">
                <div class="top-bar"></div>
                <div class="middle-bar"></div>
                <div class="bottom-bar"></div>
                </label>
                
            <nav class="navGrid">
             <ul class="menuList">
                 <li class="a-nav-item">
                 <a class="menuBlockLink" href="index.php">
                     <div id="menuBlockSelected" class="menuBlock menuBlockFirst" ><div class="linkSummary"><span class="counterSpan">01.</span><header class="MenuHeader">Главная</header><p>Краткое информация.</p></div><hr class="menuHr"></div>
                 </a></li>

                 <li class="a-nav-item">
                 <a class="menuBlockLink" href="about.html">
                     <div class="menuBlock" ><div class="linkSummary"><span class="counterSpan">02.</span><header class="MenuHeader">Обо мне</header><p>Немного информации обо мне.</p></div></div>
                 </a></li>
                 
                 <li class="a-nav-item">
                 <a class="menuBlockLink" href="portfolio.html">
                     <div class="menuBlock" ><div class="linkSummary"><span class="counterSpan">03.</span><header class="MenuHeader">Портфолио</header><p>Некоторые проекты, над которыми я работал.</p></div></div>
                 </a></li>
         
                 <li class="a-nav-item">
                 <a class="menuBlockLink" href="experience.html">
                     <div class="menuBlock" ><div class="linkSummary"><span class="counterSpan">04.</span><header class="MenuHeader">Опыт</header><p>Мои навыки и способности.</p></div></div>
                 </a></li>
                 
                  <li class="a-nav-item">
                 <a class="menuBlockLink" href="blog-articles.php">
                     <div class="menuBlock" ><div class="linkSummary"><span class="counterSpan">05.</span><header class="MenuHeader">Блог</header><p>Мои статьи о разработке и дизайне.</p></div></div>
                 </a></li>
            </ul> 
                
        </nav>
                
                <div class="menuFiller"><div class="paddingMy"></div></div>
              
