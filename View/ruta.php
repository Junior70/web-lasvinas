<?php
    if (($_SERVER['SERVER_NAME'] == 'localhost') and ($_SERVER['SERVER_PORT'] == '80')) {
        define('SERVER', "http://" . $_SERVER['SERVER_NAME'] . "/web-lasvinas/");
    }

    if (($_SERVER['SERVER_NAME'] == 'localhost') and ($_SERVER['SERVER_PORT'] == '8181')) {
        define('SERVER', "http://" . $_SERVER['SERVER_NAME'] . ":8181/web-lasvinas/");
    }
    // Si estas ejecutando el sitio desde un hosting
    if ($_SERVER['SERVER_NAME'] == 'lasvinas.com.pe.com') {
        define('SERVER', "http://lasvinas.com.pe/");
    }
    // Si estas ejecutando el sitio desde una direccion ip
    //if ($_SERVER['SERVER_NAME'] == 'direccionIp') {
     //   define('SERVER', "http://direccionIp/");
   // }
    ?>