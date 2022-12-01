<!DOCTYPE html>
<html>

<?php
session_start();
if(!isset($_SESSION['role']))
{
  header("Location: ../../login.php");
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
      <?php include('../sidebar-left.php');?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <div class="form-group">
            <button class="btn btn-primary btn-sm" style="float:right;" data-target="#addModal" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Change Password</button>
          </div>
          <?php
          include 'changeModal.php';
          include 'function.php';
          include "../duplicate_error.php";
          include "../edit_notif.php";
          ?>
          

        </section>
  
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="box">
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12"><br>
              <div class="info-box">
                <a href="../clearance/clearance.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>

                <div class="info-box-content">
                  <span class="info-box-text">Total Clearance</span>
                  <span class="info-box-number">
                    <?php
                    if(($_SESSION['role'] == "Administrator")){
                      $q = mysqli_query($con,"SELECT * from tblclearance");
                      $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
                    }else{
                      $q = mysqli_query($con,"SELECT * from tblclearance where recorderid ='".$_SESSION['userid']."'");
                      $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
                    }

                    ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12"><br>
              <div class="info-box">
                <a href="../permit/permit.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>

                <div class="info-box-content">
                  <span class="info-box-text">Total Permit</span>
                  <span class="info-box-number">
                    <?php
                    if(($_SESSION['role'] == "Administrator")){
                      $q = mysqli_query($con,"SELECT * from tblpermit");
                      $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
                    }else{
                      $q = mysqli_query($con,"SELECT * from tblpermit where recorderid ='".$_SESSION['userid']."'");
                      $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
                    }

                    ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12"><br>
              <div class="info-box">
                <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span></a>

                <div class="info-box-content">
                  <span class="info-box-text">Total Indigency</span>
                  <span class="info-box-number">
                    <?php

                    $q = mysqli_query($con,"SELECT * from tblresident");
                    $num_rows = mysqli_num_rows($q);
                    echo $num_rows;
                    ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12"><br>
              <div class="info-box">
                <a href="../blotter/blotter.php"><span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span></a>

                <div class="info-box-content">
                  <span class="info-box-text">Total Residency</span>
                  <span class="info-box-number">
                    <?php
                    if(($_SESSION['role'] == "Administrator")){
                      $q = mysqli_query($con,"SELECT * from tblresidency");
                      $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
                    }else{
                      $q = mysqli_query($con,"SELECT * from tblresidency where recorderid ='".$_SESSION['userid']."'");
                      $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
                    }
                    ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          </div><!-- /.box -->
        </div>   <!-- /.row -->
      </section><!-- /.content -->
    </aside><!-- /.right-side -->
  </div><!-- ./wrapper -->
  <!-- jQuery 2.0.2 -->
<?php }
include "../footer.php"; ?>
<script type="text/javascript">
$(function() {
  $("#table").dataTable({
    "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
  });
});
</script>
</body>
</html>
