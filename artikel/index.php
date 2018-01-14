<html>
    <head>
        <meta charset="utf-8">

        <!-- Ajax CDN -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <!-- Bootstrap JS CDN -->
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- for nav -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- own stylesheet -->
        <link rel="stylesheet" href=<?= get_template_directory_uri() . "/artikel.css"; ?>>

        <!-- Smooth Scroll -->
        <script type="text/javascript" src=<?= get_template_directory_uri() . "/js/smoothscroll.js"; ?>></script>

        <!--TweenMax CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>

        <!-- Nav JS -->
        <script type="text/javascript" src=<?= get_template_directory_uri() . "/js/nav.js"; ?>></script>
    </head>
    <body>

        <!-- NAV -->
        <nav class="navbar navbar-toggleable-md fixed-top nav"><!-- .nav own class -->
            <button class="navbar-toggler navbar-toggler-right nav__toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars nav__toggler__icon fa-lg"></i>
            </button>
            <a class="navbar-brand" href=<?= home_url();?>>
                <img src=<?= get_template_directory_uri() . "/assets/logo_01.jpg"; ?> class="nav__brand">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link nav__link" href="http://localhost/projects/titandw.at">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__link" href="http://localhost/projects/titandw.at/team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__link nav__link--active" href="http://localhost/projects/titandw.at/news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__link" href="http://localhost/projects/titandw.at/angebot">Angebot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__link" href="http://localhost/projects/titandw.at/kontakt">Kontakt</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- PARALLAX -->
        <section>
            <div class="parallax parallax--first">

            </div>
        </section>

        <!-- ARTIKEL -->
        <section class="artikel">
            <span style="display: block; margin-top: -4rem; padding-bottom: 4rem;" id="intro" class="artikel__spacer"> </span>

            <div class="container">
                <div class="row">
                    <div class="col-12 artikel__container">
                        <img src=<?= get_template_directory_uri() . "/assets/img_02.jpg" ?> class="artikel__container__img">
                        <hr class="artikel__container__line">
                        <p class="artikel__container__text">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </p>
                        <div class="text-center">
                            <a href="http://localhost/projects/titandw.at/news" class="artikel__container__back">
                                Zurück
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid artikel__hl-container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-9 artikel__hl-container__headline">
                        <h1>
                            Hier steht der Titel
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <section class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <p class="footer__headline">
                            Der Verein
                        </p>
                        <a href="#" class="footer__link">
                            Home
                        </a><br>
                        <a href="#" class="footer__link">
                            Über Uns
                        </a><br>
                        <a href="#" class="footer__link">
                            Trainer
                        </a><br>
                        <a href="#" class="footer__link">
                            Paare
                        </a><br>
                    </div>
                    <div class="col-4">
                        <p class="footer__headline">
                            Informationen
                        </p>
                        <a href="#" class="footer__link">
                            News
                        </a><br>
                        <a href="#" class="footer__link">
                            Angebot & Preise
                        </a><br>
                        <a href="#" class="footer__link">
                            Turnierplan - national
                        </a><br>
                        <a href="#" class="footer__link">
                            Turnierplan - internationale
                        </a><br>
                    </div>
                    <div class="col-4">
                        <p class="footer__headline">
                            Details
                        </p>
                        <a href="#" class="footer__link">
                            Impressum
                        </a><br>
                        <a href="#" class="footer__link">
                            Kontakt
                        </a><br>
                        <a href="#" class="footer__link">
                            Reglement
                        </a><br>
                    </div>
                </div>
            </div>
        </section>

        <!-- POST-FOOTER -->
        <section class="post-footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        &copy; UTSS Titan - Deutsch Wagram
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
