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
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Country:</label>
                            <input name="txtcountry" class="form-control input-sm" type="text" value="Philippines" placeholder="Country"/ readOnly>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Province:</label>
                            <input name="txtprovince" class="form-control input-sm" type="text" value="Nueva Ecija" placeholder="Province"/ readOnly>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Municipality:</label>
                            <input name="txtmuni" class="form-control input-sm" type="text" value="Sta Rosa" placeholder="City/Municipality"/ readOnly>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Purok #:</label>
                            <select name="txtpurok" class="form-select form-control" required>
                                        <option selected value="" >-- Select Purok --</option>
                                        <option value="1">Purok 1</option>
                                        <option value="2">Purok 2</option>
                                        <option value="3">Purok 3</option>
                                        <option value="4">Purok 4</option>
                                        <option value="5">Purok 5</option>
                                        <option value="6">Purok 6</option>
                                        <option value="7">Purok 7</option>
                                        <option value="8">Purok 8</option>
                                        <option value="9">Purok 9</option>
                                        <option value="10">Purok 10</option>
                                    </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Barangay:</label>
                            <select name="txtbarangay" class="form-select form-control" required>
                                        <option selected value="" >-- Select Barangay --</option>
                                        <option value="Aguinaldo">Aguinaldo</option>
                                        <option value="Berang">Berang</option>
                                        <option value="Burgos">Burgos</option>
                                        <option value="Cojuangco">Cojuangco</option>
                                        <option value="Del Pillar">Del Pillar</option>
                                        <option value="Gomez">Gomez</option>
                                        <option value="Inspector">Inspector</option>
                                        <option value="Isla">Isla</option>
                                        <option value="La Fuente">La Fuente</option>
                                        <option value="Liwayway">Liwayway</option>
                                        <option value="Lourdes">Lourdes</option>
                                        <option value="Luna">Luna</option>
                                        <option value="Mabini">Mabini</option>
                                        <option value="Malacanang">Malacanang</option>
                                        <option value="Maliolio">Maliolio</option>
                                        <option value="Mapalad">Mapalad</option>
                                        <option value="Rajal Centro">Rajal Centro</option>
                                        <option value="Rajal Norte">Rajal Norte</option>
                                        <option value="Rajal Sur">Rajal Sur</option>
                                        <option value="Rizal">Rizal</option>
                                        <option value="San Gregorio">San Gregorio</option>
                                        <option value="San Isidro">San Isidro</option>
                                        <option value="San Josep">San Josep</option>
                                        <option value="San Mariano">San Mariano</option>
                                        <option value="San Pedro">San Pedro</option>
                                        <option value="Santa Teresita">Santa Teresita</option>
                                        <option value="Santo Rosario">Santo Rosario</option>
                                        <option value="Sapsap">Sapsap</option>
                                        <option value="Soledad">Soledad</option>
                                        <option value="Tagpos">Tagpos</option>
                                        <option value="Tramo Chua">Tramo Chua</option>
                                        <option value="Valenzuela">Valenzuela</option>
                                        <option value="Zamora">Zamora</option>
                                    </select>
                        </div>
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
