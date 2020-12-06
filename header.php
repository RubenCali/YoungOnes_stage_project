<!DOCTYPE html>
<html style=" margin-top: 0px!important">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <?php wp_head(); ?>
   <title>YoungOnes | Stage project</title>
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() . '/img/icon.ico' ?> ">

   <style>
      @font-face {
         font-family: 'Gotham Ultra';
         src: url(<?php echo get_template_directory_uri() . '/fonts/gotham-ultra.otf' ?>);

      }
   </style>
</head>

<body <?php body_class(); ?>>
   <section id="landpage">
      <div class="container">
         <div class="row">

            <nav style="background-color: #fff!important;" class="navbar navbar-expand-lg navbar-light bg-light">
               <a href="#">
                  <img src="<?php echo get_template_directory_uri() . '/img/logo.PNG' ?>" alt="YoungOnes logo" class="YoungOnes-logo">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a href="#" class="nav-link huisstijl__zwart active">
                           <div class="active-page"></div>
                           <span class="active-text">Ik zoek werk</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="https://youngones.works/opdrachtgevers/" class="nav-link huisstijl__zwart">
                           Ik zoek freelancers
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="https://youngones.works/hoe-werkt-het/" class="nav-link huisstijl__zwart">
                           Hoe werkt het?
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="https://youngones.works/opdrachten/" class="nav-link huisstijl__zwart">
                           Klussen
                        </a>
                     </li>

                     <li class="nav-item ">
                        <a href="https://youngones.works/aanmelden/" class="nav-link landpage__aanmelden">
                           Aanmelden
                        </a>
                     </li>
                     <li class="nav-item ">
                        <a href="https://dashboard.youngones.works/inloggen" class="nav-link huisstijl__zwart landpage__inloggen">
                           <img src="<?php echo get_template_directory_uri() . '/img/Afbeelding-login.PNG' ?>" alt="login foto"> Inloggen
                        </a>
                     </li>
                  </ul>
               </div>
         </div>
         </nav>
         <div class="landpage__info">
            <div class="landpage__info-image">
               <img src="<?php echo get_template_directory_uri() . '/img/Headers-Lifestyle.jpg' ?>" alt="header image" class="landpage__info-image">
            </div>
            <div class="landpage__info-header">
               <h1>SNEL GELD VERDIENEN ALS EIGEN BAAS</h1>
               <p><img src="<?php echo get_template_directory_uri() . '/img/Afbeelding-vinkje.PNG' ?>" alt="Vinkje">Gemiddeld €15,00 per uur</p>
               <p style="margin-top: -30px;"><img src="<?php echo get_template_directory_uri() . '/img/Afbeelding-vinkje.PNG' ?>" alt="Vinkje">Bepaal iedere dag zelf waar en wanneer je werkt</p>
               <p style="margin-top: -30px;"><img src="<?php echo get_template_directory_uri() . '/img/Afbeelding-vinkje.PNG' ?>" alt="Vinkje">Handige app met de leukste dagklussen</p>
               <div class="landpage__info-header--app">
                  <a href="https://play.google.com/store/apps/details?id=com.youngones.app">
                     <img src="<?php echo get_template_directory_uri() . '/img/get-Google_play.png' ?>" alt="Google play store download">
                  </a>
                  <a href="https://apps.apple.com/nl/app/youngones-voor-freelance-werk/id1333518910">
                     <img src="<?php echo get_template_directory_uri() . '/img/get-app_store.png' ?>" alt="App store download">
                  </a>

               </div>
            </div>
         </div>
      </div>
   </section>