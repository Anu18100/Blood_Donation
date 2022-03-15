<?php
include 'dbConn.php';

$com_r = 0;
$incom_r = 0;
$qr1='select * from request where uid="'.$_SESSION['uid'].'";';
$result1 = mysqli_query($conn,$qr1);
while($row=mysqli_fetch_assoc($result1)){
  if($row['status']!='Not'){
    $com_r=$com_r+1;
  }
  else{
    $incom_r=$incom_r+1;
  }
}

?>

<div class="modal" id="myRequest" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Your Request Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <p>Your completed Request Count: <strong><?php echo $com_r;?></strong><br>
      <p>Your pending Request Count: <strong><?php echo $incom_r;?></strong>



    

      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">OK</button>
          </form>
      </div>
    </div>
  </div>
</div>
