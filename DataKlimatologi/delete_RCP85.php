<?php

include 'config.php';

$ni	= $_GET['ni'];

$sql	='DELETE FROM rcp8_5 WHERE TAHUN = "'.$ni.'"';

$query	= mysqli_query($db_link, $sql);

header('location: data_RCP85.php');

?>
