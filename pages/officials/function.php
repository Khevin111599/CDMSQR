<?php
if(isset($_POST['btn_add'])){
    $ddl_pos = $_POST['ddl_pos'];
    $txt_cname = $_POST['txt_cname'];
    $txt_contact = $_POST['txt_contact'];
    $txt_address = $_POST['txt_address'];
    $txt_sterm = $_POST['txt_sterm'];
    $txt_eterm = $_POST['txt_eterm'];
    $txt_captain = $_POST['txt_captain'];

    if(isset($_SESSION['role'])){
        $action = 'Added Official named '.$txt_cname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

        $query = mysqli_query($con,"INSERT INTO tblofficial (
                                                sPosition,
                                                completeName,
                                                pcontact,
                                                paddress,
                                                username,
                                                password,
                                                captain)
                                                values ( '$ddl_pos', '$txt_cname', '$txt_contact', '$txt_address', '$txt_sterm', '$txt_eterm', '$txt_captain')") or die('Error: ' . mysqli_error($con));
        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        }
    }


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_cname = $_POST['txt_edit_cname'];
    $txt_edit_contact = $_POST['txt_edit_contact'];
    $txt_edit_address = $_POST['txt_edit_address'];
    $txt_edit_sterm = $_POST['txt_edit_sterm'];
    $txt_edit_eterm = $_POST['txt_edit_eterm'];
    $txt_edit_captain = $_POST['txt_edit_captain'];


    if(isset($_SESSION['role'])){
        $action = 'Update Official named '.$txt_edit_cname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    $update_query = mysqli_query($con,"UPDATE tblofficial set completeName = '".$txt_edit_cname."',
        pcontact = '".$txt_edit_contact."',
        paddress = '".$txt_edit_address."',
        username = '".$txt_edit_sterm."',
        password = '".$txt_edit_eterm."',
        captain = '".$txt_edit_captain."'
        where id = '".$txt_id."'
        ") or die('Error: ' . mysqli_error($con));

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
            $delete_query = mysqli_query($con,"DELETE from tblofficial where id = '$value' ") or die('Error: ' . mysqli_error($con));

            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
