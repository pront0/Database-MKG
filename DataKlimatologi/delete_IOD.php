<?php

include 'config.php';

$ni	= $_GET['ni'];

$sql	='DELETE FROM iod WHERE TAHUN = "'.$ni.'"';

$query	= mysqli_query($db_link, $sql);

header('location: data_IOD.php');

?>
