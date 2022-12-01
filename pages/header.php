  <?php

   echo  '<header class="header">
            <a href="#" class="logo">
                Sta Rosa Tracking System
                <img src="../../Picture/starosaico.png" style="height:100px; width:100px;"/>
        </header>'; ?>


         <div id="editProfileModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Change Account</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                        <?php
                        if($_SESSION['role'] == "Administrator"){
                            $user = mysqli_query($con,"SELECT * from tbluser where id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <input name="txt_username" id="txt_username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  value="'.$row['password'].'"/>
                                    </div>';
                            }
                        }
                        elseif($_SESSION['role'] == "Zone Leader"){
                            $user = mysqli_query($con,"SELECT * from tblzone where id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <input name="txt_username" id="txt_username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  value="'.$row['password'].'"/>
                                    </div>';
                            }
                        }
                        elseif($_SESSION['role'] == "Staff"){
                            $user = mysqli_query($con,"SELECT * from tblstaff where id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <input name="txt_username" id="txt_username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  value="'.$row['password'].'"/>
                                    </div>';
                            }
                        }
                        ?>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" id="btn_saveeditProfile" name="btn_saveeditProfile" value="Save"/>
                    </div>
                </div>
              </div>
              </form>
            </div>


            <?php
            if(isset($_POST['btn_saveeditProfile'])){
                $username = $_POST['txt_username'];
                $password = $_POST['txt_password'];

                if($_SESSION['role'] == "Administrator"){
                    $updadmin = mysqli_query($con,"UPDATE tbluser set username = '$username', password = '$password' where id = '".$_SESSION['userid']."' ");
                    if($updadmin == true){
                        header ("location: ".$_SERVER['REQUEST_URI']);
                    }
                }
                elseif($_SESSION['role'] == "Zone Leader"){
                    $updzone = mysqli_query($con,"UPDATE tblzone set username = '$username', password = '$password' where id = '".$_SESSION['userid']."' ");
                    if($updzone == true){
                        header ("location: ".$_SERVER['REQUEST_URI']);
                    }
                }
                elseif($_SESSION['role'] == "Staff"){
                    $updstaff = mysqli_query($con,"UPDATE tblstaff set username = '$username', password = '$password' where id = '".$_SESSION['userid']."' ");
                    if($updstaff == true){
                        header ("location: ".$_SERVER['REQUEST_URI']);
                    }
                }
            }

            ?>
