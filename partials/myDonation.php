<?php
include 'dbConn.php';

$com_d = 0;
$incom_d = 0;
$qr1='select * from donation where uid="'.$_SESSION['uid'].'";';
$result1 = mysqli_query($conn,$qr1);
while($row=mysqli_fetch_assoc($result1)){
  if($row['status']!='Not'){
    $com_d=$com_d+1;
  }
  else{
    $incom_d=$incom_d+1;
  }
}

?>

<div class="modal" id="myDonation" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Your Donation Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <p>Your completed Donation Count: <strong><?php echo $com_d;?></strong><br>
      <p>Your pending Donation Count: <strong><?php echo $incom_d;?></strong>



    

      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">OK</button>
          </form>
      </div>
    </div>
  </div>
</div>
