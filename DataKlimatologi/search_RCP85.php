<?php
  include 'config.php';
 ?>

<html>
    <head>
        <title>Pencarian Data RCP8.5</title>
    </head>
    <body>
        <div style="border:1px solid #B0C4DE; padding:10px; overflow:auto;">
        <form action="search_RCP85.php" method="post" name="postform">
            <p align="center"><font color="orange" size="3"><b>Pencarian Data RCP8.5</b></font></p><br />
            <table align="center" border="0">
                <tr>
                    <td width="125"><b>Dari Tahun</b></td>
                    <td colspan="2" width="190">: <input type="text" name="tahun_awal" size="16" />
                    </td>
                    <td width="125"><b>Sampai Tahun</b></td>
                    <td colspan="2" width="190">: <input type="text" name="tahun_akhir" size="16" />
                    </td>
                    <td colspan="2" width="190"><input type="submit" value="Pencarian Data" name="pencarian"/></td>
                    <td colspan="2" width="70"><input type="reset" value="Reset" /></td>
                    <td colspan="2" width="70"><input type="reset" value="Back" onclick="document.location='RCP85.php'"/></td>
                </tr>
            </table>
        </form><br />
      </div>
        <?php
            //proses jika sudah klik tombol pencarian data
            if(isset($_POST['pencarian'])){
            //menangkap nilai form
            $tahun_awal=$_POST['tahun_awal'];
            $tahun_akhir=$_POST['tahun_akhir'];
            if(empty($tahun_awal) || empty($tahun_akhir)){
            //jika data tanggal kosong
            ?>

            <script language="JavaScript">
                alert('Tahun Awal dan Tahun Akhir Harap di Isi!');
                document.location='search_RCP85.php';
            </script>

            <?php
            }else{
            ?><i style="margin-left: 500px;"><b>Informasi : </b> Hasil pencarian data <b><?php echo $_POST['tahun_awal']?></b> s/d <b><?php echo $_POST['tahun_akhir']?></b></i>

            <?php
            $query=mysqli_query($db_link,"select * from rcp8_5 WHERE TAHUN between '$tahun_awal' and '$tahun_akhir'");
            }
        ?>

        </p>
        <table width="1100" align="center" border="0" cellpadding="10px" cellspacing="10px">
            <tr>
                <th width="70">TAHUN</td>
                <th width="70">JANUARI</td>
                <th width="70">FEBRUARI</td>
                <th width="70">MARET</td>
                <th width="70">APRIL</td>
                <th width="70">MEI</td>
                <th width="70">JUNI</td>
                <th width="70">JULI</td>
                <th width="70">AGUSTUS</td>
                <th width="70">SEPTEMBER</td>
                <th width="70">OKTOBER</td>
                <th width="70">NOVEMBER</td>
                <th width="70">DESEMBER</td>
            </tr>
            <?php
            //menampilkan pencarian data
            while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td align="center"><?php echo $row['TAHUN']; ?></td>
                <td align="center"><?php echo $row['JANUARI']; ?></td>
                <td align="center"><?php echo $row['FEBRUARI'];?></td>
                <td align="center"><?php echo $row['MARET'];?></td>
                <td align="center"><?php echo $row['APRIL'];?></td>
                <td align="center"><?php echo $row['MEI'];?></td>
                <td align="center"><?php echo $row['JUNI'];?></td>
                <td align="center"><?php echo $row['JULI'];?></td>
                <td align="center"><?php echo $row['AGUSTUS'];?></td>
                <td align="center"><?php echo $row['SEPTEMBER'];?></td>
                <td align="center"><?php echo $row['OKTOBER'];?></td>
                <td align="center"><?php echo $row['NOVEMBER'];?></td>
                <td align="center"><?php echo $row['DESEMBER'];?></td>
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
