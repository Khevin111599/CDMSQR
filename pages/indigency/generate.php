<!DOCTYPE html>
<html id="clearance">
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 4mm; }
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
    $_SESSION['clr'] = $_GET['clearance'];
    include('../head_css.php'); ?>
    <body class="skin-black" >
        <!-- header logo: style can be found in header.less -->
        <?php

        include "../connection.php";
        ?>
        <div class="col-xs-4 col-sm-6 col-md-3" style="background: white; margin-right:0px;">
            <center><image src="../../Picture/starosaico.png" style="width:75%;height:150px;"/></center>
        </div>
        <div style="font-size: 16px; margin-left: 0px; margin-right:250px;"><b><center>
          <br> <br>
            Republic of the Philippines<br>
            Municipality of Santa Rosa<br>
            Province of Nueva Ecija<br>
            BARANGAY <?php echo $_GET['barangayName'] ?><br>
            <br></b></center> <br> <br> <br>


        </div>
        <div class="col-xs-12 col-sm-6 col-md-8">
            <div style=" background: black;" >

                <div class="col-xs-12 col-sm-5 col-md-9" style="background: white;  ">


                    <div class="col-xs-12 col-md-12" style="margin-right:0px;">
                      <p class="text-center" style="font-size: 20px; font-size:bold;">OFFICE OF THE BARANGAY CAPTAIN<br><b style="font-size: 28px;">BARANGAY CLEARANCE</b></p><br><br>
                      <p style="font-size: 18px;">TO WHOM IT MAY CONCERN:</p>
                      <p style="text-indent:40px;text-align: justify;">This is to certify that
                     <?php $qry1=mysqli_query($con,"SELECT * from tblclearance where id = '".$_GET['resident']."' and clearanceNo = '".$_GET['clearance']."'");
                              while($row1 = mysqli_fetch_array($qry1)){
                      echo '<b>'.$row1['resilname'].', '.$row1['resifname'].' '.$row1['resimname'].'</b>';
                      }
                      ?>
                   whose photo, signature and right thumb mark appear herein, is a resident of Barangay <?php echo $_GET['barangayName'] ?>, Santa Rosa, Nueva Ecija and that the person had requested a criminal check from this office following is/are our findings.</p>

                     <br>
                    </div>
                    <div class="col-md-5 col-xs-4" style="float:left;margin-top: -1px;">

                    <image src="<?php echo $_GET["qrdir"] ?>" style="width:75%;height:150px;"/>
                    </div>
                    <div class="col-md-5 col-xs-4" style="float:right;margin-top: -160px;">
                    	<br><br><br>
                    	<br><br><br>
                    	<br><br><br>
                        <div style="height:100px; width:140px; border: 1px solid black;">
                            <center><span style="text-align: center; line-height: 160px; "></span></center>
                        </div><br>
                        <p>Tax Payer's Signature</p>
                        <?php
                                echo '
                                <p>
                                <b style="font-size:18px;">'.strtoupper($_GET["cptname"]).'<br>
                                <span>Punong Barangay</span></b>
                                </p>
                                ';
                        ?>
                    </div>
                </div>

            </div>
        </div>
    <button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#clearance')">Print</button>
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
