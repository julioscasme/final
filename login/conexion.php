<?php
// datos para la conexion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','botanica');
define('DB_USER','root');
define('DB_PASS','');
$conexion = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$conexion);
?>
