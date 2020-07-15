<body bgcolor="#CCCCCC">
<h2>
<p align="center">EDIT DATA
<?php
	include('config.php');
	if(isset($_GET['ni'])){
		$ni	=$_GET['ni'];
		$query	=mysqli_query($db_link, 'select * from met3 where Station = "'.$ni.'"');
		$data		=mysqli_fetch_array($query);
		$d['T.Max'] 			= $_POST['T.Max'];
		$d['T.Med']				= $_POST['T.Med'];
		$d['T.Min'] 			= $_POST['T.Min'];
		$d['(C)']					= $_POST['(C)'];
		$d['(%)']	 				= $_POST['(%)'];
		$d['Win Dir.']		= $_POST['Wind Dir.'];
		$d['Wind Int.'] 	= $_POST['Wind Int.'];
		$d['Press.']			= $_POST['Press.'];
		$d['Prec.'] 			= $_POST['Prec.'];
		$d['TotCl']			= $_POST['TotCl'];
		$d['Low']				= $_POST['Low'];
		$d['Sun']				= $_POST['Sun'];
		$d['Vis']				= $_POST['Vis'];
	}
	
	else{
	$d['T.Max'] 	='';
	$d['T.Med']		='';
	$d['T.Min'] 		='';
	$d['(C)']		='';
	$d['(%)']		='';
	$d['Wind Dir.'] 		='';
	$d['Wind Int.'] 	='';
	$d['Press.']	='';
	$d['Prec.'] 	='';
	$d['TotCl'] 	='';
	$d['Low']	='';
	$d['Sun'] 	='';
	$d['Vis'] 	='';
	}
?>
</p></h2>
<form method="post" name="frm" action="action_met3.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">

  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Station</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
     <input type="text" name="Station" value="<?php echo $_GET['ni']; ?>" readonly="readonly">
    </td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">T.Max</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="T.Max" value="<?php echo $d['T.Max']; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">T.Med</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="T.Med" value="<?php echo $d['T.Med']; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">T.Min</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="T.Min" value="<?php echo $d['T.MIN']; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">(C)</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="(C)" value="<?php echo $d['(C)']; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">(%)</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="(%)" value="<?php echo $d['(%)']; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Wind Dir.</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="Wind Dir." value="<?php echo $d['Wind Dir.']; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Wind Int.</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="Wind Int." value="<?php echo $d['Wind Int.']; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Press.</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="Press." value="<?php echo $d['Press']; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Prec.</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="Prec" value="<?php echo $d['Prec']; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">TotCl</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="TotCl" value="<?php echo $d['TotCl']; ?>">
    </label></td>
  </tr>

  <tr>
    <td height="27" align="right" valign="middle">Low</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="Low" value="<?php echo $d['Low']; ?>">
    </label></td>
  </tr>

	<tr>
		<td height="27" align="right" valign="middle">Sun</td>
		<td align="center" valign="top">:</td>
		<td valign="middle"><label>
		 <input type="text" name="Sun" value="<?php echo $d['Sun']; ?>">
		</label></td>
	</tr>

	<tr>
    <td height="27" align="right" valign="middle">Vis</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
     <input type="text" name="Vis" value="<?php echo $d['Vis']; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tedit" value="EDIT"></td>
  </tr>

</table>
</form>
