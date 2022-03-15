<?php
include 'dbConn.php';


$qr1='select * from donation;';
$qr2='select * from user;';
$result1 = mysqli_query($conn,$qr1);
$result2 = mysqli_query($conn,$qr2);


?>

<div class="modal" id="donations" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Your Donation Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Age</th>
      <th scope="col">status</th>
    </tr>

    <?php
    while($row=mysqli_fetch_assoc($result1)){
    if($row['status']!='Not'){
    }
    else{
      while($row1=mysqli_fetch_assoc($result2))
      {
        if($row['uid']==$row1['uid']){
          echo '
      <tr>
      <td>'.$row1['uname'].'</td>
      <td>'.$row1['bloodgroup'].'</td>
      <td>'.$row1['age'].'</td>
      <td>'.$row['status'].'</td>
      </tr>';
        }
      }
      
    }
}
    ?>
  </thead>
  <tbody>
   
  </tbody>
</table>



    

      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">OK</button>
          </form>
      </div>
    </div>
  </div>
</div>
