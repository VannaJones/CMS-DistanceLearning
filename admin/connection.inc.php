<?php
session_start();
$con=mysqli_connect("localhost","root","","wmsu_data");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'');
define('SITE_PATH','http://localhost/php/ecomm/');

?>