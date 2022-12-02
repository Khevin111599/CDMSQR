<!DOCTYPE html>
<html>

<?php
session_start();
if(!isset($_SESSION['role']))
{
  header("Location: ../../adminnav.php");
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
            User Accounts
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="box">
              <div class="box-header">
                <div style="padding:10px;">

                  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addCourseModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Account</button>

                  <?php
                  if(!isset($_SESSION['staff']))
                  {
                    ?>
                    <button class="btn btn-danger btn-sm" id="selectDel" data-toggle="modal" data-target="#deleteModal" id="btndelete"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    <?php
                  }
                  ?>

                </div>
              </div><!-- /.box-header -->
              <div class="box-body table-responsive">
                <form method="post">
                  <table id="table" class="table table-bordered table-striped" style="table-layout:fixed;">
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
                        <th>Position</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Barangay</th>
                        <th>Username</th>
                        <th style="width:80px;">Password</th>
                        <th>Captain</th>
                        <th style="width: 130px !important;">Option</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(!isset($_SESSION['staff']))
                      {

                        $squery = mysqli_query($con, "select * from tblofficial WHERE id > 1");
                        $sendNewSms = "document.getElementById('sendNewSms').disabled = !this.checked;";
                        while($row = mysqli_fetch_array($squery))
                        {
                          echo '
                          <tr>
                          <td><input type="checkbox" onchange="'.$sendNewSms.'" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'"  /></td>
                          <td>'.$row['sPosition'].'</td>
                          <td style="width:70px;"><image src="Official Images/'.basename($row['oimage']).'" style="width:60px;height:60px;"/></td>
                          <td>'.$row['lname'].', '.$row['fname'].' '.$row['mname'].'</td>
                          <td>'.$row['pcontact'].'</td>
                          <td>'.$row['paddress'].'</td>
                          <td>'.$row['username'].'</td>
                          <td style="overflow:hidden;">'.$row['password'].'</td>
                          <td>'.$row['cptlname'].', '.$row['cptfname'].' '.$row['cptmname'].'</td>
                          <td>
                          <button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>';

                          echo '</td>

                          </tr>
                          ';

                          include "edit_modal.php";
                          include "view_modal.php";
                        }

                      }
                      ?>
                    </tbody>
                  </table>

                  <?php include "../deleteModal.php"; ?>

                </form>
              </div><!-- /.box-body -->
            </div><!-- /.box -->

            <?php include "../duplicate_error.php"; ?>
            <?php include "../edit_notif.php"; ?>

            <?php include "../added_notif.php"; ?>

            <?php include "../delete_notif.php"; ?>

            <?php include "add_modal.php"; ?>

            <?php include "function.php"; ?>


          </div>   <!-- /.row -->
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
    });
    <?php
  }
  else{
    ?>
    $(function() {
      $("#table").dataTable({
        "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 6 ] } ],"aaSorting": []
      });
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
