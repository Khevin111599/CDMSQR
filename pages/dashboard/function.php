<?php
if(isset($_POST['btnchangepass']))
{
    $txtid = $_SESSION['brgyid'];
    $txtoldpass = md5($_POST['txtoldpass']);
    $txtnewpass = md5($_POST['txtnewpass']);
    $txtconpass = md5($_POST['txtconpass']);
    echo '<script>console.log("Your stuff here")</script>';
   
    $sql = "select * from tblofficial where id = '".$txtid."' AND password = '".$txtoldpass."'";
    $result1 = mysqli_query($con, $sql);

    if(mysqli_num_rows($result1) > 0){
        if($txtnewpass == $txtconpass){
            $update_query = mysqli_query($con,
                "UPDATE tblofficial set password = '".$txtnewpass."' where id = '".$txtid."' ") or die('Error: ' . mysqli_error($con));
                echo '
                    <script type="text/javascript">
                    $(document).ready(function(){swal({icon: "success",
                        title: "Password Succesfully Changed!"})});
                    </script>';
        }else{
            echo '
                <script type="text/javascript">
                $(document).ready(function(){swal({icon: "error",
                    title: "Password Does Not Match. Please Try Again!"})});
                </script>';
        } 
        
    }else{
        echo '
            <script type="text/javascript">
            $(document).ready(function(){swal({icon: "error",
                title: "Wrong Password. Please Try Again!"})});
            </script>';
    }

    
}

?>