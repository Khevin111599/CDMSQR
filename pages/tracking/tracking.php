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
          if($_SESSION['role'] == "Mayor Secretary")
          {
            ?>

            <div class="row">
              <!-- left column -->
              <div class="box">
                <div class="box-header">
                  <div style="padding:10px;">
                    <?php
                    if(!isset($_SESSION['staff']))
                    {
                      ?>
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
                              <th>Status</th>
                              <th style="width: 40px !important;">Option</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php

                            if(!isset($_SESSION['staff']))
                            {

                              $squery = mysqli_query($con, "SELECT * FROM tblpermit") or die('Error: ' . mysqli_error($con));
                              while($row = mysqli_fetch_array($squery))
                              {
                                echo '
                                <tr>
                                <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                <td>'.$row['resilname'].', '.$row['resifname'].' '.$row['resimname'].'</td>
                                <td>'.$row['businessName'].'</td>
                                <td>'.$row['businessAddress'].'</td>
                                <td>'.$row['typeOfBusiness'].'</td>
                                <td>'.$row['orNo'].'</td>
                                <td>'.$row['status'].'</td>
                                <td><button class="btn btn-primary btn-sm" data-target="#approveModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Approve</button>
                                
                                <button class="btn btn-danger btn-sm" data-target="#disapproveModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Disapprove</button>
                                </tr>
                                ';
                                include "decision_modal.php";
                              }
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>

                    </div>


                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <?php include "../edit_notif.php"; ?>

              <?php include "../added_notif.php"; ?>

              <?php include "../delete_notif.php"; ?>


              <?php include "function.php"; ?>


            </div>
            <?php
          }
          ?>
          <?php
          if($_SESSION['role'] == "Secretary")
          {
            ?>

            <div class="row">
              <!-- left column -->
              <div class="box">
                <div class="box-header">
                  <div style="padding:10px;">
                    <?php
                    if(!isset($_SESSION['staff']))
                    {
                      ?>
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
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php

                            if(!isset($_SESSION['staff']))
                            {

                              $squery = mysqli_query($con, "SELECT * FROM tblpermit where recorderid = '".$_SESSION['brgyid']."'") or die('Error: ' . mysqli_error($con));
                              while($row = mysqli_fetch_array($squery))
                              {
                                echo '
                                <tr>
                                <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                <td>'.$row['resilname'].', '.$row['resifname'].' '.$row['resimname'].'</td>
                                <td>'.$row['businessName'].'</td>
                                <td>'.$row['businessAddress'].'</td>
                                <td>'.$row['typeOfBusiness'].'</td>
                                <td>'.$row['orNo'].'</td>
                                <td>'.$row['status'].'</td>
                                </tr>
                                ';
                                include "decision_modal.php";
                              }
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>

                    </div>


                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <?php include "../edit_notif.php"; ?>

              <?php include "../added_notif.php"; ?>

              <?php include "../delete_notif.php"; ?>


              <?php include "function.php"; ?>


            </div>
            <?php
          }
          ?>
          <?php
          if($_SESSION['role'] == "Administrator")
          {
            ?>

            <div class="row">
              <!-- left column -->
              <div class="box">
                <div class="box-header">
                  <div style="padding:10px;">
                    <?php
                    if(!isset($_SESSION['staff']))
                    {
                      ?>
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
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php

                            if(!isset($_SESSION['staff']))
                            {

                              $squery = mysqli_query($con, "SELECT * FROM tblpermit") or die('Error: ' . mysqli_error($con));
                              while($row = mysqli_fetch_array($squery))
                              {
                                echo '
                                <tr>
                                <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                <td>'.$row['resilname'].', '.$row['resifname'].' '.$row['resimname'].'</td>
                                <td>'.$row['businessName'].'</td>
                                <td>'.$row['businessAddress'].'</td>
                                <td>'.$row['typeOfBusiness'].'</td>
                                <td>'.$row['orNo'].'</td>
                                <td>'.$row['status'].'</td>
                                </tr>
                                ';
                                include "decision_modal.php";
                              }
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>

                    </div>


                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <?php include "../edit_notif.php"; ?>

              <?php include "../added_notif.php"; ?>

              <?php include "../delete_notif.php"; ?>


              <?php include "function.php"; ?>


            </div>
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
        "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,6 ] } ],"aaSorting": []
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
        "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 4 ] } ],"aaSorting": []
      });
      $("#table1").dataTable({
        "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 3 ] } ],"aaSorting": []
      });
      $(".select2").select2();
    });
    <?php
  }
  ?>
</script>
</body>
</html>
