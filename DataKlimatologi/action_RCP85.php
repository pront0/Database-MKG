<?php

include 'config.php';

if(isset($_POST['ttambah'])){
	$TAHUN	 	= $_POST['tah'];

	$JANUARI 	= $_POST['jan'];

	$FEBRUARI	= $_POST['feb'];

	$MARET 		= $_POST['mar'];

	$APRIL		= $_POST['apr'];

	$MEI	 	= $_POST['mei'];

	$JUNI		= $_POST['jun'];

	$JULI 		= $_POST['jul'];

	$AGUSTUS	= $_POST['agu'];

	$SEPTEMBER 	= $_POST['sep'];

	$OKTOBER	= $_POST['okt'];

	$NOVEMBER	= $_POST['nov'];

	$DESEMBER	= $_POST['des'];



	$sql	= 'insert into rcp8_5 (tahun, januari, februari, maret, april, mei, juni, juli, agustus, september, oktober, november, desember) values ("'.$TAHUN.'","'.$JANUARI.'","'.$FEBRUARI.'","'.$MARET.'","'.$APRIL.'","'.$MEI.'","'.$JUNI.'","'.$JULI.'","'.$AGUSTUS.'","'.$SEPTEMBER.'","'.$OKTOBER.'","'.$NOVEMBER.'","'.$DESEMBER.'")';

	$query	= mysqli_query($db_link, $sql);

	if($query){
		header('location: data_RCP85.php');
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['tedit'])){
	$TAHUN		= $_POST['tah'];

	$JANUARI 	= $_POST['jan'];

	$FEBRUARI	= $_POST['feb'];

	$MARET 		= $_POST['mar'];

	$APRIL		= $_POST['apr'];

	$MEI	 	= $_POST['mei'];

	$JUNI		= $_POST['jun'];

	$JULI 		= $_POST['jul'];

	$AGUSTUS	= $_POST['agu'];

	$SEPTEMBER 	= $_POST['sep'];

	$OKTOBER	= $_POST['okt'];

	$NOVEMBER	= $_POST['nov'];

	$DESEMBER	= $_POST['des'];

	$sql = 'update rcp8_5 set januari="'.$JANUARI.'", februari="'.$FEBRUARI.'", maret="'.$MARET.'", april="'.$APRIL.'", mei="'.$MEI.'", juni="'.$JUNI.'", juli="'.$JULI.'", agustus="'.$AGUSTUS.'", september="'.$SEPTEMBER.'", oktober="'.$OKTOBER.'", november="'.$NOVEMBER.'", desember="'.$DESEMBER.'" where tahun="'.$TAHUN.'"';

	$query = mysqli_query($db_link,$sql);

	if($query){
		header('location: data_RCP85.php');
	}
	else{
		echo 'Gagal';
	}
}

?>
