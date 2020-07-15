<?php

include 'config.php';

$ni	= $_GET['ni'];

$sql	='DELETE FROM met1 WHERE Station = "'.$ni.'"';

$query	= mysqli_query($db_link, $sql);

header('location: data.php');

?>
