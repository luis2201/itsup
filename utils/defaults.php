<?php

if (!function_exists("view")) {
    function view($nombreVista, $params)
    {
      foreach ($params as $key => $param) {
          $$key = $param;
      }
      $vista = explode('.', $nombreVista); // [0] => tareas, [1] => index

      
        include_once 'views/layouts/header.php';
        include_once 'views/layouts/navbar.php';
        if($vista[0]=='home') {
            include_once 'views/layouts/banner.php';
        }
        include_once "./views/{$vista[0]}/$vista[1].php"; 
        include_once './views/layouts/footer.php';
    }
}