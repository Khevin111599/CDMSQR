<!-- ========================= MODAL ======================= -->
            <div id="addModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:800px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Permit Clearance</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>First Name:</label>
                                    <input name="ddl_resifname" class="form-control input-sm" type="text" placeholder="First Name"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Middle Name:</label>
                                    <input name="ddl_resimname" class="form-control input-sm" type="text" placeholder="Middle Name"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Last Name:</label>
                                    <input name="ddl_resilname" class="form-control input-sm" type="text" placeholder="Last Name"/>
                                </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Business Name:</label>
                                    <input name="txt_busname" class="form-control input-sm" type="text" placeholder="Business Name"/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Business Address:</label>
                                    <input name="txt_busadd" class="form-control input-sm" type="text" placeholder="Business Address"/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Type of Business:</label>
                                    <select name="ddl_tob" class="form-control input-sm" required>
                                        <option selected="" disabled="">-- Select Type of Business -- </option>
                                        <option value="Sari Sari Store">Sari Sari Store</option>
                                        <option value="Convenience Store">Convenience Store</option>
                                        <option value="Fruit Store">Fruit Store</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>OR Number:</label>
                                    <input name="txt_ornum" class="form-control input-sm" type="number" onkeydown="return event.keyCode !== 69" placeholder="OR Number" required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Amount:</label>
                                    <input name="txt_amount" class="form-control input-sm" type="number" onkeydown="return event.keyCode !== 69" placeholder="Amount" required/>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_add" value="Add Permit"/>
                    </div>
                </div>
              </div>
              </form>
            </div>
