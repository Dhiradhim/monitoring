<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');
include('../koneksi.php');
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
                    <li><a href="input.php?sascm=SCM"><i class="fa fa-pencil-square-o pull-right"></i>Input DN SCM</a></li>
                    <li><a href="input.php?sascm=SA"><i class="fa fa-pencil-square-o pull-right"></i>Input DN SA</a></li>
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
                <h3>Data Delivery Note</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <?php
					$query = mysqli_query($con, "SELECT * FROM tb_dn ORDER BY id_dn") or die(mysqli_connect_error());
					$data = mysqli_fetch_assoc($query);
					$x = mysqli_num_rows($query);
					$count = 1;
					?>  
					
	    <table class="table table-hover" id="datatable-buttons">
		<thead>
               	   <tr>
			<th><div align="center"><h6>NO</h6></div></th>
	                <th><div align="center"><h6>No. DN</h6></div></th>
                  	<th><div align="center"><h6>Tanggal</h6></div></th>
                  	<th><div align="center"><h6>Customer</h6></div></th>
                  	<th><div align="center"><h6>Kantor</h6></div></th>
                  	<th><div align="center"><h6>Nama Barang</h6></div></th>
                  	<th><div align="center"><h6>Sender</h6></div></th>
                  	<th><div align="center"><h6>Action</h6></div></th>
                   </tr>
		</thead>
	     	<tbody>
                <?php do { ?>
                  <tr>
		    <td><div align="center"><?php echo $count; ?></div></td>
                    <td><div align="center"><?php echo $data['nodn']; ?></div></td>
                    <td><div align="center"><?php echo $data['tanggal']; ?></div></td>
                    <td><div align="center"><?php echo $data['cust']; ?></div></td>
                    <td><div align="center"><?php echo $data['kantor']; ?></div></td>
                    <td><div align="center"><?php echo $data['namabarang1']; ?> / <?=$data['namabarang2']?></div></td>
                    <td><div align="center"><?php echo $data['sender']; ?></div></td>
                    <td><div align="center">
					<a href="file/<?=$data['nama_file']?>" title="PRINT">PRINT</a>
		    </a></div></td>
                  </tr>
                  <?php 
				  $count++;
				  } while ($data = mysqli_fetch_assoc($query)); 
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

