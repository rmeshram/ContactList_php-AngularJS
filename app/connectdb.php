<?php 
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","contactlist");

$dbhandle =new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("unalbe to connect")

?>