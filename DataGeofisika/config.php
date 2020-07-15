<?php
$db_host	= 'localhost'; 

$db_usn		= 'root'; 

$db_pwd		= '';  

$db_name	= 'dbmkg';

$db_link	= mysqli_connect($db_host,$db_usn,$db_pwd,$db_name);

if (!$db_link){

	echo 'Tidak dapat terhubung ke database';

}

?>