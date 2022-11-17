<?php
session_start();
?>
<html style="background: url(Picture/bg.jpg); background-repeat: no-repeat; background-size:cover;">
<title>Barangay Management Information System</title>
<link rel="stylesheet" type="text/css" href="Css/homepage.css">
<link rel="shortcut icon" href="Icon/sta_rosa.png">

<style type="text/css">
	.nav {
  background-color:#2e4a62;
  border: none;
  width: 100%;
  position:fixed;
  overflow: hidden;
  top: 0;
  left: 0;
  text-transform: uppercase;
  font-family: calibri;
}
</style>
<div class="nav">
	<a href="index.php">home</a>
	<a href="about.php">about</a>
</div>

<body>

<div class="container"  >
</div>
	<div class="right" >
	<section class="banner">Sign In</section> </br> </br>
	<Center><img src="Picture/sta_rosa.png" height="100" width="100" ></center>
	<form method="POST">
			<input type="text" name="txt_username" required autofocus placeholder="Enter Username">
			<input type="password" name="txt_password" required autofocus placeholder="Enter Password">

			<input type="Submit" name="submit" value="Enter">
			<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "Passwordrd";
    }
}
</script>
	</div>

		</form>
</div>

<?php
include('pages/connection.php');
        if(isset($_POST['submit'])){
            $username = $_POST['txt_username'];
            $password = $_POST['txt_password'];

            $result = mysqli_query($con, "SELECT * from tblofficial where username = '$username' and password = '$password' LIMIT 1 ");
            if(mysqli_num_rows($result) == 1){
							$loggedinuser = mysqli_fetch_assoc($result);

							if($loggedinuser['sPosition'] == 'Administrator'){
										$_SESSION['role'] = $loggedinuser['sPosition'];
										$_SESSION['userid'] = $loggedinuser['id'];
										$_SESSION['username'] = $loggedinuser['completeName'];
										echo "<script>alert('Welcome.');</script>";
									header ('location: pages/dashboard/dashboard.php');
							}elseif($loggedinuser['sPosition'] == 'Mayor Secretary'){
										$_SESSION['role'] = $loggedinuser['sPosition'];
										$_SESSION['userid'] = $loggedinuser['id'];
										$_SESSION['username'] = $loggedinuser['completeName'];
										echo "<script>alert('Welcome.');</script>";
										header ('location: pages/tracking/tracking.php');
							}else{
										$_SESSION['role'] = $loggedinuser['sPosition'];
										$_SESSION['userid'] = $loggedinuser['id'];
										$_SESSION['username'] = $loggedinuser['completeName'];
										echo "<script>alert('Welcome.');</script>";
										header ('location: pages/dashboard/dashboard.php');
							}
              /*  while($row = mysqli_fetch_array($admin)){
                  $_SESSION['role'] = "Administrator";
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                  echo "<script>alert('Welcome.');</script>";
                }
                header ('location: pages/dashboard/dashboard.php'); */
            }
						echo $_SESSION['role'];
    }


      ?>

</body>
</html>
