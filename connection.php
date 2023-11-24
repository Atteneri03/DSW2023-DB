<?php
    $host = "localhost";    
    $user = "root";
    $password = "";
    $db = "pruebasdb";

    $dsn = "mysql:host=$host;dbname=$db";

    $link = new PDO($dsn, $user, $password);

    print_r($link);
