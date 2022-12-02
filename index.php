<?php
session_start();
include('pages/connection.php');
    if(isset($_POST['submit'])){
        $username = $_POST['txt_username'];
        $password = md5($_POST['txt_password']);

        $result = mysqli_query($con, "SELECT * from tblofficial where username = '$username' and password = '$password' LIMIT 1 ");
        if(mysqli_num_rows($result) == 1){
			$loggedinuser = mysqli_fetch_assoc($result);
				if($loggedinuser['sPosition'] == 'Administrator'){
					$_SESSION['role'] = $loggedinuser['sPosition'];
					$_SESSION['userid'] = $loggedinuser['id'];
					$_SESSION['username'] = $loggedinuser['fname'];
					header ('location: pages/dashboard/dashboard.php');
				}elseif($loggedinuser['sPosition'] == 'Mayor Secretary'){
					$_SESSION['role'] = $loggedinuser['sPosition'];
					$_SESSION['userid'] = $loggedinuser['id'];
					$_SESSION['username'] = $loggedinuser['lname'].', '.$loggedinuser['fname'].' '.$loggedinuser['mname'];
					header ('location: pages/tracking/tracking.php');
				}else{
					$_SESSION['role'] = $loggedinuser['sPosition'];
					$_SESSION['userid'] = $loggedinuser['id'];
					$_SESSION['username'] = $loggedinuser['paddress'];
					$_SESSION['secName'] = $loggedinuser['lname'].', '.$loggedinuser['fname'].' '.$loggedinuser['mname'];
					$_SESSION['brgyid'] = $loggedinuser['id'];
					echo "<script>alert('Welcome.');</script>";
					header ('location: pages/dashboard/dashboard.php');
				}
        }
					echo $_SESSION['role'];
    }
?>
<html>
<title>Barangay Management Information System</title>
<link rel="stylesheet" type="text/css" href="css/homepage.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="shortcut icon" href="Icon/sta_rosa.png">
<div class="form-group">
	<div class="nav">
		<a href="index.php">home</a>
		<a href="about.php">about</a>
	</div>
</div>
<body style="background-image: url('Picture/mainbg.png');">
<div class="form-group align-middle" style="padding-top:50px;">
	<div class="form-group col-md-8 col-md-offset-2">
		<center><h1>CENTRALIZED DOCUMENT MANAGEMENT AND <br/> TRACKING WITH QR CODE INTEGRATION</h1></center>
	</div>
	<div class="form-group col-md-4 col-md-offset-4" >
		<div class="right" style="padding-top:20px;">
			<Center><img src="Picture/starosaico.png" height="150" width="150" ></center>
			<form method="POST">
				<input type="text" name="txt_username" required autofocus placeholder="Enter Username">
				<input type="password" name="txt_password" required autofocus placeholder="Enter Password">

				<input type="Submit" name="submit" value="Enter">
			</form>
		</div>
	</div>
</div>
	
</body>
</html>
