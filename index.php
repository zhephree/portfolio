<?php
    $path = 'home';
    $routes = array('home', 'developer', 'comedian', 'personal');
    if(isset($_GET['path']) && in_array($_GET['path'], $routes)){
        $path = $_GET['path'];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Geoffrey Gauchet</title>
        <meta name="description" content="Comedian, Web Developer, Geoffrey Gauchet" />
        <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="/styles/site.css?t=1553910313765" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="<?= $path; ?>">
        <nav id="nav">
            <button id="nav-toggle"><i class="fas fa-bars"></i></button>

            <div class="nav-options">
                <a href="/"><i class="fas fa-home"></i> Home</a>
                <a href="/developer"><i class="fas fa-code"></i> Developer</a>
                <a href="/comedian"><i class="far fa-laugh"></i> Comedian</a>
                <a href="/personal"><i class="fas fa-child"></i> Personal</a>
            </div>

            <div class="nav-footer">
                <a href="https://facebook.com/geoff.gauchet" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://instagram.com/animatedgeoff" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/user/sirgeoph/videos" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </nav>
        <div id="canvas">
            <header>
                <div id="title">geoffrey gauchet</div>
                <div id="subtitle">developer / comedian</div>
            </header>
            <div class="content" id="home">
                <section>
                    <div class="image"></div>
                    <div class="body">
                        <div class="big-text">
                            Freelance, mostly-full-stack web developer who specializes in frontend development, as well as a stand-up comedian, podcaster, producer, host, and promoter in New Orleans.
                        </div>
                        <div class="reg-text">
                            Check the menu on the left for more details, or jump into my <a href="https://www.coroflot.com/zhephree" target="_blank">Coroflot</a> portfolio, or checkout some <a href="https://www.504comedy.com" target="_blank">comedy shows in New Orleans</a>.
                        </div>
                    </div>
                </section>
            </div>
            <div class="content" id="developer">
                <section>
                    <div class="image"></div>
                    <div class="body">
                        <div class="big-text">
                            Geoffrey is a New Orleans-based developer, who focuses on frontend development, but also is proficient in backend and database development. Languages and frameworks of expertise include: PHP, JavaScript, Angular, CakePHP, node.js, Cordova, WordPress, React, and more.
                        </div>
                        <div class="reg-text">
                            View his <a href="http://www.coroflot.com/zhephree" target="_blank">portfolio</a>, <a href="http://github.com/zhephree" target="_blank">GitHub</a>, <a href="https://layman-weather.glitch.me/" target="_blank">Layman Weather Glitch app</a>, or his Heroku-hosted NodeJS-based <a href="https://twitter.com/geoff_ebooks" target="_blank">Twitter bot</a>.
                        </div>
                        <div class="reg-text">
                            Download his CV <a href="/geoffrey_gauchet_cv.pdf">as a wonderful PDF</a>.
                        </div>
                        <div class="reg-text">
                            <b>Press</b><br>
                            <a href="http://www.webosnation.com/developer-spotlight-geoff-gauchet" target="_blank">Developer Spotlight: Geoff Gauchet</a> | webOS Nation | April 13, 2011<br>
                            <a href="http://www.webosnation.com/new-zhephree-accounts-bringing-multi-device-syncing-new-zhephree-apps" target="_blank">New Zhephree Accounts bringing multi-device syncing for new Zhephree Apps</a> | webOS Nation | December 1, 2011<br>
                            <a href="http://www.webosnation.com/precentral-net-best-2010-awards-winners" target="_blank">webOS Nation Best of 2010 Awards Winners</a> | webOS Nation | December 20, 2010<br>
                        </div>
                        <div class="reg-text">
                            <b>Podcast Appearances</b><br>
                            <a href="http://www.webosnation.com/iterate-8-blaq" target="_blank">Iterate</a> | October 28, 2011<br>
                        </div>
                    </div>
                </section>
            </div>
            <div class="content" id="comedian">
                <section>
                    <div class="image"></div>
                    <div class="body">
                        <div class="big-text">
                            Geoffrey Gauchet is a stand-up comic from New Orleans, LA. He was also voted "Best Male Twitter Account" as chosen by the readers of Gambit Weekly. He, his house, and his cats, were featured in episode 7 of VICELAND's Flophouse series. He hosts the monthly comedy gameshow The Rip-off Show at Hi-Ho Lounge, and the monthly stand-up drinking game Wait, What? at Seahorse Saloon, and a weekly open mic, Crescent Fresh, every Thursday at The Dragon’s Den. He also curates 504Comedy, a living calendar of stand-up, improv, sketch, and storytelling shows in New Orleans and is the host of the Simpsons-centric podcast The Blurst of Times.
                        </div>
                        <div class="reg-text">
                            Check out the site for his comedy gameshow <a href="http://ripoff.show/" target="_blank">The Rip-off Show</a>, his comedy drinking game <a href="https://www.facebook.com/waitwhatnola/" target="_blank">Wait, What?</a>, his weekly open mic <a href="https://www.facebook.com/dragonsdenupstairs/" target="_blank">Crescent Fresh</a>, the living comedy calendar he built and curates <a href="https://504comedy.com/" target="_blank">504Comedy</a>, or his <a href="https://www.youtube.com/user/sirgeoph/videos" target="_blank">YouTube channel</a>.
                        </div>
                        <div class="reg-text">
                            <b>Featured On:</b><br>
                            <div class="album">
                                <a href="https://open.spotify.com/album/7HS3aLFMOP5hpxF8HhBWDx?si=LFK5lthqRVK2mD_xPzl73w">
                                    <img src="/img/listening_party.jpg" border="0">
                                </a><br>
                                <a href="https://open.spotify.com/album/7HS3aLFMOP5hpxF8HhBWDx?si=LFK5lthqRVK2mD_xPzl73w">Listening Party</a>
                            </div>
                            <div class="album">
                                <a href="https://open.spotify.com/album/49OlcTMYnis165IcvmRATc?si=V6WSyR7XQPedbf2u1vFMoQ">
                                    <img src="/img/no_show.jpg" border="0">
                                </a><br>
                                <a href="https://open.spotify.com/album/49OlcTMYnis165IcvmRATc?si=V6WSyR7XQPedbf2u1vFMoQ">No Show Comedy</a>
                            </div>
                        </div>
                        <div class="reg-text">
                            <b>Press</b><br>
                            <a href="http://www.bestofneworleans.com/thelatest/archives/2017/03/24/the-rip-off-show-celebrates-two-years-as-the-only-comedy-game-show-in-new-orleans" target="_blank">The Rip-Off Show celebrates two years as the only comedy game show in New Orleans</a><br>Gambit Weekly | Mar 24, 2017<br>
                            <a href="http://www.nola.com/food/index.ssf/2016/09/disneys_healthy_gumbo_did_you.html" target="_blank">Did you make Disney's Healthy Gumbo recipe? One N.O. comic did</a><br>
                            NOLA.com / The Times-Picayune | Sept 15, 2016<br>
                            <a href="http://www.livingneworleans.com/New-Orleans-Living-June-2016/#p=45" target="_blank">Wait, What?</a><br>
                            New Orleans Living | June 2016<br>
                            <a href="https://www.pastemagazine.com/articles/2016/05/when-celebrities-just-show-up-the-mystery-and-surp.html" target="_blank">When Celebrities Just Show Up: The Mystery and Surprise of Stand-up Drop-ins</a><br>
                            Paste Magazine | May 2016<br>
                            <a href="http://www.bestofneworleans.com/gambit/preview-the-rip-off-show/Content?oid=2789991" target="_blank">Preview: The Rip-Off Show</a><br>
                            Gambit Weekly | October 19, 2015<br>
                            <a href="http://www.bestofneworleans.com/blogofneworleans/archives/2014/06/03/your-2014-y-speak-award-winners" target="_blank">Your 2014 Y@ Speak Award Winners (Best Male Account)</a><br>
                            Gambit Weekly | June 3, 2014<br>
                            <a href="http://blog.nola.com/interact/2014/05/twitter_explodes_with_nolaconf.html" target="_blank">Twitter explodes with #NOLAConfessions: What are yours?</a><br>
                            NOLA.com / The Times-Picayune | May 14, 2014<br>
                        </div>

                        <div class="reg-text">
                            <b>Podcast Appearances</b><br>
                            <a href="http://www.theoamnetwork.com/looklike/2019/3/25/episode-33-you-look-like-the-scottie-pippen-of-tetris?fbclid=IwAR1pNIn3lVyvO__2ODI2cFwdRnO-hXgjvaNQ0Or0xrMw-XdJfW8bt6ekPOs" target="_blank">You Look Like</a><br>
                            March 25, 2019<br>
                            <a href="https://player.fm/series/beer-and-mp3s/geoffrey" target="_blank">Beer and MP3s</a><br>
                            April 27, 2016<br>
                            <a href="http://chooseyourownshow.podbean.com/e/breanna-bietz-and-geoffrey-gauchet-south-dakota-and-my-cousin-vinny/" target="_blank">The Choose Your Own Show</a><br>
                            January 16, 2016<br>
                            <a href="http://andrewhealan.podbean.com/e/mary-devon-dupuy-geoffrey-gauchet/" target="_blank">That Sounds Reasonable</a><br>
                            September 15, 2015<br>
                        </div>
                    </div>
                </section>
            </div>
            <div class="content" id="personal">
                <section>
                    <div class="image"></div>
                    <div class="body">
                        <div class="big-text">
                            Aside from writing jokes and code, Geoffrey blogs, tracks hurricanes, brews beer, cooks, and occassionally posts a photo on Instagram not of his cats.
                        </div>
                        <div class="reg-text">
                            You can read his <a href="http://frobba.com" target="_blank">blog</a>, or look at <a href="https://instagram.com/animatedGeoff" target="_blank">photos of his cats and food he cooked</a>.
                        </div>
                        <div class="reg-text">
                            He used to co-host a sports podcast, believe it or not, called <a href="http://delayofgame.net/" target="_blank">Delay of Game</a>. He was also the subject of a <a href="https://www.bestofneworleans.com/gambit/do-we-need-a-new-hurricane-scale/Content?oid=8595828" target="_blank">cover story for Gambit Weekly</a> (December 4, 2017) about the hurricane scale and algorithm he developed, called the <a href="http://tcis.geoffreygauchet.com" target="_blank">Tropical Cyclone Intensity Scale</a>.
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script type="text/javascript">
            var start = '<?= $path; ?>';
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-700898-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          // gtag('config', 'UA-700898-2');
        </script>

        <script type="text/javascript" src="/js/site.js?t=1553910313765"></script>
    </body>
</html>