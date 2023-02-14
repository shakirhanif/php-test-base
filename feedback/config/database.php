<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','apollomoon');
define('DB_NAME','php_dev');

$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($conn->connect_error) {
    die('connection faiied'.$conn->connect_error);
}

?>