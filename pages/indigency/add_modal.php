<?php
  $squery = mysqli_query($con, "SELECT id FROM tblindigency ORDER BY id DESC LIMIT 1");
  $result = mysqli_fetch_array($squery);
?>
<!-- ========================= MODAL ======================= -->
            <div id="addModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Indigency</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Indigency #:</label>
                                    <input name="txt_cnum" class="form-control input-sm" type="number" value="<?php echo $result['id'] + 1; ?>" placeholder="Clearance #"/ readOnly>
                                </div>
                                <div class="form-group">
                                    <label>Resident Name:</label>
                                    <input name="ddl_resident" class="form-control input-sm" type="text" placeholder="Resident Name" required/>
                                </div>
                                <div class="form-group">
                                    <label>Findings:</label>
                                    <input name="txt_findings" class="form-control input-sm" type="text" placeholder="Findings" required/>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_add" value="Add Clearance"/>
                    </div>
                </div>
              </div>
              </form>
            </div>
