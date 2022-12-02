<?php
if(isset($_POST['btn_add'])){
    $txt_cnum = $_POST['txt_cnum'];
    $ddl_resident = $_POST['ddl_resident'];
    $txt_findings = $_POST['txt_findings'];
    $date = date('Y-m-d');

    $chkdup = mysqli_query($con,"SELECT * from tblclearance where clearanceNo = ".$txt_cnum." ");
    $num_rows = mysqli_num_rows($chkdup);

    if(isset($_SESSION['role'])){
        $action = 'Added Clearance with clearance number of '.$txt_cnum;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($num_rows == 0){
        if($_SESSION['role'] == "Administrator"){
        $query = mysqli_query($con,"INSERT INTO tblindigency (residencyNo,residentname,findings,dateRecorded,recorderid,recordedBy,status)
            values ('$txt_cnum','$ddl_resident', '$txt_findings', '$date', '".$_SESSION['userid']."', '".$_SESSION['secName']."','Released')") or die('Error: ' . mysqli_error($con));
        }
        else{
        $query = mysqli_query($con,"INSERT INTO tblindigency (residencyNo,residentname,findings,dateRecorded,recorderid,recordedBy,status)
            values ('$txt_cnum','$ddl_resident', '$txt_findings', '$date', '".$_SESSION['userid']."', '".$_SESSION['secName']."','Released')") or die('Error: ' . mysqli_error($con));
        }
        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        }
    }
    else{
        $_SESSION['duplicate'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_cnum = $_POST['txt_edit_cnum'];
    $txt_edit_findings = $_POST['txt_edit_findings'];
    $txt_edit_name = $_POST['txt_edit_name'];

    $update_query = mysqli_query($con,"UPDATE tblindigency set residencyNo= '".$txt_edit_cnum."', residentname= '".$txt_edit_name."', findings = '".$txt_edit_findings."' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Update Clearance with clearance number of '.$txt_edit_cnum;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from tblindigency where id = '$value' ") or die('Error: ' . mysqli_error($con));

            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
