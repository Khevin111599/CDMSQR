<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<br/><center><img src="../Picture/sta_rosa.png" height="180" width="180" ></center><br/><br/>

<?php include "../pages/connection.php";

$qrNo = $_GET['qrcode'];
$formKey = substr($qrNo, 0, 2);
$orNo = substr($qrNo, 2);
if($formKey == 'BP'){
    $sql = "SELECT * FROM tblpermit WHERE orNo='$orNo'";
    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
        echo '
        <div class="row">
    <div class="col-md-12" style="padding-left:30px; padding-right:30px;">
        <div class="form-group">
            <label>Doc #:</label>
            <input name="ddl_resident" class="form-control input-sm" type="text" value="'. $row["orNo"].'" placeholder="Doc #" readonly/>
        </div>
        <div class="form-group">
            <label>Doc Name:</label>
            <input name="txt_busname" class="form-control input-sm" type="text" value="'.$row["resilname"].', '.$row["resifname"].' '.$row["resimname"].'" placeholder="Doc Name" readonly/>
        </div>
        <div class="form-group">
            <label>Issued By:</label>
            <input name="txt_busadd" class="form-control input-sm" type="text" value="'.$row["recordedBy"].'" placeholder="Issued By" readonly/>
        </div>
        <div class="form-group">
            <label>Date Issued:</label>
            <input name="txt_ornum" class="form-control input-sm" type="text" value="'.$row["dateRecorded"].'" placeholder="Date Issued" readonly/>
        </div>
        <div class="form-group">
            <label>Status:</label>
            <input name="txt_amount" class="form-control input-sm" type="text" value="'.$row["status"].'" placeholder="Status" readonly/>
        </div>
    </div>
</div> ';
}
}elseif($formKey == 'CL'){
    $sql = "SELECT * FROM tblclearance WHERE clearanceNo='$orNo'";
    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
        echo '
        <div class="row">
    <div class="col-md-12" style="padding-left:30px; padding-right:30px;">
        <div class="form-group">
            <label>Doc #:</label>
            <input name="ddl_resident" class="form-control input-sm" type="text" value="'. $row["clearanceNo"].'" placeholder="Doc #" readonly/>
        </div>
        <div class="form-group">
            <label>Doc Name:</label>
            <input name="txt_busname" class="form-control input-sm" type="text" value="'.$row["resilname"].', '.$row["resifname"].' '.$row["resimname"].'" placeholder="Doc Name" readonly/>
        </div>
        <div class="form-group">
            <label>Issued By:</label>
            <input name="txt_busadd" class="form-control input-sm" type="text" value="'.$row["recordedBy"].'" placeholder="Issued By" readonly/>
        </div>
        <div class="form-group">
            <label>Date Issued:</label>
            <input name="txt_ornum" class="form-control input-sm" type="text" value="'.$row["dateRecorded"].'" placeholder="Date Issued" readonly/>
        </div>
        <div class="form-group">
            <label>Status:</label>
            <input name="txt_amount" class="form-control input-sm" type="text" value="'.$row["status"].'" placeholder="Status" readonly/>
        </div>
    </div>
</div> ';
}
}

?>

