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
        <link rel="stylesheet" href=<?= get_template_directory_uri() . "/team.css"; ?>>

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
                        <a class="nav-link nav__link nav__link--active" href="http://localhost/projects/titandw.at/team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__link" href="http://localhost/projects/titandw.at/news">News</a>
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

        <!-- ABOUT US -->
        <section class="aboutus" id="aboutus">
            <span style="display: block; margin-top: -4rem; padding-bottom: 4rem;" id="intro" class="aboutus__spacer"> </span>

            <div class="container">
                <div class="row">
                    <div class="col-12 aboutus__container">
                        <img src=<?= get_template_directory_uri() . "/assets/img_02.jpg" ?> class="aboutus__container__img">
                        <hr class="aboutus__container__line">
                        <p class="aboutus__container__text">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container-fluid aboutus__hl-container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-9 aboutus__hl-container__headline">
                        <h1>
                            Das sind wir
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- PARALLAX -->
        <section>
            <div class="parallax parallax--after-aboutus">
                <p class="parallax__container">
                    Hier steht ein Slogan!
                </p>
            </div>
        </section>

        <!-- TRAINER -->
        <section class="trainer" id="trainer">
            <span style="display: block; margin-top: -4rem; padding-bottom: 4rem;" id="intro" class="trainer__spacer"> </span>

            <div class="container">
                <div class="row">
                    <div class="col-12 trainer__container">
                        <div class="row">
                            <div class="col-xl-4 col-md-6 text-center">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg" ?> class="trainer__container__img">
                                <p class="trainer__container__name">
                                    <?php echo get_field('trainername1'); ?>
                                </p>
                                <p class="trainer__container__type">
                                    Standard, Latein
                                </p>
                                <hr class="trainer__container__line">
                                <i class="fa fa-envelope fa-lg trainer__container__icon"></i><br> max.mustertrainer@gmail.com
                                <hr class="trainer__container__line">
                                <p class="trainer__container__text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                </p>
                            </div>
                            <div class="col-xl-4 col-md-6 text-center">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg" ?> class="trainer__container__img">
                                <p class="trainer__container__name">
                                    Max Mustertrainer
                                </p>
                                <p class="trainer__container__type">
                                    Latein
                                </p>
                                <hr class="trainer__container__line">
                                <i class="fa fa-envelope fa-lg trainer__container__icon"></i><br> max.mustertrainer@gmail.com
                                <hr class="trainer__container__line">
                                <p class="trainer__container__text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid trainer__hl-container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-9 trainer__hl-container__headline">
                        <h1>
                            Unsere Trainer
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- PARALLAX -->
        <section>
            <div class="parallax parallax--after-trainer">
                <p class="parallax__container">
                    Hier steht ein Slogan!
                </p>
            </div>
        </section>

        <!-- PAARE -->
        <section class="paare" id="paare">
            <span style="display: block; margin-top: -4rem; padding-bottom: 4rem;" id="intro" class="paare__spacer"> </span>

            <div class="container">
                <div class="row">
                    <div class="col-12 paare__container">
                        <div class="row text-center">
                            <div class="col-xl-4 col-md-6 text-center">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg" ?> class="paare__container__img">
                                <p class="paare__container__name">
                                    Gustav Maria<br>
                                    &<br>
                                    Helene Martin
                                </p>
                                <p class="paare__container__class">
                                    Latein (S), Standard (B)
                                </p>
                                <hr class="paare__container__line">
                                <p class="paare__container__text">
                                    Österreichische Meister 2015, Vize-Landesmeister 2012, 2014
                                </p>
                            </div>

                            <div class="col-xl-4 col-md-6 text-center">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg" ?> class="paare__container__img">
                                <p class="paare__container__name">
                                    Gustav Maria<br>
                                    &<br>
                                    Helene Martin
                                </p>
                                <p class="paare__container__class">
                                    Latein (S), Standard (B)
                                </p>
                                <hr class="paare__container__line">
                                <p class="paare__container__text">
                                    Österreichische Meister 2015, Vize-Landesmeister 2012, 2014
                                </p>
                            </div>

                            <div class="col-xl-4 col-md-6 text-center">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg" ?> class="paare__container__img">
                                <p class="paare__container__name">
                                    Gustav Maria<br>
                                    &<br>
                                    Helene Martin
                                </p>
                                <p class="paare__container__class">
                                    Latein (S), Standard (B)
                                </p>
                                <hr class="paare__container__line">
                                <p class="paare__container__text">
                                    Österreichische Meister 2015, Vize-Landesmeister 2012, 2014
                                </p>
                            </div>

                            <div class="col-xl-4 col-md-6 text-center">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg" ?> class="paare__container__img ">
                                <p class="paare__container__name">
                                    Gustav Maria<br>
                                    &<br>
                                    Helene Martin
                                </p>
                                <p class="paare__container__class">
                                    Latein (S), Standard (B)
                                </p>
                                <hr class="paare__container__line">
                                <p class="paare__container__text">
                                    Österreichische Meister 2015, Vize-Landesmeister 2012, 2014
                                </p>
                            </div>

                            <div class="col-xl-4 col-md-6 text-center">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg" ?> class="paare__container__img ">
                                <p class="paare__container__name">
                                    Gustav Maria<br>
                                    &<br>
                                    Helene Martin
                                </p>
                                <p class="paare__container__class">
                                    Latein (S), Standard (B)
                                </p>
                                <hr class="paare__container__line">
                                <p class="paare__container__text">
                                    Österreichische Meister 2015, Vize-Landesmeister 2012, 2014
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid paare__hl-container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-9 paare__hl-container__headline">
                        <h1>
                            Unsere Paare
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- PARALLAX -->
        <section>
            <div class="parallax parallax--after-paare">
                <p class="parallax__container">
                    Hier steht ein Slogan!
                </p>
            </div>
        </section>

        <!-- FREIE TANZPARTNER -->
        <section class="tanzpartner" id="tanzpartner">
            <span style="display: block; margin-top: -4rem; padding-bottom: 4rem;" id="intro" class="tanzpartner__spacer"> </span>

            <div class="container">
                <div class="row">
                    <div class="col-12 tanzpartner__container">
                        <div class="row text-center">
                            <div class="col-xl-4 col-md-6 text-center">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg" ?> class="tanzpartner__container__img">
                                <p class="tanzpartner__container__name">
                                    Matthias Müller
                                </p>
                                <p class="tanzpartner__container__class">
                                    Standard (C)
                                </p>
                                <hr class="tanzpartner__container__line">
                                <i class="fa fa-envelope fa-lg tanzpartner__container__icon"></i><br> matthias.mueller@gmail.com
                                <hr class="tanzpartner__container__line">
                                <p class="tanzpartner__container__text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                </p>
                            </div>
                            <div class="col-xl-4 col-md-6 text-center">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg" ?> class="tanzpartner__container__img">
                                <p class="tanzpartner__container__name">
                                    Matthias Müller
                                </p>
                                <p class="tanzpartner__container__class">
                                    Standard (C)
                                </p>
                                <hr class="tanzpartner__container__line">
                                <i class="fa fa-envelope fa-lg tanzpartner__container__icon"></i><br> matthias.mueller@gmail.com
                                <hr class="tanzpartner__container__line">
                                <p class="tanzpartner__container__text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                </p>
                            </div>
                            <div class="col-xl-4 col-md-6 text-center">
                                <img src=<?= get_template_directory_uri() . "/assets/img_03.jpg" ?> class="tanzpartner__container__img">
                                <p class="tanzpartner__container__name">
                                    Matthias Müller
                                </p>
                                <p class="tanzpartner__container__class">
                                    Standard (C)
                                </p>
                                <hr class="tanzpartner__container__line">
                                <i class="fa fa-envelope fa-lg tanzpartner__container__icon"></i><br> matthias.mueller@gmail.com
                                <hr class="tanzpartner__container__line">
                                <p class="tanzpartner__container__text">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid tanzpartner__hl-container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-9 tanzpartner__hl-container__headline">
                        <h1>
                            Freie Tanzpartner
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
