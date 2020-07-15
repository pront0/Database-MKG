<?php

include 'config.php';

?>

<table border="1">

 <tr>
   <th width="80" align="center" valign="middle">Station</th>
   <th width="80" align="center" valign="middle">T.Max</th>
   <th width="80" align="center" valign="middle">T.Med</th>
   <th width="80" align="center" valign="middle">T.Min</th>
   <th width="80" align="center" valign="middle">(C)</th>
   <th width="80" align="center" valign="middle">(%)</th>
   <th width="80" align="center" valign="middle">Wind Dir.</th>
   <th width="80" align="center" valign="middle">Wind Int.</th>
   <th width="80" align="center" valign="middle">Press.</th>
   <th width="80" align="center" valign="middle">Prec.</th>
   <th width="80" align="center" valign="middle">TotCl</th>
   <th width="80" align="center" valign="middle">Low</th>
   <th width="80" align="center" valign="middle">Sun</th>
   <th width="80" align="center" valign="middle">Vis</th>
   <th width="150" align="center" valign="middle">Edit Data</th>
  </tr>

  <?php

  $data = mysqli_query($db_link, "select * from met3");

  $no = 1;

  while($d = mysqli_fetch_array($data)){

  ?>

  <tr>
    <td p align="center"><?php echo $d['Station']; ?></td>
    <td p align="center"><?php echo $d['T.Max']; ?></td>
    <td p align="center"><?php echo $d['T.Min']; ?></td>
    <td p align="center"><?php echo $d['T.Med']; ?></td>
    <td p align="center"><?php echo $d['(C)']; ?></td>
    <td p align="center"><?php echo $d['(%)']; ?></td>
    <td p align="center"><?php echo $d['Wind Dir.']; ?></td>
    <td p align="center"><?php echo $d['Wind Int.']; ?></td>
    <td p align="center"><?php echo $d['Press.']; ?></td>
    <td p align="center"><?php echo $d['Prec.']; ?></td>
    <td p align="center"><?php echo $d['TotCl']; ?></td>
    <td p align="center"><?php echo $d['Low']; ?></td>
    <td p align="center"><?php echo $d['Sun']; ?></td>
    <td p align="center"><?php echo $d['Vis']; ?></td>
    <td p align="center">
	<a href="edit_met3.php?ni=<?php echo $d['Station'];?>" title="Edit data ini"> EDIT ||</a>
	<a href="delete_met3.php?ni=<?php echo $d['Station'];?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini ?');"> HAPUS </a>
    </td>
  </tr>

  <?php

  }

  ?>

</table>
