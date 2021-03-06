<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kompetencijos centras</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <!--link(rel="stylesheet", href=href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" )-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <!--script (src='assets/scripts/bootstrap.min.js')	-->
  </head>
  <body>
		<?php include('header.php'); ?>
    <section id="hero">
      <div class="hero__content">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <h1>Retų inkstų ligų ir urogenitalinės sistemos formavimosi ydų <span class="h1--state-bold">kompetencijos centras</span></h1><a class="a--btn" href="index.html" target="_blank">Paslaugos</a>
              <!-- sitas a nurodzius .hero__content__text buti centre, apsimeta, kad nepriklauso tam elementui???-->
            </div>
            <!--.hero__content__image.col-lg-4.col-md-4
            img(src='assets/images/inkstai.jpg', alt='inkstai')
            
            
            
            -->
          </div>
        </div>
      </div>
    </section>
    <main>
      <div class="about__content">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-md-offset-4">
              <h2>Apie centrą</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget vulputate libero, fermentum ornare sem. Maecenas maximus sagittis ante non dapibus. Sed ut erat posuere, viverra est eget, iaculis est. Aliquam ac purus urna. Praesent viverra ex felis, at rutrum diam malesuada non. Aliquam eu faucibus odio, nec eleifend risus. </p>
              <p>Nam varius facilisis augue, ut ullamcorper nisi rhoncus eget. Aenean et tortor pretium, cursus ipsum ac paskutine matoma eilute?</p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <section class="information">
      <div class="information__blocks">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <!--mixin information_blocks(title, text, link, link_headline)-->
              <div class="information__blocks__content">
                    <h3>Paslaugos</h3>
                    <p>Aenean venenatis fringilla nulla, sed dapibus ligula consectetur sed. Donec posuere elit non dolor blandit venenatis.</p><a class="a-information_block" href="#{link}" target="_blank">Paslaugos   <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="information__blocks__content">
                    <h3>Bendra informacija</h3>
                    <p>Nullam ullamcorper, lectus sit amet vestibulum efficitur, odio ante posuere sapien, eget euismod mi enim mattis.</p><a class="a-information_block" href="#{link}" target="_blank">Bendra informacija   <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="information__blocks__content">
                    <h3>Apie ligas</h3>
                    <p>Aenean venenatis fringilla nulla, sed dapibus ligula consectetur sed. Donec posuere elit non dolor blandit venenatis.</p><a class="a-information_block" href="#{link}" target="_blank">Apie ligas    <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container--full">
        <div class="container">
          <div class="row">
            <div class="col-sm-12"><a class="footer__logo" href="#mainpage"><img src="assets/images/logo_text.png" alt="logo text"></a>
              <div class="footer__list">
                <ul class="list-inline text-right">
                  <li><a class="a--footer" href="#">Apie mus  </a></li>
                  <li> <a class="a--footer" href="#">Paslaugos</a></li>
                  <li><a class="a--footer" href="#">Informacija pacientams </a></li>
                  <li> <a class="a--footer" href="#">Mokslas</a></li>
                  <li><a class="a--footer" href="#">Komanda </a></li>
                  <li> <a class="a--footer" href="#">Kontaktai</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="assets/scripts/bootstrap.js"></script>
    <script src="assets/scripts/npm.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous")</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>