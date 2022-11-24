<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:800px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Course Info</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group" hidden>
                    <label>Position: </label>
                    <input class="form-control input-sm" type="text" value="'.$row['sPosition'].'" readonly/>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>First Name: <span style="color:gray; font-size: 10px;"></span></label>
                        <input name="txt_edit_fname" class="form-control input-sm" type="text" value="'.$row['fname'].'"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Middle Name: <span style="color:gray; font-size: 10px;"></span></label>
                        <input name="txt_edit_mname" class="form-control input-sm" type="text" value="'.$row['mname'].'"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Last Name: <span style="color:gray; font-size: 10px;"></span></label>
                        <input name="txt_edit_lname" class="form-control input-sm" type="text" value="'.$row['lname'].'"/>
                    </div>
                </div>
                <div class="form-group">
                    <label>Address: </label>
                    <input name="txt_edit_address" class="form-control input-sm" type="text" value="'.$row['paddress'].'" />
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Capt. First Name: </label>
                        <input name="txt_edit_cptfname" class="form-control input-sm" type="text" value="'.$row['cptfname'].'" />
                    </div>
                    <div class="form-group col-md-4">
                        <label>Capt. Middle Name: </label>
                        <input name="txt_edit_cptmname" class="form-control input-sm" type="text" value="'.$row['cptmname'].'" />
                    </div>
                    <div class="form-group col-md-4">
                        <label>Capt. Last Name: </label>
                        <input name="txt_edit_cptlname" class="form-control input-sm" type="text" value="'.$row['cptlname'].'" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Contact #: </label>
                        <input name="txt_edit_pcontact" class="form-control input-sm" type="number" onkeydown="return event.keyCode !== 69" value="'.$row['pcontact'].'" />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email Add: </label>
                        <input name="txt_edit_pemail" class="form-control input-sm" type="text" value="'.$row['pemail'].'" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Username: </label>
                        <input name="txt_edit_uname" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Password: </label>
                        <input name="txt_edit_pass" class="form-control input-sm" type="text" value="'.$row['password'].'" />
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>
