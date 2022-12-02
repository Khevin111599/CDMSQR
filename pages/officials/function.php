<?php
if(isset($_POST['btn_add'])){
    $ddl_pos = $_POST['ddl_pos'];
    $txt_fname = $_POST['txt_fname'];
    $txt_mname = $_POST['txt_mname'];
    $txt_lname = $_POST['txt_lname']; 
    $txt_purok = $_POST['txtpurok']; 
    $txtbarangay = $_POST['txtbarangay'];
    $txt_cptfname = $_POST['txt_cptfname'];
    $txt_cptmname = $_POST['txt_cptmname'];
    $txt_cptlname = $_POST['txt_cptlname'];
    $txt_contact = $_POST['txt_contact'];
    $txt_emailadd = $_POST['txt_emailadd'];
    $txt_uname = substr($txt_fname, 0, 1).$txt_lname.substr($txt_contact, -4);
    $txt_pass = md5("pass123");
    
    if(isset($_SESSION['role'])){
        $action = 'Added Official named '.$txt_lname.', '.$txt_mname.' '.$txt_fname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }
        $query = mysqli_query($con,"INSERT INTO tblofficial (
                                                sPosition,
                                                fname,
                                                mname,
                                                lname,
                                                purok,
                                                paddress,
                                                cptfname,
                                                cptmname,
                                                cptlname,
                                                pcontact,
                                                pemail,                                                
                                                username,
                                                password)
                                                values ( '$ddl_pos', '$txt_fname', '$txt_mname', '$txt_lname', '$txt_purok', '$txtbarangay', '$txt_cptfname', '$txt_cptmname', '$txt_cptlname', '$txt_contact', '$txt_emailadd', '$txt_uname', '$txt_pass')") or die('Error: ' . mysqli_error($con));
        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        }
    }


if(isset($_POST['btn_save']))
{
    if(filter_has_var(INPUT_POST,'txt_edit_pass')) {
        $txt_edit_pass = md5("pass123");
   }else{
    $txt_edit_pass = $_POST['txt_old_pass'];
   }
    $txt_id = $_POST['hidden_id'];
    $txt_edit_fname = $_POST['txt_edit_fname'];
    $txt_edit_mname = $_POST['txt_edit_mname'];
    $txt_edit_lname = $_POST['txt_edit_lname'];
    $txt_edit_purok = $_POST['txteditpurok'];
    $txt_edit_barangay = $_POST['txteditbarangay'];
    $txt_edit_cptfname = $_POST['txt_edit_cptfname'];
    $txt_edit_cptmname = $_POST['txt_edit_cptmname'];
    $txt_edit_cptlname = $_POST['txt_edit_cptlname'];
    $txt_edit_contact = $_POST['txt_edit_pcontact'];
    $txt_edit_uname = $_POST['txt_edit_uname'];


    if(isset($_SESSION['role'])){
        $action = 'Update Official named '.$txt_edit_lname.', '.$txt_edit_lname.' '.$txt_edit_cptmname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    $update_query = mysqli_query($con,"UPDATE tblofficial set 
        fname = '".$txt_edit_fname."',
        mname = '".$txt_edit_mname."',
        lname = '".$txt_edit_lname."',
        purok = '".$txt_edit_purok."',
        paddress = '".$txt_edit_barangay."',
        cptfname = '".$txt_edit_cptfname."',
        cptmname = '".$txt_edit_cptmname."',
        cptlname = '".$txt_edit_cptlname."',
        pcontact = '".$txt_edit_contact."',
        username = '".$txt_edit_uname."',
        password = '".$txt_edit_pass."'
        where id = '".$txt_id."'
        ") or die('Error: ' . mysqli_error($con));

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
    echo $update_query;  
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
