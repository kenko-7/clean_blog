<?php 

/* 
        ./app/config/params.php
*/

// Paramètres de connexion
        define('DB_HOST',     'localhost:3306');
        define('DB_NAME',     'cleanBlog_2017');
        define('DB_USER',     'root');
        define('DB_PASSWORD', 'root');

// Autres constantes

        define('DATE_FORMAT', 'd-m-Y');

        $root = explode('index.php', $_SERVER['PHP_SELF']);
        define('ROOT', 'http://'.$_SERVER['HTTP_HOST'].$root[0]);

// Initialisation des zones dynamiques
        
        $title = '';
        $content = '';
        



    