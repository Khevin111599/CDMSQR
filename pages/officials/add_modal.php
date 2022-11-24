<!-- ========================= MODAL ======================= -->
    <div id="addCourseModal" class="modal fade">
    <form method="post">
        <div class="modal-dialog modal-sm" style="width:800px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Add User</h4>
        </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="form-group" hidden>
                        <label>Position:</label>
                        <input name="ddl_pos" class="form-control input-sm" type="text" value="Secretary" readonly>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label> First Name:</label>
                            <input name="txt_fname" class="form-control input-sm" type="text" placeholder="Firstname"/ required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Middle Name:</label>
                            <input name="txt_mname" class="form-control input-sm" type="text" placeholder="Middlename"/ required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Last Name:</label>
                            <input name="txt_lname" class="form-control input-sm" type="text" placeholder="Lastname"/ required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input name="txt_address" class="form-control input-sm" type="text" placeholder="Address"/ required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Capt. First Name:</label>
                            <input name="txt_cptfname" class="form-control input-sm" type="text" placeholder="Capt. First Name:"/ required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Capt. Middle Name:</label>
                            <input name="txt_cptmname" class="form-control input-sm" type="text" placeholder="Capt. Middle Name:"/ required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Capt. Last Name:</label>
                            <input name="txt_cptlname" class="form-control input-sm" type="text" placeholder="Capt. Last Name:"/ required>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label>Contact #:</label>
                            <input name="txt_contact" class="form-control input-sm" type="number" onkeydown="return event.keyCode !== 69" placeholder="Contact #"/ required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email Address:</label>
                            <input name="txt_emailadd" class="form-control input-sm" type="email" placeholder="Email Address"/ required>
                        </div>
                    </div>
                    <div class="form-row" hidden>
                        <div class="form-group col-md-6">
                            <label>Username</label>
                            <input id="txt_uname" name="txt_uname" class="form-control input-sm" type="text" placeholder="Username"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input name="txt_pass" class="form-control input-sm" type="text" placeholder="Password"/>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_add" value="Add User"/>
        </div>
    </div>
        </div>
        </form>
    </div>


<script type="text/javascript">
$(document).ready(function(){
$('input[name="txt_sterm"]').change(function(){
    var startterm = document.getElementById("txt_sterm").value;
    console.log(startterm);
        document.getElementsByName("txt_eterm")[0].setAttribute('min', startterm);
});
});


</script>
