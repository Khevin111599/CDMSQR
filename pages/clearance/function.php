<?php
include('../../assets/plugins/phpqrcode/qrlib.php');
if(isset($_POST['btn_add'])){
    $txt_cnum = $_POST['txt_cnum'];
    $ddl_resifname = $_POST['ddl_resifname'];
    $ddl_resimname = $_POST['ddl_resimname'];
    $ddl_resilname = $_POST['ddl_resilname'];
    $txt_findings = $_POST['txt_findings'];
    $txt_purpose = $_POST['txt_purpose'];
    $date = date('Y-m-d');
    $userid = $_SESSION['userid'];
    $username = $_SESSION['username'];
    $secName = $_SESSION['secName'];

    $localIP = getHostByName(getHostName());
    $tempDir = "image/";

    $visitLink = $localIP.'/trackingsystem/tracking/statustracking.php?qrcode='.'CL'.$txt_cnum;
    $fileName = ''.md5($txt_cnum).'.png';

    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = $tempDir.$fileName;

    $chkdup = mysqli_query($con,"SELECT * from tblclearance where clearanceNo = ".$txt_cnum." ");
    $num_rows = mysqli_num_rows($chkdup);

    if(isset($_SESSION['role'])){
        $action = 'Added Clearance with clearance number of '.$txt_cnum;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($num_rows == 0){
        if($_SESSION['role'] == "Administrator"){
        $query = mysqli_query($con,"INSERT INTO tblclearance (clearanceNo,resifname,resimname,resilname,findings,purpose,dateRecorded,recordedBy,qrlink,qrdir,status)
            values ('$txt_cnum','$ddl_resifname','$ddl_resimname','$ddl_resilname', '$txt_findings','$txt_purpose', '$date', '$username','$visitLink','$urlRelativeFilePath','Released')") or die('Error: ' . mysqli_error($con));
            QRcode::png($visitLink, $pngAbsoluteFilePath);
        }
        else{
        $query = mysqli_query($con,"INSERT INTO tblclearance (clearanceNo,resifname,resimname,resilname,findings,purpose,dateRecorded,recorderid,recordedBy,qrlink,qrdir,status)
            values ('$txt_cnum','$ddl_resifname','$ddl_resimname','$ddl_resilname', '$txt_findings','$txt_purpose', '$date', '$userid', '$secName','$visitLink','$urlRelativeFilePath','Released')") or die('Error: ' . mysqli_error($con));
            QRcode::png($visitLink, $pngAbsoluteFilePath);
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
    $txt_edit_fname = $_POST['txt_edit_fname'];
    $txt_edit_mname = $_POST['txt_edit_mname'];
    $txt_edit_lname = $_POST['txt_edit_lname'];
    $txt_edit_findings = $_POST['txt_edit_findings'];
    $txt_edit_purpose = $_POST['txt_edit_purpose'];

    $update_query = mysqli_query($con,"UPDATE tblclearance set 
    clearanceNo= '".$txt_edit_cnum."', 
    resifname = '".$txt_edit_fname."',
    resimname = '".$txt_edit_mname."',
    resilname = '".$txt_edit_lname."', 
    findings = '".$txt_edit_findings."', 
    purpose = '".$txt_edit_purpose."' 
    where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

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
            $delete_query = mysqli_query($con,"DELETE from tblclearance where id = '$value' ") or die('Error: ' . mysqli_error($con));

            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
