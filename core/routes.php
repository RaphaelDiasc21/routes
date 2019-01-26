<?php 

  class router{
       
       static private $routes;

       public static function define($routes){

       	  self::$routes = $routes;

       }

      public static function get($uri){
              
      	   $request = trim($uri, "/");


          if(array_key_exists($request, self::$routes)){

                //echo self::$routes[$request];
               require './controllers/'.self::$routes[$request];
          }
      }
  }