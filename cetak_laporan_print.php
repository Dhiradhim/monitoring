<?php 
	include 'koneksi.php';
	$laporan=$_POST['laporan'];
	$id_produk=$_POST['id_produk'];
	if ($laporan=='ps')
	{ 
		$judul='Pengaturan Suhu';
	}
	else if ($laporan=='bt')
	{ 
		$judul='Berat Timbangan';
	} else if ($laporan=='md')
	{ 
		$judul='Metal Detector';
	} else if ($laporan=='hc')
	{ 
		$judul='Hasil Cetak';
	} else
	{ 
		$judul='Hasil Monitoring';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan <?=$judul?></title>
</head>
<body>

	<center>

		<h1>PT. Gandum Mas Kencana</h1>
		<h2>Laporan <?=$judul?></h2>
		<h3>No. Batch : <?=$id_produk;?></h3>
		<br>
	
				<?php if ($laporan=='ps') { ?>
					<center><table border="2">
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
				</table><br>
				
				<script>
					window.print();
					window.close();
				</script>
				<?php 
				}
				else if ($laporan=='bt') { ?>
					<center><table border="2">
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
								<td><div align="center"><?php echo $row['berat']; ?> g</div></td>
							</tr>
						<?php 
						$count2++;
						} while ($row = mysqli_fetch_assoc($query)); 
						?>
                         </tbody>
					</table>
				  <br>
				  <script>
					window.print();
					window.close();
				</script>
				<?php 
				} else if ($laporan=='md') { ?>
					<center><table border="2">
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
							$spv = $row['nama_supervisor'];
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
							<tr>
								<td><div align="center">NON FE 2,0 mm</div></td>
								<td><div align="center"><?php if ($row['nonfeawal']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
								<td><div align="center"><?php if ($row['nonfetengah']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
								<td><div align="center"><?php if ($row['nonfeakhir']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
							</tr>
							<tr>
								<td><div align="center">SS 2,0 mm</div></td>
								<td><div align="center"><?php if ($row['ssawal']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
								<td><div align="center"><?php if ($row['sstengah']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
								<td><div align="center"><?php if ($row['ssakhir']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
							</tr>
						<?php 
						$count3++;
						} while ($row = mysqli_fetch_assoc($query)); 
						?>
                         </tbody>
					</table>
				  <br>
				<center>
				<table style="height: 76px; width: 716px;">
				<tbody>
				<tr>
				<td style="width: 186px;"><div align="center">
				</td>
				<td style="width: 357.467px;">&nbsp;</td>
				<td style="width: 186px;"><div align="center">
				<p>Supervisor</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p><?=$spv;?></p></div>
				</td>
				</tr>
				</tbody>
				</table>
				<p>&nbsp;</p>
				</center>
				  <script>
					window.print();
					window.close();
				</script>
				<?php
				} else if ($laporan=='hc') { ?>
					<center><table border="2">
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
							$op = $row['nama_operator'];
							$fm = $row['nama_formen'];
							$spv = $row['nama_supervisor'];
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
				  <br>
				<center>
				<table style="height: 76px; width: 716px;">
				<tbody>
				<tr>
				<td style="width: 186px;"><div align="center">
				<p>Operator</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p><?=$op;?></p></div>
				</td>
				<td style="width: 357.467px;"><div align="center">
				<p>Formen</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p><?=$fm;?></p></div></td>
				<td style="width: 186px;"><div align="center">
				<p>Supervisor</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p><?=$spv;?></p></div>
				</td>
				</tr>
				</tbody>
				</table>
				</center>
				<script>
					window.print();
					window.close();
				</script>
				<?php
				} else { ?>
				<h4>Data Pengaturan Suhu</h4>
					<center><table border="2">
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
				</table><br><br>
				<h4>Data Berat Timbangan</h4>
					<center><table border="2">
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
								<td><div align="center"><?php echo $row['berat']; ?> g</div></td>
							</tr>
						<?php 
						$count2++;
						} while ($row = mysqli_fetch_assoc($query)); 
						?>
                         </tbody>
					</table>
				  <br><br>
				  <h4>Data Metal Detector</h4>
					<center><table border="2">
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
							<tr>
								<td><div align="center">NON FE 2,0 mm</div></td>
								<td><div align="center"><?php if ($row['nonfeawal']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
								<td><div align="center"><?php if ($row['nonfetengah']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
								<td><div align="center"><?php if ($row['nonfeakhir']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
							</tr>
							<tr>
								<td><div align="center">SS 2,0 mm</div></td>
								<td><div align="center"><?php if ($row['ssawal']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
								<td><div align="center"><?php if ($row['sstengah']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
								<td><div align="center"><?php if ($row['ssakhir']=='y') { echo '<input type="checkbox" checked disabled>'; } else {echo '<input type="checkbox" disabled>';}; ?></div></td>
							</tr>
						<?php 
						$count3++;
						} while ($row = mysqli_fetch_assoc($query)); 
						?>
                         </tbody>
					</table>
				  <br><br>
				  <h4>Data Hasil Cetak</h4>
					<center><table border="2">
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
							$op = $row['nama_operator'];
							$fm = $row['nama_formen'];
							$spv = $row['nama_supervisor'];
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
				<center>
				<table style="height: 76px; width: 716px;">
				<tbody>
				<tr>
				<td style="width: 186px;"><div align="center">
				<p>Operator</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p><?=$op;?></p></div>
				</td>
				<td style="width: 357.467px;"><div align="center">
				<p>Formen</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p><?=$fm;?></p></div></td>
				<td style="width: 186px;"><div align="center">
				<p>Supervisor</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p><?=$spv;?></p></div>
				</td>
				</tr>
				</tbody>
				</table>
				</center>
				<script>
					window.print();
					window.close();
				</script>
				<?php
				}
				?>
	
	
</body>
</html>