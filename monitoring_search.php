<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');?>
<title> Data Hasil Monitoring </title>
<?php
include('koneksi.php');
?>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure to delete this record?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
</head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
<?php
include('side1.html');
include('top.html');
$id_produk=$_POST['id_produk'];
?>
        <!-- /page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Hasil Monitoring</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div>
                <div class="x_panel">
                  <div class="x_content">
				  <h4>Data Pengaturan Suhu</h4>
				  <table class="table" style="width: 50%">
						<thead>
                            <tr>
                                <th><div align="center">No</div></th>
                                <th><div align="center">Nama Produk</div></th>
                                <th><div align="center">No. batch</div></th>
                                <th><div align="center">Shift</div></th>
                                <th><div align="center">Tanggal</div></th>
                                <th><div align="center">Jam</div></th>
                                <th><div align="center">Ukuran</div></th>
                                <th><div align="center">Zona 1</div></th>
                                <th><div align="center">Zona 2</div></th>
                                <th><div align="center">Zona 3</div></th>
                                <th><div align="center">Zona 4</div></th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
							$query = mysqli_query($con, "SELECT * FROM pengaturan_suhu WHERE id_produk=$id_produk") or die(mysqli_connect_error());
							$row = mysqli_fetch_assoc($query);
							$count1 = 1;
						do { ?>
							<tr>
								<td><div align="center"><?php echo $count1; ?></div></td>
								<td><div align="center"><?php echo $row['nama_produk']; ?></div></td>
								<td><div align="center"><?php echo $row['id_produk']; ?></div></td>
								<td><div align="center"><?php echo $row['shift']; ?></div></td>
								<td><div align="center"><?php echo $row['tanggal_pengaturan_suhu']; ?></div></td>
								<td><div align="center"><?php echo $row['jam_pengaturan_suhu']; ?></div></td>
								<td><div align="center"><?php echo $row['ukuran']; ?></div></td>
								<td><div align="center"><?php echo $row['zona_1']; ?></div></td>
								<td><div align="center"><?php echo $row['zona_2']; ?></div></td>
								<td><div align="center"><?php echo $row['zona_3']; ?></div></td>
								<td><div align="center"><?php echo $row['zona_4']; ?></div></td>
							</tr>
						<?php 
						$count1++;
						} while ($row = mysqli_fetch_assoc($query)); 
						?>
                         </tbody>
					</table>
				  <br><br>
				  
				  
				  <h4>Data Berat Timbangan</h4>
				  <table class="table" style="width: 70%">
						<thead>
                            <tr>
                                <th><div align="center">No</div></th>
                                <th><div align="center">Nama Produk</div></th>
                                <th><div align="center">No. batch</div></th>
								<th><div align="center">Shift</div></th>
                                <th><div align="center">Tanggal</div></th>
                                <th><div align="center">Jam</div></th>
                                <th><div align="center">Berat</div></th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
							$query = mysqli_query($con, "SELECT * FROM berat_timbangan WHERE id_produk=$id_produk ORDER by id") or die(mysqli_connect_error());
							$row = mysqli_fetch_assoc($query);
							$count2 = 1;
						do { ?>
							<tr>
								<td><div align="center"><?php echo $count2; ?></div></td>
								<td><div align="center"><?php echo $row['nama_produk']; ?></div></td>
								<td><div align="center"><?php echo $row['id_produk']; ?></div></td>
								<td><div align="center"><?php echo $row['shift']; ?></div></td>
								<td><div align="center"><?php echo $row['tanggal_berat_timbangan']; ?></div></td>
								<td><div align="center"><?php echo $row['jam_timbangan']; ?></div></td>
								<td><div align="center"><?php echo $row['berat']; ?></div></td>
							</tr>
						<?php 
						$count2++;
						} while ($row = mysqli_fetch_assoc($query)); 
						?>
                         </tbody>
					</table>
				  <br><br>
				  
				  
				  <h4>Data Metal Detector</h4>
				  <table class="table" style="width: 90%">
						<thead>
                            <tr>
                                <th><div align="center">No</div></th>
                                <th><div align="center">Nama Produk</div></th>
                                <th><div align="center">No. batch</div></th>
                                <th><div align="center">Shift</div></th>
                                <th><div align="center">Tanggal</div></th>
                                <th><div align="center">Jam</div></th>
                                <th><div align="center">Test Pieces</div></th>
                                <th><div align="center">Awal</div></th>
                                <th><div align="center">Tengah</div></th>
                                <th><div align="center">Akhir</div></th>
                                <th><div align="center">Jumlah Oke</div></th>
                                <th><div align="center">Jumlah Not Oke</div></th>
                                <th><div align="center">Nama Operator</div></th>
                                <th><div align="center">Nama Formen</div></th>
                                <th><div align="center">Nama SPV</div></th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
							$query = mysqli_query($con, "SELECT * FROM metal_detector WHERE id_produk=$id_produk") or die(mysqli_connect_error());
							$row = mysqli_fetch_assoc($query);
							$count3 = 1;
									
						do { ?>
							<tr>
								<td rowspan="3"><div align="center"><?php echo $count3; ?></div></td>
								<td rowspan="3"><div align="center"><?php echo $row['nama_produk']; ?></div></td>
								<td rowspan="3"><div align="center"><?php echo $row['id_produk']; ?></div></td>
								<td rowspan="3"><div align="center"><?php echo $row['shift']; ?></div></td>
								<td rowspan="3"><div align="center"><?php echo $row['tanggal_metal_detector']; ?></div></td>
								<td rowspan="3"><div align="center"><?php echo $row['jam_metal_detector']; ?></div></td>
								<td><div align="center">FE 1,5 mm</div></td>
								<td><div align="center"><?php if ($row['feawal']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
								<td><div align="center"><?php if ($row['fetengah']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
								<td><div align="center"><?php if ($row['feakhir']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
								<td rowspan="3"><div align="center"><?php echo $row['jumlah_oke']; ?></div></td>
								<td rowspan="3"><div align="center"><?php echo $row['jumlah_not_oke']; ?></div></td>
								<td rowspan="3"><div align="center"><?php echo $row['nama_operator']; ?></div></td>
								<td rowspan="3"><div align="center"><?php echo $row['nama_formen']; ?></div></td>
								<td rowspan="3"><div align="center"><?php echo $row['nama_supervisor']; ?></div></td>
							</tr>
						<?php 
						$count3++;
						} while ($row = mysqli_fetch_assoc($query)); 
						?>
                         </tbody>
					</table>
				  <br><br>
				  <h4>Data Hasil Cetak</h4>
					<table class="table">
						<thead>
                            <tr>
                                <th><div align="center">No</div></th>
                                <th><div align="center">Nama Produk</div></th>
                                <th><div align="center">No. batch</div></th>
                                <th><div align="center">Shift</div></th>
                                <th><div align="center">Tanggal</div></th>
                                <th><div align="center">Jam</div></th>
                                <th><div align="center">Standar</div></th>
                                <th><div align="center">Actual</div></th>
                                <th><div align="center">Varian</div></th>
                                <th><div align="center">Persentase</div></th>
                                <th><div align="center">Start Downtime</div></th>
                                <th><div align="center">Stop Downtime</div></th>
                                <th><div align="center">Total Downtime</div></th>
                                <th><div align="center">Deskripsi Downtime</div></th>
                                <th><div align="center">Tindakan Dilakukan</div></th>
                                <th><div align="center">Tindakan Pencegahan</div></th>
                                <th><div align="center">Nama Operator</div></th>

                            </tr>
                        </thead>
                        <tbody>
						<?php
							$query = mysqli_query($con, "SELECT * FROM hasil_cetak WHERE id_produk=$id_produk") or die(mysqli_connect_error());
							$row = mysqli_fetch_assoc($query);
							$count4 = 1;
						
						do { ?>
							<tr>
								<td><div align="center"><?php echo $count4; ?></div></td>
								<td><div align="center"><?php echo $row['nama_produk']; ?></div></td>
								<td><div align="center"><?php echo $row['id_produk']; ?></div></td>
								<td><div align="center"><?php echo $row['shift']; ?></div></td>
								<td><div align="center"><?php echo $row['tanggal_hasil_cetak']; ?></div></td>
								<td><div align="center"><?php echo $row['jam_hasil_cetak']; ?></div></td>
								<td><div align="center"><?php echo $row['standar']; ?></div></td>
								<td><div align="center"><?php echo $row['actual']; ?></div></td>
								<td><div align="center"><?php echo $row['varian']; ?></div></td>
								<td><div align="center"><?php echo $row['persentase']; ?> %</div></td>
								<td><div align="center"><?php echo $row['start_downtime']; ?></div></td>
								<td><div align="center"><?php echo $row['stop_downtime']; ?></div></td>
								<td><div align="center"><?php echo $row['total_downtime'];?> menit</div></td>
								<td><div align="center"><?php echo $row['deskripsi_downtime']; ?></div></td>
								<td><div align="center"><?php echo $row['tindakan_dilakukan']; ?></div></td>
								<td><div align="center"><?php echo $row['tindakan_pencegahan']; ?></div></td>
								<td><div align="center"><?php echo $row['nama_operator']; ?></div></td>

							</tr>
						<?php 
						$count4++;
						} while ($row = mysqli_fetch_assoc($query)); 
						?>
                         </tbody>
					</table>
					<button onclick="window.print()" class="btn btn-success">Print</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		
<?php include('footer.html');?>
      </div>
    </div>
	<?php include('js.html');?>
  </body>
</html>
