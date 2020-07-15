<?php

include 'config.php';

?>

<table border="1">

 <tr>

   <th width="80" align="center" valign="middle">TAHUN</th>

   <th width="80" align="center" valign="middle">JANUARI</th>

   <th width="80" align="center" valign="middle">FEBRUARI</th>

   <th width="80" align="center" valign="middle">MARET</th>

   <th width="80" align="center" valign="middle">APRIL</th>

   <th width="80" align="center" valign="middle">MEI</th>

   <th width="80" align="center" valign="middle">JUNI</th>

   <th width="80" align="center" valign="middle">JULI</th>

   <th width="80" align="center" valign="middle">AGUSTUS</th>

   <th width="80" align="center" valign="middle">SEPETEMBER</th>

   <th width="80" align="center" valign="middle">OKTOBER</th>

   <th width="80" align="center" valign="middle">NOVEMBER</th>

   <th width="80" align="center" valign="middle">DESEMBER</th>

   <th width="150" align="center" valign="middle">Edit Data</th>

  </tr>

  <?php

  $data = mysqli_query($db_link, "select * from rcp4_5");

  $no = 1;

  while($d = mysqli_fetch_array($data)){

  ?>

  <tr>

    <td p align="center"><?php echo $d['TAHUN']; ?></td>

    <td p align="center"><?php echo $d['JANUARI']; ?></td>

    <td p align="center"><?php echo $d['FEBRUARI']; ?></td>

    <td p align="center"><?php echo $d['MARET']; ?></td>

    <td p align="center"><?php echo $d['APRIL']; ?></td>

    <td p align="center"><?php echo $d['MEI']; ?></td>

    <td p align="center"><?php echo $d['JUNI']; ?></td>

    <td p align="center"><?php echo $d['JULI']; ?></td>

    <td p align="center"><?php echo $d['AGUSTUS']; ?></td>

    <td p align="center"><?php echo $d['SEPTEMBER']; ?></td>

    <td p align="center"><?php echo $d['OKTOBER']; ?></td>

    <td p align="center"><?php echo $d['NOVEMBER']; ?></td>

    <td p align="center"><?php echo $d['DESEMBER']; ?></td>

    <td p align="center">
	<a href="edit_RCP45.php?ni=<?php echo $d['TAHUN'];?>" title="Edit data ini"> EDIT || </a>
	<a href="delete_RCP45.php?ni=<?php echo $d['TAHUN'];?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini ?');"> HAPUS </a>
    </td>
  </tr>

  <?php

  }

  ?>

</table>
