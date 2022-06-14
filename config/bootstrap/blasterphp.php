<?php

// load the front end setup
echo '<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="https://blaster.org.uk/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://blaster.org.uk/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://blaster.org.uk/fav/favicon-16x16.png">
  <link rel="manifest" href="fav/site.webmanifest">
    <link rel="stylesheet" href="./public/src/css/style.css">
    <link rel="stylesheet" href="./public/src/bootstrap/bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="./public/js/script.js"></script>
    <script src="./public/src/bootstrap/bootstrap5.js"></script>';

error_reporting(E_ERROR | E_PARSE);

spl_autoload_register(function($class) {
  $blaster_file = './controllers/' . $class . '.class.php';
  $blaster_json = './views/' . $class . '.inc.php';
  $blaster_env = './config/' . $class . '.env.php';
 
  
   $blaster_file = strtolower($blaster_file);
   $blaster_json = strtolower($blaster_json);
   $blaster_env = strtolower($blaster_env);
//   echo $blaster_env . "<br>";
  if (file_exists($blaster_file)) {
    include $blaster_file;
  }
  elseif (file_exists($blaster_json)) {
    include $blaster_json;
  }
    elseif (file_exists($blaster_env)) {
       
    include $blaster_env;
  }
  else {
    echo "<br<br><br>
          <div class='container fs-small text-center bg-primary text-dark'>
          <div class='bg-light'>
          <i class='bi bi-bug text-primary text-uppercase fw-bold'> BlasterPHP: Oops :(</i>
          <hr>Unable to load core classes <br> <br><hr>";
    
  }
});
