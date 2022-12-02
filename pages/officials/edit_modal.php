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
                <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Country:</label>
                            <input name="txteditcountry" class="form-control input-sm" type="text" value="Philippines" placeholder="Country"/ readOnly>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Province:</label>
                            <input name="txteditprovince" class="form-control input-sm" type="text" value="Nueva Ecija" placeholder="Province"/ readOnly>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Municipality:</label>
                            <input name="txteditmuni" class="form-control input-sm" type="text" value="Sta Rosa" placeholder="City/Municipality"/ readOnly>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Purok #:</label>
                            <select name="txteditpurok" class="form-select form-control" required>
                                        <option selected value="'.$row['purok'].'" >Purok '.$row['purok'].'</option>
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
                            <select name="txteditbarangay" class="form-select form-control" required>
                                        <option selected value="'.$row['paddress'].'" >'.$row['paddress'].'</option>
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
                    <input name="txt_old_pass" class="form-control input-sm" type="hidden" value="'.$row['password'].'" hidden/>
                    <div class="form-group col-md-6 " style="margin-top: 35px;">
                        <input name="txt_edit_pass" type="checkbox" style="float: left;>">
                        <div style="margin-left: 25px; font-weight:bold;">
                            Reset Password
                        </div>
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
