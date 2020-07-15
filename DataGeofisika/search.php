<?php
  include 'config.php';
 ?>

<html>
    <head>
        <title>Pencarian Data Data Gempa</title>
    </head>
    <body>
        <div style="border:1px solid #B0C4DE; padding:10px; overflow:auto;">
        <form action="search.php" method="post" name="postform">
            <p align="center"><font color="blue" size="3"><b>Pencarian Data Data Gempa</b></font></p><br />
            <table align="center" border="0">
                <tr>
                    <td width="125"><b>Tanggal</b></td>
                    <td colspan="2" width="190">: <input type="text" name="Date" size="16" />
                    </td>
                    <td colspan="2" width="190"><input type="submit" value="Pencarian Data" name="pencarian"/></td>
                    <td colspan="2" width="70"><input type="reset" value="Reset" /></td>
                    <td colspan="2" width="70"><input type="reset" value="Back" onclick="document.location='datagempa.php'"/></td>
                </tr>
            </table>
        </form><br />
      </div>
        <?php
            //proses jika sudah klik tombol pencarian data
            if(isset($_POST['pencarian'])){
            //menangkap nilai form
            $Date=$_POST['Date'];
            if(empty($Date)){
            //jika data tanggal kosong
            ?>

            <script language="JavaScript">
                alert('Tanggal harap di Isi!');
                document.location='search.php';
            </script>

            <?php
            }else{
            ?><i style="margin-left: 500px;"><b>Informasi : </b> Hasil pencarian data <b><?php echo $_POST['Date']?></b></i>

            <?php
            $query=mysqli_query($db_link,"select * from datagempa WHERE Date like '%".$Date."%'");
            }
        ?>

        </p>
        <table width="1100" align="center" border="0" cellpadding="10px" cellspacing="10px">
            <tr>
              <th width="80" align="center" valign="middle">Date</th>
              <th width="80" align="center" valign="middle">OT</th>
              <th width="80" align="center" valign="middle">Lat</th>
              <th width="80" align="center" valign="middle">Long</th>
              <th width="80" align="center" valign="middle">Depth</th>
              <th width="80" align="center" valign="middle">Mag</th>
              <th width="80" align="center" valign="middle">Location&Remark</th>
            </tr>
            <?php
            //menampilkan pencarian data
            while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td align="center"><?php echo $row['Date']; ?></td>
                <td align="center"><?php echo $row['OT']; ?></td>
                <td align="center"><?php echo $row['Lat'];?></td>
                <td align="center"><?php echo $row['Long'];?></td>
                <td align="center"><?php echo $row['Depth'];?></td>
                <td align="center"><?php echo $row['Mag'];?></td>
                <td align="center"><?php echo $row['Location&Remark'];?></td>
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
