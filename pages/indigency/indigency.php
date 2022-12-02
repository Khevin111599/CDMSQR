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
  <?php
    include "../connection.php";
  ?>
  <?php include('../header.php'); ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
      <?php include('../sidebar-left.php'); ?>
      <aside class="right-side">
        <section class="content-header">
          <h1>Barangay Indigency</h1>
        </section>
        <section class="content">
          <?php
          if(($_SESSION['role'] == "Administrator") || isset($_SESSION['staff']))
          {
            ?>
            <div class="row">
              <div class="box">
                <div class="box-header">
                  <div style="padding:10px;">
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal">
                      <i class="fa fa-user-plus" aria-hidden="true"></i> Add Indigency</button>
                    <?php
                    if(!isset($_SESSION['staff']))
                    {
                      ?>
                      <button class="btn btn-danger btn-sm" id="selectDel" data-toggle="modal" data-target="#deleteModal">
                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
                              <th>Indigency #</th>
                              <th>Resident Name</th>
                              <th>Findings</th>
                              <th style="width: 15% !important;">Option</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php

                            if(!isset($_SESSION['staff']))
                            {

                              $squery = mysqli_query($con, "SELECT * FROM tblindigency") or die('Error: ' . mysqli_error($con));
                              while($row = mysqli_fetch_array($squery))
                              {
                                echo '
                                <tr>
                                <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                <td>'.$row['residencyNo'].'</td>
                                <td>'.$row['residentname'].'</td>
                                <td>'.$row['findings'].'</td>
                                <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Edit</button>
                                <a target="_blank" href="generate.php?resident='.$row['id'].'&residency='.$row['residencyNo'].'&val='.base64_encode($row['residencyNo'].'|'.$row['residentname'].'|'.$row['dateRecorded']).'" onclick="location.generate.php();" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Generate</a></td>
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
              <?php include "../duplicate_error.php"; ?>
              <?php include "add_modal.php"; ?>
              <?php include "function.php"; ?>
            </div>   <!-- /.row -->
            <?php
          }
          elseif($_SESSION['role'] == "Secretary")
          {
            ?>
            <div class="row">
              <div class="box">
                <div class="box-header">
                  <div style="padding:10px;">
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Indigency</button>
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
                              <th>Indigency #</th>
                              <th>Resident Name</th>
                              <th>Findings</th>
                              <th style="width: 15% !important;">Option</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php

                            if(!isset($_SESSION['staff']))
                            {

                              $squery = mysqli_query($con, "SELECT * FROM tblindigency where recorderid = '".$_SESSION['userid']."'") or die('Error: ' . mysqli_error($con));
                              while($row = mysqli_fetch_array($squery))
                              {
                                echo '
                                <tr>
                                <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                <td>'.$row['residencyNo'].'</td>
                                <td>'.$row['residentName'].'</td>
                                <td>'.$row['findings'].'</td>
                                <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Edit</button>
                                <a target="_blank" href="generate.php?resident='.$row['id'].'&residency='.$row['residencyNo'].'&val='.base64_encode($row['residencyNo'].'|'.$row['residentName'].'|'.$row['dateRecorded']).'" onclick="location.generate.php();" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Generate</a></td>
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

              <?php include "../duplicate_error.php"; ?>

              <?php include "add_modal.php"; ?>

              <?php include "function.php"; ?>


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
        "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,4 ] } ],"aaSorting": []
      });
      $("#table1").dataTable({
        "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,3 ] } ],"aaSorting": []
      });
      $(".select2").select2();
    });
    <?php
  }
  else{
    ?>
    $(function() {
      $("#table").dataTable({
        "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 5 ] } ],"aaSorting": []
      });
      $("#table1").dataTable({
        "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 2 ] } ],"aaSorting": []
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
