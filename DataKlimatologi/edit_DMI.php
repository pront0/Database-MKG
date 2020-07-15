<body bgcolor="#CCCCCC">
<h2>
<p align="center">EDIT DATA
<?php
	include('config.php');
	if(isset($_GET['ni'])){
		$ni	=$_GET['ni'];
		$query	=mysqli_query($db_link, 'select * from dmi where TAHUN = "'.$ni.'"');
		$data		=mysqli_fetch_array($query);
		$JANUARI 	=$data['JANUARI'];
		$FEBRUARI 	=$data['FEBRUARI'];
		$MARET		=$data['MARET'];
		$APRIL 		=$data['APRIL'];
		$MEI 		=$data['MEI'];
		$JUNI		=$data['JUNI'];
		$JULI 		=$data['JULI'];
		$AGUSTUS 	=$data['AGUSTUS'];
		$SEPTEMBER	=$data['SEPTEMBER'];
		$OKTOBER 	=$data['OKTOBER'];
		$NOVEMBER 	=$data['NOVEMBER'];
		$DESEMBER	=$data['DESEMBER'];
	}
	else{
	$JANUARI 	='';
	$FEBRUARI 	='';
	$MARET		='';
	$APRIL 		='';
	$MEI 		='';
	$JUNI		='';
	$JULI 		='';
	$AGUSTUS 	='';
	$SEPTEMBER	='';
	$OKTOBER 	='';
	$NOVEMBER 	='';
	$DESEMBER	='';
	}
?>
</p></h2>
<form method="post" name="frm" action="action_DMI.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">

  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Tahun</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
     <input type="text" name="tah" value="<?php echo $_GET['ni']; ?>" readonly="readonly">
    </td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Januari</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="jan" value="<?php echo $JANUARI; ?>">
    </label></td>
  </tr>


  <tr>
    <td height="27" align="right" valign="middle">Februari</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="feb" value="<?php echo $FEBRUARI; ?>">
    </label></td>
  </tr>


  <tr>
    <td height="27" align="right" valign="middle">MARET</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="mar" value="<?php echo $MARET; ?>">
    </label></td>
  </tr>


  <tr>
    <td height="27" align="right" valign="middle">April</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="apr" value="<?php echo $APRIL; ?>">
    </label></td>
  </tr>


  <tr>
    <td height="27" align="right" valign="middle">Mei</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="mei" value="<?php echo $MEI; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Juni</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="jun" value="<?php echo $JUNI; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Juli</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="jul" value="<?php echo $JULI; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Agustus</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="agu" value="<?php echo $AGUSTUS; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">September</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="sep" value="<?php echo $SEPTEMBER; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Oktober</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="okt" value="<?php echo $OKTOBER; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">November</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="nov" value="<?php echo $NOVEMBER; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Desember</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="des" value="<?php echo $DESEMBER; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tedit" value="EDIT"></td>
  </tr>

</table>
</form>
