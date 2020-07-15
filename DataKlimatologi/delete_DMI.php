<?php

include 'config.php';

$ni	= $_GET['ni'];

$sql	='DELETE FROM dmi WHERE TAHUN = "'.$ni.'"';

$query	= mysqli_query($db_link, $sql);

header('location: data_DMI.php');

?>
