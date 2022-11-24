<?php echo '<div id="editModal'.$row['pid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Clearance</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['pid'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Clearance #: </label>
                    <input name="txt_edit_cnum" class="form-control input-sm" type="text" value="'.$row['clearanceNo'].'" readOnly/>
                </div>
                <div class="form-group">
                    <label>First Name: </label>
                    <input name="txt_edit_fname" class="form-control input-sm" type="text" value="'.$row['resifname'].'"/>
                </div>
                <div class="form-group">
                    <label>Middle Name: </label>
                    <input name="txt_edit_mname" class="form-control input-sm" type="text" value="'.$row['resimname'].'"/>
                </div>
                <div class="form-group">
                    <label>Last Name: </label>
                    <input name="txt_edit_lname" class="form-control input-sm" type="text" value="'.$row['resilname'].'"/>
                </div>
                <div class="form-group">
                    <label>Findings : </label>
                    <input name="txt_edit_findings" class="form-control input-sm" type="text" value="'.$row['findings'].'" />
                </div>
                <div class="form-group">
                    <label>Purpose : </label>
                    <select name="txt_edit_purpose" class="form-select form-control" required>
                        <option selected value="'.$row['purpose'].'" >'.$row['purpose'].'</option>
                        <option value="Purpose 1">Purpose 1</option>
                        <option value="Purpose 2">Purpose 2</option>
                        <option value="Purpose 3">Purpose 3</option>
                    </select>
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
