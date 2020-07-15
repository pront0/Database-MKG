<?php

include 'config.php';

if(isset($_POST['ttambah'])){
	$Date									= $_POST['Date'];
	$OT 									= $_POST['OT'];
	$Lat									= $_POST['Lat'];
	$Long 								= $_POST['Long'];
	$Depth								= $_POST['Depth'];
	$Mag	 								= $_POST['Mag'];
	$LocationRemark				= $_POST['Location&Remark'];

		$sql	= 'insert into datagempa (Date, OT, Lat, Long, Depth, Mag, Location&Remark) values ("'.$Date.'","'.$OT.'","'.$Lat.'","'.$Long.'","'.$Depth.'","'.$Mag.'","'.$LocationRemark.'")';
		$query	= mysqli_query($db_link, $sql);
	if($query){
		header('location: datagempa.php');
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['tedit'])){
	$Date									= $_POST['Date'];
	$OT 									= $_POST['OT'];
	$Lat									= $_POST['Lat'];
	$Long 								= $_POST['Long'];
	$Depth								= $_POST['Depth'];
	$Mag	 								= $_POST['Mag'];
	$LocationRemark				= $_POST['Location&Remark'];

	$sql	= 'update into datagempa (Date, OT, Lat, Long, Depth, Mag, Location & Remark) values ("'.$Date.'","'.$OT.'","'.$Lat.'","'.$Long.'","'.$Depth.'","'.$Mag.'","'.$LocationRemark.'")';
	$query = mysqli_query($db_link,$sql);
	if($query){
		header('location: datagempa.php');
	}
	else{
		echo 'Gagal';
	}
}
?>
