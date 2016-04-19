<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,700,600,500,200,300,800' rel='stylesheet' type='text/css'>
  <title>AlphaVinner</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="row row-fix">
        <!-- Static navbar -->

        <nav class="navbar navbar-default nav-bar-fix">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">x<del><span class="alpha-letter">Shoppen</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">

              <ul class="nav navbar-nav navbar-right">










              <?php
              wp_nav_menu(array(
                'theme_location'=>'primary',
                'container'=>'false',
                'menu_class'=>'nav navbar-nav navbar-right'

                  )
            );
               ?>


             </div>

          </div>
        </nav>

        </div>



        <!--  <div class="headerbanner"><img src="http://localhost:8888/wp-content/uploads/2016/03/Untitled-1.jpg"/></div> -->
