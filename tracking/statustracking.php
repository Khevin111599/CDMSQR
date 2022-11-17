<?php include "../pages/connection.php";

$orNo = $_GET['qrcode'];

$sql = "SELECT * FROM tblpermit WHERE orNo='$orNo'";
$result = mysqli_query($con, $sql);
if ($result->num_rows > 0) {
$row = mysqli_fetch_assoc($result);

} else {
echo "Error, Please try again.";
}
?>
 <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 	<br/><Center><img src="../Picture/sta_rosa.png" height="180" width="180" ></center><br/><br/>
<div class="row">
    <div class="col-md-12" style="padding-left:30px; padding-right:30px;">
        <div class="form-group">
            <label>Doc #:</label>
            <input name="ddl_resident" class="form-control input-sm" type="text" value="<?php echo $row['orNo']; ?>" placeholder="Doc #" readonly/>
        </div>
        <div class="form-group">
            <label>Doc Name:</label>
            <input name="txt_busname" class="form-control input-sm" type="text" value="<?php echo $row['residentname']; ?>" placeholder="Doc Name" readonly/>
        </div>
        <div class="form-group">
            <label>Issued By:</label>
            <input name="txt_busadd" class="form-control input-sm" type="text" value="<?php echo $row['recordedBy']; ?>" placeholder="Issued By" readonly/>
        </div>
        <div class="form-group">
            <label>Date Issued:</label>
            <input name="txt_ornum" class="form-control input-sm" type="text" value="<?php echo $row['dateRecorded']; ?>" placeholder="Date Issued" readonly/>
        </div>
        <div class="form-group">
            <label>Status:</label>
            <input name="txt_amount" class="form-control input-sm" type="text" value="<?php echo $row['status']; ?>" placeholder="Status" readonly/>
        </div>
    </div>
</div>
