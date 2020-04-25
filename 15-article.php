

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

                    <div id="blogPostContainer" class="blogContent">
                        <div id="blogWrap" class="wrap" style="padding: 0px;">

                            <div class="blog-posts clearfix" style="margin-top: 1%;">
                                <article class="postSingle">
                                    <header class="entry-header">
                                        <p class="entry-meta">
                                            <span>posted on:</span>
                                            <time class="entry-time">04/10/16 10:24 PM</time>

                                            <span class="entry-comments-link comments" style='float:left;width:100%'>
            &nbsp;comments: 4&nbsp&nbsp
        </span>
                                            <span class="entry-comments-link" style="width:100%">
          <!-- can only be a maximum of three tags and there must be at least one -->
        <br>tags:<a style='margin-right:2px;margin-left:5px' href='blog-articles.php?categoryId=11'>Mobile Apps</a>
        </span>
                                        </p>

                                        <h1 class="introBlockHeading largerHeading">Mobile App Development Using Web Tech</h1>

<div class="blogPostImage">
    <div class="aboutPillar"><div class="paddingOwen"></div></div>

    <div class="wrapAbout">
        <a title="Finding 'Freelance' Time" href='#'>
            <img alt="Finding Freelance Time" src="../Images/mobileApp.jpg" style="border-radius:50%">
        </a>
    </div>
    <div class="aboutPillar"><div class="paddingOwen"></div></div>
</div>
</header>

<div class="textParagraphBlog" style='margin-top:30px'>

    <p class="articleIntro">
        Previously, developing mobile apps and deploying them to their respective stores (iTunes, Play store, etc.) was a pain for a number of reasons. Native apps being developed for Android had to be developed using Java, IOS apps had to be developed using objective C/C and Windows apps were built in .NET. There was no uniform way of creating an app that would work on all platforms without actually creating three separate apps. What a nuisance you say? I wholeheartedly agree.             </p>




    <p>However, as with everything in this life, we started to think about what we could&nbsp;do to make things a bit easier for ourselves. Enter cross platform mobile app development using web technologies. As time has moved on, websites have been built to adapt to the exhausting variety of device screen sizes. This means&nbsp;that there is a large community of web developers who have been developing websites and web applications which are fully responsive. The skills required in order to build responsive websites is not something that comes easy. Therefore having to learn not one, not two, but possibly three new programming languages on top of the responsive web development techniques they already know in order to claim to offer mobile app development services is a bit of a stretch. This is something which has stopped many software developers including myself, from having the time to create noteworthy&nbsp;mobile apps for&nbsp;each of the respective device operating systems.</p>
    <p>From previously downloading apps I have seen that the average mobile app developed in its native OS language is around&nbsp;20MB. &nbsp;These often require a connection to a network to utilise the capabilities that the app offers. Furthermore, countless updates are pushed to the users device during the&nbsp;lifetime of the app. These updates involve&nbsp;downloading large amounts of data not to mention consuming the users time. In most cases, the user cannot use the app whilst an update is being installed. This is something which does not happen with web apps as updates are rolled out asynchronously. There are some mobile apps which have a desktop version that offer almost all of the same functionality&nbsp;out of the box but do not impose such&nbsp;strains on the users device. The next logical step at this point seemed to be to start developing our mobile apps for the web, moving away from installing them directly on the users device. However as&nbsp;is the case with a lot of things, there are a number of caveats involved.</p>
    <h2>Sacrifice</h2>
    <p>The natural shift required in order to solve these nuances was to move to the web. This is when all websites became super responsive to screen sizes and it is something we continue to&nbsp;see more and more as mobile usage soars. However many entrepreneurs, companies and developers excited about their next big idea found that by moving to the web a sacrifice had to be made. This sacrifice was to do without access to the devices hardware such as the camera, GPS system and push notifications. These are&nbsp;not accessible from web apps because they are not physically installed on the device. For certain apps, quite a lot of them in fact, this is okay. However try telling that to Joe Bloggs who has a great idea for an app that involves recognizing a brand by simply taking a photo of a clothing item.</p>
    <p>Joe needs access to the camera on the device therefore a responsive web app will not work for him. What options is he left with? As I&nbsp;said earlier the only options he had previously was to develop an app with the&nbsp;native OS of each device firmly in mind. However I'm sure Joe will want as big a reach as possible and will want to deploy to all of the app stores. He faces the challenge of finding possibly three developers capable of doing the job which will take a lot of time and a lot of money. So after choosing to develop his new app using the web in order to avoid the multiple app scenario suddenly this headache presented itself. This was yet another challenge to companys, entrepreneurs and developers alike. A challenge which now it seems, has been taken head on and we are seeing some really great solutions for developing cross platform mobile apps using web technologies we are already familiar with. Joe says thanks! Lets see whats on offer shall we?</p>
    <h2>Cross Platform Tools</h2>
    <p>These days with everything going mobile crazy it is essential&nbsp;to rapidly develop and deploy apps at scale. The older style of creating serperate apps for each device OS is no longer a viable option. People who have ideas need to get to market quickly in order to profit. This means cross platform development tools will become vitally important over the next few years. A number of cross platform tools&nbsp;have emerged in the last 2 years or so, &nbsp;which allow developers to create cross platform mobile apps using purely HTML, javascript and CSS. These platforms use a javascript API which calls the required operations of each devices native OS. This means we can now develop ONE app using one common codebase for each device (IOS, Android, Windows phone etc). At last a developer who always wanted to create an app but may not have had the time to do so due to the massive learning curve can now do so with ease. That is, if they are already comfortable with web development languages.</p>
    <p>Of the options available, and there are quite a lot already. I quite like the look of the Intel XDK. It has an IDE which contains all of the tools you need to develop an app using HTML, javascript and CSS. One of the advantages it has over other platforms&nbsp;such as Phonegap is that it houses a web debugger (Chrome - Developer tools, firefox - firebug etc) within the IDE meaning you do not have to go back and forth to check something in different browsers when testing. This will save developers an awful amount of time. The aforementioned PhoneGap is also a popular option among developers as it compiles the javascript into the devices native OS language which alows you to rapidly develop beautiful, native IOS and Android apps. Sencha is another HTML5 mobile application framework that allows you to&nbsp;develop web applications having the look and feel of native apps. While there are many other options out there I have not had the chance to explore many as of yet&nbsp;before I make my final decision on which one to go with.</p>
    <p>One thing for sure is, I will be going cross platform and utilising the skills I already have. I'm sure a large contingency of developers will be doing the same. By doing so they can develop beautiful, fully functional apps on all devices, saving themselves a bucket load of time in the process.</p>        </div>

</article>
</div>
</div><!-- end of blog wrap -->


<?php include "./footer.php"; ?>