<?php

//define named constants 
define('DB_HOST', 'localhost:3307');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_NAME', 'wdd_database2');

//used to establish db connection 
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME); //  OR exit ('Could not connect to db...'. mysqli_connect_error());


?>