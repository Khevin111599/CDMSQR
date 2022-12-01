<!-- ========================= MODAL ======================= -->
            <div id="addModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Change Password</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Old Password:</label>
                                    <input name="txtoldpass" class="form-control input-sm" type="password" placeholder="Old Password" required/>
                                </div>
                                <div class="form-group">
                                    <label>New Password:</label>
                                    <input name="txtnewpass" class="form-control input-sm" type="password" placeholder="New Password" required/>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password:</label>
                                    <input name="txtconpass" class="form-control input-sm" type="password" placeholder="Confirm Password" required/>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btnchangepass" value="Confirm"/>
                    </div>
                </div>
              </div>
              </form>
            </div>
