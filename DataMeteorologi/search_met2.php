<?php
  include 'config.php';
 ?>

<html>
    <head>
        <title>Pencarian Data SYNOP</title>
    </head>
    <body>
        <div style="border:1px solid #B0C4DE; padding:10px; overflow:auto;">
        <form action="search_met2.php" method="post" name="postform">
            <p align="center"><font color="red" size="3"><b>Pencarian Data SYNOP</b></font></p><br />
            <table align="center" border="0">
                <tr>
                    <td width="125"><b>Nama Stasiun</b></td>
                    <td colspan="2" width="190">: <input type="text" name="station" size="16" />
                    </td>
                    <td colspan="2" width="190"><input type="submit" value="Pencarian Data" name="pencarian"/></td>
                    <td colspan="2" width="70"><input type="reset" value="Reset" /></td>
                    <td colspan="2" width="70"><input type="reset" value="Back" onclick="document.location='met2.php'"/></td>
                </tr>
            </table>
        </form><br />
      </div>
        <?php
            //proses jika sudah klik tombol pencarian data
            if(isset($_POST['pencarian'])){
            //menangkap nilai form
            $station=$_POST['station'];
            if(empty($station)){
            //jika data tanggal kosong
            ?>

            <script language="JavaScript">
                alert('Stasiun harap di Isi!');
                document.location='search_met2.php';
            </script>

            <?php
            }else{
            ?><i style="margin-left: 500px;"><b>Informasi : </b> Hasil pencarian data <b><?php echo $_POST['station']?></b></i>

            <?php
            $query=mysqli_query($db_link,"select * from met2 WHERE Station like '%".$station."%'");
            }
        ?>

        </p>
        <table width="1100" align="center" border="0" cellpadding="10px" cellspacing="10px">
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
            </tr>
            <?php
            //menampilkan pencarian data
            while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td align="center"><?php echo $row['Station']; ?></td>
                <td align="center"><?php echo $row['T.Max']; ?></td>
                <td align="center"><?php echo $row['T.Med'];?></td>
                <td align="center"><?php echo $row['T.Min'];?></td>
                <td align="center"><?php echo $row['(C)'];?></td>
                <td align="center"><?php echo $row['(%)'];?></td>
                <td align="center"><?php echo $row['Wind Dir.'];?></td>
                <td align="center"><?php echo $row['Wind Int.'];?></td>
                <td align="center"><?php echo $row['Press.'];?></td>
                <td align="center"><?php echo $row['Prec.'];?></td>
                <td align="center"><?php echo $row['TotCl'];?></td>
                <td align="center"><?php echo $row['Low'];?></td>
                <td align="center"><?php echo $row['Sun'];?></td>
                <td align="center"><?php echo $row['Vis'];?></td>
            </tr>
            <?php
            }
            ?>
            <tr>
              <td colspan="4" align="center">
                <?php
                //jika pencarian data tidak ditemukan
                if(mysqli_num_rows($query)==0){
                    echo "<font color=red><blink>Pencarian data tidak ditemukan!</blink></font>";
                }
                ?>
                </td>
            </tr>
        </table>

        <?php
        }
        else{
            unset($_POST['pencarian']);
        }
        ?>

    </body>
</html>
