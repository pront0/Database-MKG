<?php

include 'config.php';

if(isset($_POST['ttambah'])){
	$d['Station']			= $_POST['Station']
	$d['T.Max'] 			= $_POST['T.Max'];
	$d['T.Med']				= $_POST['T.Med'];
	$d['T.Min'] 			= $_POST['T.Min'];
	$d['(C)']					= $_POST['(C)'];
	$d['(%)']	 				= $_POST['(%)'];
	$d['Win Dir.']		= $_POST['Wind Dir.'];
	$d['Wind Int.'] 	= $_POST['Wind Int.'];
	$d['Press.']			= $_POST['Press.'];
	$d['Prec.'] 			= $_POST['Prec.'];
	$d['TotCl']				= $_POST['TotCl'];
	$d['Low']					= $_POST['Low'];
	$d['Sun']					= $_POST['Sun'];
	$d['Vis']					= $_POST['Vis'];

		$sql	= 'insert into dmi (Station, T.Max, T.Med, T.Min, (C), (%), Wind Dir., Wind Int., Press., Prec., TotCl, Low, Sun, Vis) values ("'.$d['Station'].'","'.$d['T.Max'].'","'.$d['T.Med'].'","'.$d['T.Min'].'","'.$d['(C)'].'","'.$d['(%)'].'","'.$d['Win Dir.'].'","'.$d['Wind Int.'].'","'.$d['Press.'].'","'.$d['Prec.'].'","'.$d['TotCl'].'","'.$d['Low'].'","'.$d['Sun'].'","'.$d['Vis'].'")';
		$query	= mysqli_query($db_link, $sql);
	if($query){
		header('location: data_met2.php');
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['tedit'])){
	$d['Station']			= $_POST['Station']
	$d['T.Max'] 			= $_POST['T.Max'];
	$d['T.Med']				= $_POST['T.Med'];
	$d['T.Min'] 			= $_POST['T.Min'];
	$d['(C)']					= $_POST['(C)'];
	$d['(%)']	 				= $_POST['(%)'];
	$d['Win Dir.']		= $_POST['Wind Dir.'];
	$d['Wind Int.'] 	= $_POST['Wind Int.'];
	$d['Press.']			= $_POST['Press.'];
	$d['Prec.'] 			= $_POST['Prec.'];
	$d['TotCl']				= $_POST['TotCl'];
	$d['Low']					= $_POST['Low'];
	$d['Sun']					= $_POST['Sun'];
	$d['Vis']					= $_POST['Vis'];

	$sql	= 'update into dmi (Station, T.Max, T.Med, T.Min, (C), (%), Wind Dir., Wind Int., Press., Prec., TotCl, Low, Sun, Vis) values ("'.$d['Station'].'","'.$d['TMax'].'","'.$d['TMed'].'","'.$d['TMin'].'","'.$d['C'].'","'.$d['R'].'","'.$d['WinDir'].'","'.$d['WindInt'].'","'.$d['Press'].'","'.$d['Prec'].'","'.$d['TotCl'].'","'.$d['Low'].'","'.$d['Sun'].'","'.$d['Vis'].'")';
	$query = mysqli_query($db_link,$sql);
	if($query){
		header('location: data_DMI.php');
	}
	else{
		echo 'Gagal';
	}
}
?>
