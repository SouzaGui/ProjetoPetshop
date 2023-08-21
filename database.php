<?php

   // $servidor;
   // $servidor_user;
   // $servidor_password;
   // $database_name;

    define('SERVIDOR', 'localhost');
    define('SERVIDOR_USER', 'root');
    define('SERVIDOR_PASSWORD', '');
    define('DATABASE', 'pets');

    $conexao = mysqli_connect(SERVIDOR,
    SERVIDOR_USER,SERVIDOR_PASSWORD,DATABASE);