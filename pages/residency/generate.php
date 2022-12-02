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
/**    $_SESSION['clr'] = $_GET['clearance']; */
    include('../head_css.php'); ?>
    <body class="skin-black" >
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../connection.php";
        ?>
       
        <div class="col-xs-12 col-sm-6 col-md-8">
            <div style=" background: black;" >
                <div class="col-xs-4 col-sm-6 col-md-3" style="background: white; margin-right:0px;">
                    <center><image src="../../Picture/Sta.Teresita.png" style="width:75%;height:150px;"/></center>
                </div>
                <div class="col-xs-7 col-sm-5 col-md-8" style="background: white;  ">
                    <div class="pull-left" style="font-size: 16px; margin-left: 100px;"><b><center>
                    	<br> <br>
                        Republic of the Philippines<br>
                        Municipality of Santa Rosa<br>
                        Province of Nueva Ecija<br>
                        BARANGAY <?php echo $_GET['paddress'];?><br>
                        <br></b></center> <br> <br> <br>
                    </div>
                    
                    <div class="col-xs-12 col-md-12">                        
                        <p class="text-center" style="font-size: 20px; font-size:bold;">OFFICE OF THE BARANGAY CAPTAIN<br><b style="font-size: 28px;">BARANGAY RESIDENCY</b></p><br><br>
                        <p style="font-size: 18px;">TO WHOM IT MAY CONCERN:</p>
                        <p style="text-indent:40px;text-align: justify;">This is to certify that
                       <?php $qry1=mysqli_query($con,"SELECT * from tblresidency where residencyNo = '".$_GET['residency']."' and residencyNo = '".$_GET['residency']."'");
                                while($row1 = mysqli_fetch_array($qry1)){
                        echo '<b>'.$row1['residentname'].'</b>';
                        }
                        ?>
                     of legal age, married, Filipino citizen, whose specimen signature appears below, is a
                    <b>PERMANENT RESIDENT</b>
                    of this Barangay <?php echo $_GET['paddress'];?>, Santa Rosa, Nueva Ecija..</p>
                    <br> &nbsp &nbsp &nbsp &nbsp &nbsp
                     Based on records of this office, she has been residing at Barangay Sta,Teresita, Santa Rosa, Nueva Ecija.
                     <br> &nbsp &nbsp &nbsp &nbsp &nbsp
                     This
                    <b>CERTIFICATION</b>
                    is being issued upon the request of the above-namedperson for whatever legal purpose it may serve.
                    <br> &nbsp &nbsp &nbsp &nbsp &nbsp
                    Issued this __
                    day of __________, ____ at Barangay<?php echo $_GET['paddress'];?>, Santa Rosa, Nueva Ecija, Philippines.
  
                    </div>  

                    <div class="col-md-5 col-xs-4" style="float:right;margin-top: -160px;">
                    	<br><br><br>
                    	<br><br><br>
                    	<br><br><br>
                        
                <div class="col-xs-offset-6 col-xs-5 col-md-offset-6 col-md-4" ><br><br><br>
                    <?php
                        echo '
                            <p>
                            <b style="font-size:18px;">'.$_GET['cptname'].'<br>
                            <span style=" text-align: center;">Punong Barangay</span></b>
                            </p>
                            ';
                    ?>
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