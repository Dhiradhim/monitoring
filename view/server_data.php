<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');
include('koneksi.php');
?>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure to delete this record? All track for this item will be deleted too.')){
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
					<li><a href="profile.php"><i class="fa fa-user pull-right"></i>Profile</a></li>
                    <li><a href="changepw.php"><i class="fa fa-gear pull-right"></i>Change Password</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                  </ul>
                </li>
				
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Menu
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="server_input.php"><i class="fa fa-pencil-square-o pull-right"></i>Input New Data</a></li>
                  </ul>
                </li>
				
              </ul>
            </nav>
          </div>
        </div>
        <!-- /page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Server</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <?php
					$q_svr = mysqli_query($con, "SELECT * FROM tb_svr ORDER BY no_svr") or die(mysqli_connect_error());
					$row_svr = mysqli_fetch_assoc($q_svr);
					$x = mysqli_num_rows($q_svr);
					$count = 1;
					?>  
					
					<table class="table table-hover" id="datatable-buttons">
			  <thead>
                <tr>
				<th><div align="center">
                    <h6>NO</h6>
                  </div></th>
                  <th><div align="center">
                    <h6>Kode Server</h6>
                  </div></th>
                  <th><div align="center">
                    <h6>Merk</h6>
                  </div></th>
                  <th><div align="center">
                    <h6>Type</h6>
                  </div></th>
                  <th><div align="center">
                    <h6>Product Number</h6>
                  </div></th>
                  <th><div align="center">
                    <h6>Serial Number</h6>
                  </div></th>
                  <th><div align="center">
                    <h6>Status</h6>
                  </div></th>
		  <th><div align="center">
                    <h6>Penempatan</h6>
                  </div></th>
                  <th><div align="center">
                    <h6>HDD</h6>
                  </div></th>
                  <th><div align="center">
                    <h6>Action</h6>
                  </div></th>
                </tr>
				</thead>
				<tbody>
                <?php do { ?>
                  <tr>
					<td><div align="center"><?php echo $count; ?></div></td>
                    <td><div align="center"><?php echo $row_svr['kd_svr']; ?></div></td>
                    <td><div align="center"><?php echo $row_svr['merk_svr']; ?></div></td>
                    <td><div align="center"><?php echo $row_svr['type_svr']; ?></div></td>
                    <td><div align="center"><?php echo $row_svr['pn_svr']; ?></div></td>
                    <td><div align="center"><?php echo $row_svr['sn_svr']; ?></div></td>
                    <td><div align="center"><?php 
					$x=$row_svr['kd_svr'];
					$q_track = mysqli_query($con, "SELECT status_track, place_track FROM tb_track WHERE kd_barang='$x' ORDER BY kd_track DESC") or die(mysqli_connect_error());
					$track = mysqli_fetch_assoc($q_track);
					echo $track['status_track']; ?></div></td>
                    <td><div align="center"><?php echo $track['place_track']; ?></div></td>
                    <td><div align="center"><?php 
					$y=$row_svr['kd_svr'];
					$q_hdd = mysqli_query($con, "SELECT server_hdd FROM tb_hdd WHERE server_hdd='$y'");
					$run = mysqli_num_rows($q_hdd);
					echo $run; ?></div></td>

                    <td><div align="center">
					<a href="server_view.php?kd_svr=<?=$row_svr['kd_svr']?>" title="View"> <img src="../images/application.png" width="16" height="16" /></a>  
					</a></div></td>
                </tr>
                  <?php 
				  $count++;
				  } while ($row_svr = mysqli_fetch_assoc($q_svr)); 
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
