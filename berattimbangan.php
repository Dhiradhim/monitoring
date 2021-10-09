<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');?>
<title> Data Berat Timbangan </title>
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
include('side1.html');?>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">

                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Account
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="changepw.php"><i class="fa fa-gear pull-right"></i>Change Password</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                  </ul>
                </li>
				
				<?php 
				if ($row_user['jabatan']=='administrator' OR $row_user['jabatan']=='operator') {	
					echo '<li class="">';
					echo '  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">';
					echo '    Menu';
					echo '    <span class=" fa fa-angle-down"></span>';
					echo '  </a> ';
					echo '  <ul class="dropdown-menu dropdown-usermenu pull-right">';
					echo '   <li><a href="berattimbangan_input.php"><i class="fa fa-pencil-square-o pull-right"></i>Input New Data</a></li>';
					echo '  </ul>';
					echo '</li>';
				}
				?>
				
              </ul>
            </nav>
          </div>
        </div>
        <!-- /page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Berat Timbangan</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div>
                <div class="x_panel">
                  <div class="x_content">
					<table class="table" 					
					<?php
					if ($row_user['jabatan']=='operator') {	
						echo 'id="datatable">';
					}
					else {
						echo 'id="datatable-buttons">';
					}
					?>
						<thead>
                            <tr>
                                <th><div align="center">No</div></th>
                                <th><div align="center">Nama Produk</div></th>
                                <th><div align="center">No. batch</div></th>
								<th><div align="center">Tanggal</div></th>
                                <th><div align="center">Shift</div></th>
                                <th><div align="center">Action</div></th>
                                <th><div align="center"> </div></th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
						$date=date("Y-m-d");
						if ($row_user['jabatan']=='operator') {
							$query = mysqli_query($con, "SELECT DISTINCT nama_produk,id_produk,tanggal_berat_timbangan,shift FROM berat_timbangan ORDER by id WHERE tanggal_berat_timbangan=$date") or die(mysqli_connect_error());
							$row = mysqli_fetch_assoc($query);
							$count = 1;
							}
						else {
							$query = mysqli_query($con, "SELECT DISTINCT nama_produk,id_produk,tanggal_berat_timbangan,shift FROM berat_timbangan ORDER by id") or die(mysqli_connect_error());
							$row = mysqli_fetch_assoc($query);
							$count = 1;
						}
						do { ?>
							<tr>
								<td><div align="center"><?php echo $count; ?></div></td>
								<td><div align="center"><?php echo $row['nama_produk']; ?></div></td>
								<td><div align="center"><?php echo $row['id_produk']; ?></div></td>
								<td><div align="center"><?php echo $row['tanggal_berat_timbangan']; ?></div></td>
								<td><div align="center"><?php echo $row['shift']; ?></div></td>
								<td><div align="center">
								<a href="berattimbangan_view.php?nama_produk=<?=$row['nama_produk']?>&id_produk=<?=$row['id_produk']?>&tanggal_berat_timbangan=<?=$row['tanggal_berat_timbangan']?>&shift=<?=$row['shift']?>" title="View"> <img src="images/application.png" width="16" height="16" /></a>  
								<?php
								if ($row_user['jabatan']=='administrator' OR $row_user['jabatan']=='operator') {	
								echo '<a href="berattimbangan_edit.php?nama_produk='.$row['nama_produk'].'&id_produk='.$row['id_produk'].'&tanggal_berat_timbangan='.$row['tanggal_berat_timbangan'].'&shift='.$row['shift'].'" title="Edit"> <img src="images/application_form_edit.png" width="16" height="16" /></a>  ';
								echo '<a href="berattimbangan_delete.php?nama_produk='.$row['nama_produk'].'&id_produk='.$row['id_produk'].'&tanggal_berat_timbangan='.$row['tanggal_berat_timbangan'].'&shift='.$row['shift'].'" class="delete" title="Delete"><img src="images/application_delete.png" width="16" height="16" /></a>';
								}
								else
								{
									  
								}
								?>
								</div></td>
								<td><div align="center"> </div></td>
							</tr>
						<?php 
						$count++;
						} while ($row = mysqli_fetch_assoc($query)); 
						?>
                         </tbody>
					</table>
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
