<?php
$h = "localhost";
$u = "root";
$p = "";
$db = "web";

$con = mysql_connect($h, $u, $p);

mysql_select_db ($db,$con);

?>