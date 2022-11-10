<?php echo '<div id="viewModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:1000px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Barangay Overview</h4>
        </div>
        <div class="modal-body">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                    <div class="box">
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12"><br>
                          <div class="info-box">
                            <a href="../clearance/clearance.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>

                            <div class="info-box-content">
                              <span class="info-box-text">Total Clearance</span>
                              <span class="info-box-number">';
                                  $q = mysqli_query($con,"SELECT * from tblclearance where recorderid ='".$row['id']."'");
                                  $num_rows = mysqli_num_rows($q);
                                  echo $num_rows;
                            echo ' </span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12"><br>
                          <div class="info-box">
                            <a href="../permit/permit.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>

                            <div class="info-box-content">
                              <span class="info-box-text">Total Permit</span>
                              <span class="info-box-number">';
                                  $q = mysqli_query($con,"SELECT * from tblpermit where recorderid ='".$row['id']."'");
                                  $num_rows = mysqli_num_rows($q);
                                  echo $num_rows;
                            echo ' </span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12"><br>
                          <div class="info-box">
                            <a href="../blotter/blotter.php"><span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span></a>

                            <div class="info-box-content">
                              <span class="info-box-text">Total Indigency</span>
                              <span class="info-box-number">';
                                    $q = mysqli_query($con,"SELECT * from tblblotter");
                                    $num_rows = mysqli_num_rows($q);
                                    echo $num_rows;
                            echo ' </span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12"><br>
                          <div class="info-box">
                            <a href="../blotter/blotter.php"><span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span></a>

                            <div class="info-box-content">
                              <span class="info-box-text">Total Residency</span>
                              <span class="info-box-number">';
                                    $q = mysqli_query($con,"SELECT * from tblresidency where recorderid ='".$row['id']."'");
                                    $num_rows = mysqli_num_rows($q);
                                    echo $num_rows;
                            echo ' </span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                    </div><!-- /.box -->
            </div>   <!-- /.row -->
        </section>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Close"/>
        </div>
    </div>
  </div>
</form>
</div>';?>
