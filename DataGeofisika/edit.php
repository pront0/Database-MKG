<body bgcolor="#CCCCCC">
<h2>
<p align="center">EDIT DATA
<?php
	include('config.php');
	if(isset($_GET['ni'])){
		$ni										=$_GET['ni'];
		$OT 									= $_POST['OT'];
		$Lat									= $_POST['Lat'];
		$Long 								= $_POST['Long'];
		$Depth								= $_POST['Depth'];
		$Mag	 								= $_POST['Mag'];
		$LocationRemark				= $_POST['Location&Remark'];
	}

	else{
	$OT 									='';
	$Lat									='';
	$Long 								='';
	$Depth								='';
	$Mag									='';
	$LocationRemark 			='';
	}
?>
</p></h2>
<form method="post" name="frm" action="action.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">

  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Date</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
     <input type="text" name="Date" value="<?php echo $_GET['ni']; ?>" readonly="readonly">
    </td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">OT</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="OT" value="<?php echo $OT; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Lat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="Lat" value="<?php echo $Lat; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Long</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="Long" value="<?php echo $Long; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Depth</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="Depth" value="<?php echo $Depth; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Mag</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="Mag" value="<?php echo $Mag; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Location & Remark</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="Location&Remark" value="<?php echo $LocationRemark; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tedit" value="EDIT"></td>
  </tr>

</table>
</form>
