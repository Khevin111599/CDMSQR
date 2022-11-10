<html style="background: url(Picture/bg.jpg); background-repeat: no-repeat; background-size:cover; ">
<title>About - Barangay Sta.Teresita MIS</title>
<link rel="shortcut icon" href="Icon/sta_rosa.png" />

<link href="About_Design/css/bootstrap.min.css" rel="stylesheet">
<link href="About_Design/vendor/css/dataTables.bootstrap.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="Css/homepage.css"> -->
<style type="text/css">
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 400px !important;
      min-height: 400px;
      margin: auto;
      text-align: center;
      font-family: arial;
      background-color: white;
    }
    .card:hover{
      border: solid 1px;
      background-color: #e9e9e9;
    }
    
    .title {
      color: grey;
      font-size: 18px;
    }
    .nav {
      background-color: #2e4a62;
      border: none;
      width: 100%;
      position:fixed;
      overflow: hidden;
      top: 0;
      left: 0;
      text-transform: uppercase;
      font-family: calibri;
    }
    .nav a {
          float: left;
      display: block;
      color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
    }
    .nav a:hover {
          background: #14aa6c;
          color: white;
    } 
    .nav a:active {
      background: #99c74b;
    }
</style>
<div class="nav">
    <a href="index.php">home</a>
    <a href="about.php">about</a>
</div>

<body style="
     background-color: transparent !important;">



    <div class="container" style="padding-top: 5em; padding-left: 15%;">


        <div class="col-sm-3 card ">
            <div style="padding:5px;">
                <img src="Picture/Sta.Teresita.png" alt="John" style="width:100% ">
            </div>
            <h4>MGMT. INFORMATION SYSTEM</h4>
            <p class="title">Bgy. Management Information System</p>
            <p>is a computerized information-processing system</p>
            <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#bmis">Read More</button></p>
        </div>
        <div class="col-sm-1"></div>
        <div class="card col-sm-3">
            <div style="padding:5px;">
                <img src="Picture/Sta.Teresita.png" alt="John" style="width:100% ">
            </div>
            <h4>MISSION AND VISION</h4>
            <p class="title">Mission and Vision of Sta.Teresita</p>
            <p>Mission: To achieve our vision, the sangguniang barangay of barangay Sta. Teresita...</p>
            <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mv">Read More</button></p>
        </div>

        <div class="col-sm-1"></div>
        <div class="card col-sm-3">
            <div style="padding:5px;">
                <img src="Picture/Sta.Teresita.png" alt="John" style="width:100% ">
            </div>
            <h4>Santa Rosa</h4>
            <p class="title">Municipal Profile</p>
            <p>REGION :  Central Luzon (Region III) : Nueva Ecija CONGRESSIONAL DISTRICT: 3RD MUNICIPALITY : Sta-Rosa ...</p>
            <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#inprofile">Read More</button></p>
        </div>
    </div>
    <!-- Modal -->
    <div id="bmis" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Barangay Management Information System</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <h1>
                            <font size="5" color="green">
                                <B>Barangay Management Information System</b> </font>
                        </h1>
                    </center>
                    <div>
                        <p><img src="Picture/Sta.Teresita.png" align="left"> &emsp; The Barangay Management Information System is a computerized information-processing system designed to support the activities, manages files and documents of company or organization.It
                            can provide up to date information of the residents with relatively little effort on the part of the user of the system and put a huge amount of information within convenient and comfortable read. Not mentioning the security
                            and integrity of the document, it also provides.
                            <Br><br>&emsp; The barangay officials will no longer have a hard time when it comes to organizing the data needed by the residents. it will help the barangay to solve the difficulty in retrieving large volume of residents information.
                            It makes things more convenient for the residents and reduces the number of visits in the barangay. &emsp; What will the BMIS achieve? To Address barangay efficiency issues and have a Satisfied or happier residents of the barangay.
                        </p>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal -->
    <div id="mv" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Mission and Vision</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <h1>
                            <font size="5" color="green"> <b>Mission and Vision</b></font>
                        </h1>
                        <h1>
                            <font size="5" color="green"><b>Mission</b></font>
                        </h1>
                        <p> To achieve our vision, the sangguniang barangay of barangay Sta. Teresita shall continuously pursue a dynamic and responsive approach towards the  complete development of human and economic resources.</p>

                        <h1>
                            <font size="5" color="green"><b>Vision</b></font>
                        </h1>
                        <p> We envision Barangay Sta. Teresita to become the model barangay of the country-self sufficient in its needs, progressive and ecological balanced in its efforts towards development. Barangay Sta. Teresita shall be the place where its constituency know that they are in safe, self-discciplined environment and that their general welfare and development is given utmost priority - simply stated, placed we can call home.</p>
                    </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal -->
    <div id="inprofile" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Municipal Profile</h4>
                </div>
                <div class="modal-body">
                    <h1>
                        <font size="5" color="green">
                            <B>Fact and Figures</b> </font>
                    </h1>
                    <center>
                        <img src="Picture/municipality.jpg" align="" width="500" style="border:1px solid;"></center>
                    <hr>
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <B>REGION</b> :</td>
                            <td> Central Luzon (Region III)</td>
                        </tr>
                        <tr>
                            <td>
                                <B>PROVINCE</b> :</td>
                            <td> Nueva Ecija</td>
                        </tr>
                        <tr>
                            <td>
                                <B>CONGRESSIONAL DISTRICT</b> :</td>
                            <td> 3rd</td>
                        </tr>
                        <tr>
                            <td>
                                <B>MUNICIPALITY</b> :</td>
                            <td> Sta-Rosa</td>
                        </tr>

                        <tr>
                            <td>
                                <B>Income Class</b> :</td>
                            <td> 1st Class</td>
                        </tr>

                        <tr>
                            <td>
                                <B>Meaning of its name </b> :</td>
                            <td> Santa Rosa was formerly called "Banga-banga", and was a barrio of Cabanatuan during the Spanish Regime. Banga-banga was renamed to "Santa Rosa", after a patron saint found inside an abandoned Spanish headquarter.</td>
                        </tr>

                        <tr>
                            <td>
                                <B> Land Area (2013)</b> :</td>
                            <td>147.15 km2 (56.81 sq mi)</td>
                        </tr>

                        <tr>
                            <td>
                                <B> Number of Barangay</b> :</td>
                            <td> 33 barangays</td>
                        </tr>

                        <tr>
                            <td>
                                <B> Postal code</b> :</td>
                            <td> 3101</td>
                        </tr>

                        <tr>
                            <td>
                                <B> Population (2020)</b> :</td>
                            <td> 75,649</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <script src="Resident_Profiling/jquery/jquery-3.3.1.min.js"></script>
    <script src="Resident_Profiling/js/bootstrap.min.js"></script>
    <script src="Resident_Profiling/vendor/js/jquery.dataTables.min.js"></script>
    <script src="Resident_Profiling/vendor/js/dataTables.bootstrap.min.js"></script>
</body>

</html>