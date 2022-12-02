<!DOCTYPE html>
<html>

    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../index.php");
    }
    else
    {
    ob_start();
    include('../head_css.php'); ?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php

        include "../connection.php";
        ?>
        <?php include('../header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('../sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Business Permit
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                    if(($_SESSION['role'] == "Administrator") || isset($_SESSION['staff']))
                    {
                    ?>

                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">

                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Permit</button>
                                        <?php
                                            if(!isset($_SESSION['staff']))
                                            {
                                        ?>
                                        <button class="btn btn-danger btn-sm" id="selectDel" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        <?php
                                            }
                                        ?>

                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">

                                <form method="post">

                                <div class="tab-content">
                                    <div id="approved" class="tab-pane active in">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <?php
                                                if(!isset($_SESSION['staff']))
                                                {
                                                ?>
                                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                                <?php
                                                    }
                                                ?>
                                                <th>Resident</th>
                                                <th>Barangay</th>
                                                <th>Business Name</th>
                                                <th>Business Address</th>
                                                <th>Type of Business</th>
                                                <th>OR Number</th>
                                                <th>Amount</th>
                                                <th style="width: 40px !important;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            if(!isset($_SESSION['staff']))
                                            {

                                                $squery = mysqli_query($con, "SELECT *,r.paddress as barangay,p.id as pid FROM tblpermit p left join tblofficial r on r.id = p.recorderid;") or die('Error: ' . mysqli_error($con));
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                        <td>'.$row['resilname'].', '.$row['resifname'].' '.$row['resimname'].'</td>
                                                        <td>'.$row['barangay'].'</td>
                                                        <td>'.$row['businessName'].'</td>
                                                        <td>'.$row['businessAddress'].'</td>
                                                        <td>'.$row['typeOfBusiness'].'</td>
                                                        <td>'.$row['orNo'].'</td>
                                                        <td>₱ '.number_format($row['samount'],2).'</td>
                                                        <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button>
                                                        </tr>
                                                        ';


                                                    include "edit_modal.php";
                                                }
                                            }
                                            else{
                                                $squery = mysqli_query($con, "SELECT * FROM tblpermit where status = 'Approved'") or die('Error: ' . mysqli_error($con));
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['resilname'].', '.$row['resifname'].' '.$row['resimname'].'</td>
                                                        <td>'.$row['businessName'].'</td>
                                                        <td>'.$row['businessAddress'].'</td>
                                                        <td>'.$row['typeOfBusiness'].'</td>
                                                        <td>'.$row['orNo'].'</td>
                                                        <td>₱ '.number_format($row['samount'],2).'</td>
                                                        <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>

                                                        <a target="_blank" href="generate.php onclick="location.generate.php();" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Generate</a></td>


                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>

                                    </div>

                                    <?php include "../deleteModal.php"; ?>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <?php include "../edit_notif.php"; ?>

                            <?php include "../added_notif.php"; ?>

                            <?php include "../delete_notif.php"; ?>

                            <?php include "add_modal.php"; ?>

                            <?php include "function.php"; ?>


                    </div>   <!-- /.row -->

                    <?php
                    }
                    elseif($_SESSION['role'] == "Secretary")
                    {
                    ?>

                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">

                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Permit</button>
                                        <?php
                                            if(!isset($_SESSION['staff']))
                                            {
                                        ?>
                                        <button class="btn btn-danger btn-sm" id="selectDel" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        <?php
                                            }
                                        ?>

                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">

                                <form method="post">

                                <div class="tab-content">
                                    <div id="approved" class="tab-pane active in">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <?php
                                                if(!isset($_SESSION['staff']))
                                                {
                                                ?>
                                                <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                                <?php
                                                    }
                                                ?>
                                                <th>Resident</th>
                                                <th>Business Name</th>
                                                <th>Business Address</th>
                                                <th>Type of Business</th>
                                                <th>OR Number</th>
                                                <th>Amount</th>
                                                <th style="width: 40px !important;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            if(!isset($_SESSION['staff']))
                                            {

                                                $squery = mysqli_query($con, "SELECT *,r.paddress as barangay,p.id as pid FROM tblpermit p left join tblofficial r on r.id = p.recorderid where recorderid = '".$_SESSION['userid']."'") or die('Error: ' . mysqli_error($con));
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                        <td>'.$row['resilname'].', '.$row['resifname'].' '.$row['resimname'].'</td>
                                                        <td>'.$row['businessName'].'</td>
                                                        <td>'.$row['businessAddress'].'</td>
                                                        <td>'.$row['typeOfBusiness'].'</td>
                                                        <td>'.$row['orNo'].'</td>
                                                        <td>₱ '.number_format($row['samount'],2).'</td>
                                                        <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button>

                                                        <a target="_blank" href="generate.php?resident='.$row['pid'].'&permit='.$row['businessName'].'&barangayName='.$row['barangay'].'&businessAddress='.$row['businessAddress'].'&recordDate='.$row['dateRecorded'].'&qrdir='.$row['qrdir'].
                                                        '&val='.base64_encode($row['businessName'].'|'.$row['resilname'].', '.$row['resifname'].' '.$row['resimname'].'|'.$row['dateRecorded']).'" onclick="location.generate.php();" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Generate</a></td>
                                                        </tr>
                                                        ';


                                                    include "edit_modal.php";
                                                }
                                            }
                                            else{
                                                $squery = mysqli_query($con, "SELECT * FROM tblpermit where status = 'Approved'") or die('Error: ' . mysqli_error($con));
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['resilname'].', '.$row['resifname'].' '.$row['resimname'].'</td>
                                                        <td>'.$row['businessName'].'</td>
                                                        <td>'.$row['businessAddress'].'</td>
                                                        <td>'.$row['typeOfBusiness'].'</td>
                                                        <td>'.$row['orNo'].'</td>
                                                        <td>₱ '.number_format($row['samount'],2).'</td>
                                                        <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>

                                                        <a target="_blank" href="generate.php onclick="location.generate.php();" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Generate</a></td>


                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>

                                    </div>

                                    <?php include "../deleteModal.php"; ?>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <?php include "../edit_notif.php"; ?>

                            <?php include "../added_notif.php"; ?>

                            <?php include "../delete_notif.php"; ?>

                            <?php include "add_modal.php"; ?>

                            <?php include "function.php"; ?>


                    </div>
                    <?php
                    }
                    else
                    {
                    ?>

                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#reqModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Request Permit</button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">

                                <ul class="nav nav-tabs" id="myTab">
                                      <li class="active"><a data-target="#new" data-toggle="tab">New</a></li>
                                      <li><a data-target="#approved" data-toggle="tab">Approved</a></li>
                                      <li><a data-target="#disapproved" data-toggle="tab">Disapproved</a></li>
                                </ul>

                                <form method="post">

                                <div class="tab-content">
                                    <div id="new" class="tab-pane active in">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Business Name</th>
                                                <th>Business Address</th>
                                                <th>Type of Business</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT * FROM tblpermit where status = 'New' ") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery) > 0)
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['businessName'].'</td>
                                                        <td>'.$row['businessAddress'].'</td>
                                                        <td>'.$row['typeOfBusiness'].'</td>
                                                    </tr>
                                                    ';
                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>

                                    <div id="approved" class="tab-pane">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Business Name</th>
                                                <th>Business Address</th>
                                                <th>Type of Business</th>
                                                <th>OR Number</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT * FROM tblpermit where status = 'Approved'  ") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery) > 0)
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['businessName'].'</td>
                                                        <td>'.$row['businessAddress'].'</td>
                                                        <td>'.$row['typeOfBusiness'].'</td>
                                                        <td>'.$row['orNo'].'</td>
                                                        <td>₱ '.number_format($row['samount'],2).'</td>
                                                    </tr>
                                                    ';
                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>

                                    <div id="disapproved" class="tab-pane">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Business Name</th>
                                                <th>Business Address</th>
                                                <th>Type of Business</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT * FROM tblpermit and status = 'Disapproved'  ") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery) > 0)
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['businessName'].'</td>
                                                        <td>'.$row['businessAddress'].'</td>
                                                        <td>'.$row['typeOfBusiness'].'</td>
                                                    </tr>
                                                    ';
                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>


                                    <?php include "req_modal.php";?>
                                    <?php include "function.php";?>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                    </div>   <!-- /.row -->

                    <?php
                    }
                    ?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php }
        include "../footer.php"; ?>
<script type="text/javascript">
    <?php
    if(!isset($_SESSION['staff']))
    {
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,7 ] } ],"aaSorting": []
            });
            $("#table1").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,4 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php
    }
    else
    {
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 6 ] } ],"aaSorting": []
            });
            $("#table1").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 3 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php
    }
    ?>

$(document).ready(function(){
    $('#selectDel').prop("disabled", true);
    $('tbody').click(function () {

if ($('.chk_delete:checked').length >= 1) { 
    console.log("False");
    $('#selectDel').prop("disabled", false);
    }
else {
    console.log("True");
    $('#selectDel').prop("disabled", true);
} 

});

});
</script>
    </body>
</html>
