<?php echo '<div id="approveModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:500px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Business Permit</h4>
        </div>

        <div class="modal-body">
        <h4>Are you sure you want to Approve this permit?</h4>
        <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id" style="visibility: hidden/>
        <input name="txt_edit_busname" class="form-control input-sm" type="text" value="'.$row['businessName'].'" style="visibility: hidden"/>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_approve" value="Yes"/>
        </div>
    </div>
  </div>
  </div>
</form>
</div>';?>

<?php echo '<div id="disapproveModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:500px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Business Permit</h4>
        </div>
        <div class="modal-body">
        <h4>Are you sure you want to Deny this permit?</h4>
        <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id" style="visibility: hidden/>
        <input name="txt_edit_busname" class="form-control input-sm" type="text" value="'.$row['businessName'].'" style="visibility: hidden"/>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_disapprove" value="Yes"/>
        </div>
    </div>
  </div>
  </div>
</form>
</div>';?>
