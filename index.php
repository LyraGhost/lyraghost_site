<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="theme-color" content="#00b1e6">
        <meta name="author" content="Lyra Ghost"/>
        <meta name="description" content="Lyra is a Web Designer/Developer specializing in front-end development." />
        <meta name="keywords" content="lyraghost, lyra, ghost, web design, web development, ui, windsor, ontario, canada, front-end" />
        <!-- Yay code is fun! :D -->
        <title>Lyra Ghost - Web Developer / Designer</title>
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link href="css/main.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Amatica+SC%7CLato:100,300,400,700" rel="stylesheet" type="text/css"/>
        <script src="https://use.fontawesome.com/4c00fbc108.js"></script>
    </head>
    <body>
        <div id="loader">
            <p>Loading project...</p>
            <div class="progress">
                <div class="progressbar unfixed"></div>
            </div>
        </div>
        <nav class="top-menu">
            <h1 class="med"><a href="#top">LyraGhost</a></h1>
            <h1 class="sm"><a href="#top">LG</a></h1>
            <button type="button" class="menu-btn sm">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <div class="project-nav">
                <div>
                    <button class="prev"><span></span></button>
                    <button class="next"><span></span></button>
                    <button class="close"><span></span></button>
                </div>
            </div>
            <div class="main-nav med">
                <span><a href="#top">Home</a></span>
                <span><a href="#projects">Projects</a></span>
                <span><a href="#about">About</a></span>
                <span><a href="#contact">Contact</a></span>
            </div>
        </nav>
        <nav class="mobile-menu">
            <ul>
                <li>
                    <a href="#top">Home</a>
                </li>
                <li>
                    <a href="#projects">Projects</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
        <section id="cover">
            <h1>LyraGhost</h1>
            <p>Lyra Bissonnette<span class="sm"><br/></span><span class="med"> &mdash; </span>Web Developer / Designer</p>
            <ul class="social">
                <li>
                    <a data-ext="true" href='https://twitter.com/Ghostiyra' target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a data-ext="true" href='https://github.com/LyraGhost' target="_blank"><i class="fa fa-github"></i></a>
                </li>
            </ul>
            <nav class="med">
                <ul>
                    <li>
                        <a href="#projects">Projects</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </section>
        <section id="projects">
            <div class="project-list">

                <div class="project-wrap">
                    <div class="project"
                         style="background-image:url('images/projects/foodtown/thumb.jpg');">
                        <a data-project="comberfoodtown"><span>View Project</span></a>
                    </div>
                    <div class="title">
                        <h2>Comber Food Market</h2>
                        <span class="tags">Design, Code</span>
                    </div>
                </div>

                <div class="project-wrap">
                    <div class="project"
                         style="background-image:url('images/projects/aurrora/thumb.jpg');">
                        <a data-project="aurrora"><span>View Project</span></a>
                    </div>
                    <div class="title">
                        <h2>Aurrora Inc.</h2>
                        <span class="tags">Design, Code, UI</span>
                    </div>
                </div>

                <div class="project-wrap">
                    <div class="project"
                         style="background-image:url('images/projects/aeeswoc/thumb.jpg');">
                        <a data-project="aeeswoc"><span>View Project</span></a>
                    </div>
                    <div class="title">
                        <h2>AEESWOC</h2>
                        <span class="tags">Design, Code, UI</span>
                    </div>
                </div>
                <!-- Web experiments... if i ever decide to do any-->
                <!--<p><a href="./experiments" data-ext="true">Web Experiments &gt;&gt;</a></p>-->
            </div>
        </section>
        <section id="project-view"></section>
        <section id="about">
            <div>
                <h2>Hai, I'm Lyra.</h2>
                <p>I'm an avid web designer and art and music enthusiast from Windsor, Ontario, and my favorite colors are blue and purple.

                <p>I like working to create meaningful experiences for the web that are modern, clean and deliver content in a more natural, organic way. I focus on presentation and design to deliver a message in the best way possible while using the latest available technologies.</p>

                <p>I'm currently doing some freelance work but would love to be part of a team and work together to build cool things.
                If you're interested in starting a project or just want to say hello, you can get in touch below or follow me on social medias! &#94;.&#94;</p>
            </div>
        </section>
        <section id="contact">
            <div>
                <h2>Let's make it happen!</h2>
                <a href="mailto:hello@lyraghost.com" target="_blank">hello@lyraghost.com</a>
                <ul class="social">
                    <li>
                        <a data-ext="true" href='https://twitter.com/Ghostiyra' target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a data-ext="true" href='https://github.com/LyraGhost' target="_blank"><i class="fa fa-github"></i></a>
                    </li>
                </ul>
            </div>
            <p>Copyright &copy; <?php echo date("Y");?><span class="sm"><br/></span> Designed by LyraGhost &#94;.&#94;</p>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="js/main.min.js" type="text/javascript"></script>
    </body>
</html>
