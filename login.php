<?php  
session_start();//session starts here  
  
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico" type="image/ico" />

    <title>SCMedia - Semesta Citra Media</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
				  <div>
                  <center><h1>Semesta Citra Media</h1></center>
			</div>
          <section class="login_content">			
            <form method="post" action="login.php">

              <h1>Login Form</h1>
			  <fieldset>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" type="username" autofocus>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="pass" type="password">
              </div>
                <input class="btn btn-primary btn-lg" type="submit" value="Login" name="login">
			  </fieldset>
              <div class="clearfix"></div>
			
              <div class="separator">
                Forgot your password? Please contact your Administrator!
                <div class="clearfix"></div>
                <br />

                <div>
                  <p>&copy <script>document.write(new Date().getFullYear())</script> All Rights Reserved. Semesta Citra Media.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

<?php  
  
include("koneksi.php");  
  
if(isset($_POST['login']))  
{  
    $username=$_POST['username'];  
    $pass=md5($_POST['pass']);   
  
    $run=mysqli_query($con, "select * from login WHERE username='$username' AND password='$pass'");  
	$xrun = mysqli_fetch_assoc($run);
    if(mysqli_num_rows($run) > 0)  
    {  
        echo "<script>window.open('index.php','_self')</script>";  
  
        $_SESSION['nik']=$xrun['nik'];
  
    }  
    else  
    {  
      echo "<script>alert('Username or/and Password are incorrect!')</script>";  
    }  
}  
?>  
