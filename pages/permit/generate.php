<!DOCTYPE html>
<html id="permit">
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 2mm; }
</style>
    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../index.php");
    }
    else
    {
    ob_start();

    include('../head_css.php'); ?>
    <body class="skin-black" >
        <!-- header logo: style can be found in header.less -->
        <?php

        include "../connection.php";
        ?>
        <div class="col-xs-4 col-sm-6 col-md-3" style="background: white; margin-right:0px;">
            <center><image src="../../Picture/starosaico.png" style="width:75%;height:150px;"/></center>
        </div>
        <div class="pull-left" style="font-size: 16px; margin-left: 30px;"><b><center>
          <br> <br>
            Republic of the Philippines<br>
            Municipality of Santa Rosa<br>
            Province of Nueva Ecija<br>
            BARANGAY <?php echo $_GET['barangayName'] ?><br>
            <br></b></center> <br> <br> <br>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-8" style="" >
            <div style=" background: black;" >

                <div class="col-xs-12 col-sm-5 col-md-8" style="background: white;  ">


                    <div class="col-xs-12 col-md-12">
                        <p class="text-center" style="font-size: 20px; font-size:bold;">OFFICE OF THE BARANGAY CAPTAIN<br><b style="font-size: 28px;">BUSINESS PERMIT</b></p><br>
                        <p class = "text-center" style="font-size: 20px;">
                            <?php echo $_GET['permit'] ?>
                    </p>
                    <p class = "text-center" style="font-size: 1px;">_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>
                        <p class = "text-center" style="font-size: 15px;">Business Name:</p>
                        <p class = "text-center" style="font-size: 20px;">
                            <?php echo $_GET['businessAddress'] ?>
                        </p>
                        <p class = "text-center" style="font-size: 1px;">_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>
                        <p class = "text-center" style="font-size: 15px;">Business Location:</p>
                        <p class = "text-center" style="font-size: 12px; font-style:italic;">Issued this <?php echo $_GET['recordDate'] ?>, at Barangay <?php echo $_GET['barangayName'] ?>, Santa Rosa, Nueva Ecija</p>


                    </div>
                    <div class="col-md-5 col-xs-4" style="float:left;margin-top: -1px;">
                    <br>
                    <image src='<?php echo $_GET["qrdir"] ?>' style="width:75%;height:150px;"/>
                    </div>
                    <div class="col-md-5 col-xs-4" style="float:right;margin-top: -160px;">
                    	<br><br><br>
                    	<br><br><br>
                    	<br><br><br>
                        <div style="height:100px; width:140px; border: 1px solid black;">
                            <br><br>
                            <center><span style="text-align: center; line-height: 160px;">Dry Seal</span></center>
                    </div>
                </div>
                <div class="col-xs-offset-6 col-xs-5 col-md-offset-6 col-md-4" ><br><br><br>
                    <?php
                    $qry = mysqli_query($con,"SELECT * from tblofficial");
                    while($row=mysqli_fetch_array($qry)){
                        if($row['sPosition'] == "Captain"){
                            echo '
                            <p>
                            <b style="font-size:18px;">'.strtoupper($row['completeName']).'<br>
                            <span style=" text-align: center;">Punong Barangay</span></b>
                            </p>
                            ';
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
    <button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#permit')">Print</button>
    </body>
    <?php
    }
    ?>


    <script>
         function PrintElem(elem)
    {
        window.print();
    }

    function Popup(data)
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body class="skin-black" >');
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden'
        printButton.style.visibility = 'visible';
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();

        printButton.style.visibility = 'visible';
        mywindow.close();

        return true;
    }
    </script>
</html>
