<?php
if(isset($_POST['btn_approve']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_busname = $_POST['txt_edit_busname'];

    $update_query = mysqli_query($con,"UPDATE tblpermit set status = 'Approved' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Approve Permit with business name of '.$txt_edit_busname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_disapprove']))
{
  $txt_id = $_POST['hidden_id'];
  $txt_edit_busname = $_POST['txt_edit_busname'];

    $update_query = mysqli_query($con,"UPDATE tblpermit set status = 'Disapproved' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Disapprove Permit with business name of '.$txt_edit_busname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}
?>
