<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bolivia Libre</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="img/home/bolivia.png" rel="icon">
  <link href="img/home/bolivia.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          {{-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> --}}
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span> Bolivia - Libre</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Inicio</a></li>
          <li><a href="#free">Filosofía</a></li>
          <li><a href="#services">Denuncia</a></li>
          {{-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> --}}
          <li><a href="#hope">Muro de la esperanza</a></li>          
          <li><a href="#footer">Sugerencias</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix back">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-12 intro-info order-md-first order-last">
          <h2>No hay democracia si existe <span>ignorancia</span></h2>
          <p>
            Plataforma ciudadana para la centralización de 
            información acerca de injusticias y conflictos. ¡Tu opinión cuenta!.
          </p>
          <div>
            <a href="#services" class="btn-get-started scrollto">Denuncia</a>
          </div>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      free Section
    ============================-->
    <section id="free">
      <div class="container">
        <header class="section-header">
            <h3>Libre acceso a la información</h3>
        </header>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="free-content">
              <h3 style="text-align: center">Porque todos tenemos el derecho de saber lo que pasa en nuestro país.</h3>
              <p>
                Facebook, Whatssapp y otras redes sociales contienen la información que sucede momento a momento, pero esta es olvidada,
                sepultada y hasta restringida. Solo centralizando la información lograremos que esta tenga sentido, objetividad y sirva 
                de algo.
              </p>
            </div>
          </div>
          {{-- <div class="col-lg-5 col-md-6">
              <div class="free-img">
                <img src="img/home/libertad1.png" alt="">
              </div>
          </div>
        </div> --}}
      </div>

    </section><!-- #free -->


    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Tipos de Denuncia</h3>
          <p>
            Centralicemos la información y no dejemos que sean enterradas en el pasado.
          </p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="0.5s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="fa fa-user-secret" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="/evidenciasform">Denuncias de Fraude</a></h4>
              <p class="description">
                Es tu momento de ser Sherlock Holmes y atar algunos cabos sueltos. ¿Tienes información
                (fotografías, documentos, archivos, etc) que evidencie un fraude?. Hazlo público.
              </p>
            </div>
          </div>
          <div id="comming-soon" class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="0.5s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="fas fa-fist-raised" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="#services">Denuncias de Agresiones (No disponible)</a></h4>
              <p class="description">
                ¿Sufriste un atropello a tus derechos o viste alguno? ¿Existen conflictos por tu zona?, el sufrimiento que padecen 
                los inocentes no será envano. Denuncia.
              </p>
            </div>
          </div>
        

          {{-- <div class="col-md-12 col-lg-12 wow bounceInUp" data-wow-duration="0.5s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- #services -->
    <!--==========================
      hope Section
    ============================-->
    <section id="hope">
      <div class="container">
        <header class="section-header">
            <h3>Muro de la Esperanza</h3>
        </header>
        <div class="row justify-content-center">
          <div class="col-lg-12 col-12">
            <div class="hope-content">
                <p>Bolivia no necesita más muertes, la batalla no esta en las calles ni en esa esquina que 
                  bloqueas con tanto afán, este país funciona gracias a ti que te movilizas y trabajas, que te 
                  sacrificas para llevar el pan a tu familia, a tí que soportas la insolencia 
                  y los malos días de otras personas. Entonces, ¿dónde esta la verdadera batalla?, es irónico por que vas a ella
                  cada día, unas ocasiones las pierdes y otras las ganas, ¿sigues sin entender?, cada vez que te conformas, robas, dañas o
                  mientes, pierdes y pierden todos los que te rodean incluso Bolivia, cada vez que perseveras, mejoras, enseñas o al
                  menos lo intentas, ganas y ganan los demás, supongo que ya sabes por donde va, Bolivia somos todos y no necesita de
                  más retraso económico, tecnológico y social, <strong>este país se debe a ti y tu a el</strong>.</p>
            </div>
          </div>
          <div class="col-lg-6 col-12">
              <br>
              <div class="hope-img">
                <img src="img/home/bolivia_words.png" alt="">
              </div>
              <br>
          </div>
          <div class="col-lg-6 col-12">
            <div class="form">
              
              <p>Ahora mismo vivimos en una Bolivia polarizada, nos enfrentamos entre hermanos (ricos, pobres, jóvenes, niños, adultos,
                ancianos, citadinos, campesinos, hermanos de las zonas altas y bajas de Bolivia) reflexionemos por las víctimas.</p>
              <p>Te invito a que deposites de corazón los mejores deseos para una <strong>Bolivia Mejor</strong>.</p>
              <form action="/message" method="post" role="form" class="contactForm">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Nombre o Apodo" maxlength="30"/>
                </div>
                <div class="form-group">
                  <textarea class="form-control" maxlength="1000" name="message" rows="5" data-rule="required" placeholder="Envia un mensaje o frase que te nazca de lo mas profundo de tu corazón*" data-msg="No olvides dejar un mensaje para Bolivia"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-lg-5 col-10">
                      <div id="captcha" class="form-group">
                        {!! Captcha::img(); !!}
                      </div>
                  </div>
                  <div class="col-lg-1 col-2">
                      <div id="change-captcha" class="form-group">
                          <i class="fa fa-refresh" title="Refrescar código" style="color: #e98e06;" onMouseOver="this.style.cursor='pointer'"></i>
                      </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <input type="text" class="form-control" maxlength="10" name="captcha" placeholder="Código de verificación*" data-rule="required" data-msg="El captcha es obligatorio" />
                      <div id="captcha-validation" class="validation"></div>
                    </div>
                  </div>
                </div>
                <div id="message-validation" class="form-message">Tu mensaje ha sido enviado, ¡Gracias!.</div>
                <p>No basta con enviar tus mejores deseos, trabaja para que se cumplan. Tus deseos irán haciendo 
                  crecer la Bolivia que tanto amamos (inclusive a la que esta en esta sección). <strong>Se actualiza una vez al día</strong>.</p>
                <div class="text-center"><button type="submit" title="Send Message">Enviar Mensaje</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  


    <!--==========================
      Numbers Section
    ============================-->
    <section id="why-us" class="wow fadeIn section-bg">
      <div class="container-fluid">
        
        <header class="section-header">
          <h3>Algunas Cifras</h3>
        </header>

      </div>

      <div class="container">
        <div class="row counters">

          <div class="col-lg-6 col-6 text-center">
          <span data-toggle="counter-up">{{$eCounter}}</span>
            <p>Denuncias de Fraude</p>
          </div>

          {{-- <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">0</span>
            <p>Denuncias de Agresiones</p>
          </div> --}}

          <div class="col-lg-6 col-12 text-center">
              <span data-toggle="counter-up">{{$mCounter}}</span>
              <p>Participación en el Muro de la Esperanza</p>
          </div>
    
        </div>
      </div>
    </section>

    {{-- <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">No te quedes callad@</h3>
            <p class="cta-text">
              Sino expresas tu descontento, opinión o crítica, el dolor que viviste o que alguien cercano a ti vivió
              será solo lo que en esencia es, dolor.
            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#services">Denuncia</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action --> --}}


    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">
        <header class="section-header">
          <h3>Preguntas Frecuentes</h3>
          <p>
            Algunas de las preguntas con respecto a tu integridad al participar en esta página estan descritas en esta 
            sección.
          </p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">

          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">¿Mi identidad no será vulnerada? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Todo contenido que se publica en esta página es anónimo.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- #faq -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-12">

                  <div class="form">
                      <h4>Envianos Alguna Sugerencia</h4>
                      <p>Si tienes una opinión, crítica, mejora o si deseas apoyarnos en el desarrollo de esta plataforma háznoslo saber.
                      </p>
                      <form action="/feedback" method="post" role="form" class="contactForm">
                        @csrf
                        <div class="form-group">
                          <input type="text" maxlength="30" name="name" class="form-control" id="name" placeholder="Nombre o Apodo"/>
                        </div>
                        <div class="form-group">
                          <input type="email" maxlength="100" class="form-control" name="email" id="email" placeholder="Correo Electrónico*" data-rule="email" data-msg="Inserta un correo electrónico válido" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <input type="text"  maxlength="100" class="form-control" name="subject" id="subject" placeholder="Tema*" data-rule="required" data-msg="No te olvides del tema" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" maxlength="1000" name="message" rows="5" data-rule="required" placeholder="Sugerencia*" data-msg="Sugierenos algo" ></textarea>
                          <div class="validation"></div>
                        </div>
                        <div class="row">

                          <div class="col-lg-5 col-10">
                              <div id="captcha-2" class="form-group">
                                {!! Captcha::img(); !!}
                              </div>
                          </div>
                          <div class="col-lg-1 col-2">
                              <div id="change-captcha-2" class="form-group">
                                  <i class="fa fa-refresh" title="Refrescar código" style="color: #e98e06;" onMouseOver="this.style.cursor='pointer'"></i>
                              </div>
                          </div>
                          <div class="col-lg-6 col-12">
                              <div class="form-group">
                                <input type="text" maxlength="10" class="form-control" name="captcha" placeholder="Código de verificación*" data-rule="required" data-msg="El captcha es obligatorio" />
                                <div id="captcha-validation-2" class="validation"></div>
                              </div>
                          </div>

                        </div>
                        <div id="feedback-validation" class="form-message">Tu sugerencia ha sido enviada, ¡Gracias!.</div>
                        <div class="text-center"><button type="submit" title="Send Message">Enviar Sugerencia</button></div>
                      </form>
                    </div>

                </div>
            </div>
          </div>

        </div>

      </div>
    </div>
    @foreach ($evidences as $evidence)
        {{$evidence->id}}
        @markdown
        {{$evidence->content}}
        @endmarkdown
    @endforeach
    {{ $evidences->links() }}
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Bolivia Libre</strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script>
    $('#change-captcha').click(function(){
      $('#captcha').children().attr('src','/captcha/default?'+Math.random());
    });
    $('#change-captcha-2').click(function(){
      $('#captcha-2').children().attr('src','/captcha/default?'+Math.random());
    });
  </script>
</body>
</html>
