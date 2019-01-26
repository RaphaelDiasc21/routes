<?php
   

   require './core/routes.php';

    $routes = [
      
        'estudo6' => "controller.home.php",
        'estudo6/about' => "controller.about.php"

    ];
     
    router::define($routes); 
    router::get($_SERVER['REQUEST_URI']);
