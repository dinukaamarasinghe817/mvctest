<?php

// define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_NAME','gasify');
define('DB_PASSWORD','');
define('BASEURL','http://localhost/rosie');
define('DIRECTORY_SEPERATOR','/');
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
?>