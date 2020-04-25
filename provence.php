
<?php include "./head.php"; ?>

<body>

<div id="siteWrapper" class="siteWrap">

    <header class="site-header" style="background-image: url(content/provBanner.jpg);">
        <div class="overlay" style="padding: 0 !important;">


            <?php include "./header.php"; ?>













            <div class="headingIntro">
                <p>
                    <em>Салон штор</em>
                </p>
                <p>
                    <strong id="mainHeroTitle">Прованс</strong>
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
                                    <a href="beacon.php"></a>
                                </div>

                            </nav>
                        </div>

                    </div>

                </div>
                <div class="hrContainer" style="margin-top:0;
                    margin-bottom:30px;">
                </div>



                <div class="MyMultiDeviceImages">
        <img src="content/provence.jpg" alt=""/>
    </div>

    <!-- Описание проекта -->


    <div class="project-details" style="box-sizing:border-box;">
        <div class="project-details-primary">
            <h2>Project Description</h2>
            <div class="project-details-intro">
                <p>I needed a portfolio website in order to showcase my abilities and gain work as a web designer and developer.
                    I take pride in everything I do and I knew that I had to take extra care with this project as it would help me line up more interesting work. </p>
            </div>
            <p>I wanted to do something really simple and clean by using as much white space as I could get away with. A lot of websites at the moment are split into alternating coloured blocks where the sections are clearly visible. This was a look I knew I wanted to avoid as I wanted to stand out as much as possible. </p>
            <p> With this in mind I chose three colours initially - black, white and grey and began splitting content out using simple grey HR tags which would subtly lead the user to the next section. This is done without broadcasting that there is a section at all. I think what this does is introduce a flow to the content and also entices the user to scroll further.    </p>
            <p> I wanted to display a large image in the background that would really grab the users as they land on each page. The photo I chose for the home page header is of a past trip I had to Swan park in Buncrana. This makes the site personal straight away and this is clear to the users. To this effect I also added a section containing images of past experiences I have had with friends and family and on my own. These images give a little insight into my personality without going overboard. </p>
            <p> In order for me to benefit from the site I needed to be clear about what I am offering. Being a server-side developer for the most part of my career to date I wanted to use this as an advantage. The advantage of having someone who has a passion for web design but who is also proficient at coding. To highlight this I used two SVG graphics which are very visual and easy on the eye.  </p>
            <p> Whilst I built the pages out to display the relative information about me and my services I began to dabble with the idea of adding some server side code to the site. I decided to build a blog engine and I did this using PHP and a MYSQL backend database.
                In addition to this I built nested comment functionality to allow users to leave comments on individual blog pages. </p>
            <p> I did not have great PHP experience prior to this project and decided to use the language to improve my ability with it. In line with this I also chose not to use an HTML framework such as bootstrap. The reason for this is because I wanted to achieve a deeper understanding of responsive web design.  I also believe that these types of frameworks are bloated and contain a lot of things you don't need.  This project was completed with pure HTML, CSS, JQuery and PHP.</p>
            <p>
                I also developed an administrative backend for the site in order for me to be able to post new blog articles and approve/decline comments. You can see some screenshots of the admin backend below...
            </p>
        </div>
        <div class="project-details-secondary">
            <div class="project-details-block project-details-sector">
                <h2>Project Type</h2>
                Personal Portfolio Creation
            </div>
            <div class="project-details-block">
                <h2>What I did</h2>
                <ul>
                    <li>Website Design</li>
                    <li>Blog Engine</li>
                    <li>Nested Comment System</li>
                    <li>Responsive Website Design</li>
                    <li>Administrative backend</li>
                </ul>

                <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                    <div style="outline: medium none;cursor:auto">
                        <h2>Technology used</h2>
                        <ul><li>HTML5, CSS3/SASS, JQuery, Ajax, PHP,Photoshop</li></ul>
                    </div>
                </div>

                <a class="buttonBlockElement" href="index.php">Visit website</a>
            </div>
        </div>
    </div>
            </main>



    <!-- конец описания проекта -->

<?php include "./footer.php"; ?>