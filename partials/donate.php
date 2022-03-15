<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'dbConn.php';
  session_start();
   $qr1='insert into donation (uid) values ("'.$_SESSION['uid'].'")';
  $result1 = mysqli_query($conn,$qr1);
  if($result1){
    header("location:http://localhost/myfirstTp/");
  }

}
?>

<div class="modal" id="donation" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Please Check Your Details Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form action='partials/donate.php' method="post">
        <label for="staticEmail" class="col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="text" name="uname" disabled value=<?php echo $_SESSION['uname']?> class="form-control" id="staticEmail">
    </div>

    <label for="staticEmail" class="col-form-label">Blood Group</label>
    <div class="col-sm-10">
    <input type="text" name="bloodgroup" disabled value=<?php echo $_SESSION['bloodgroup']?> class="form-control" id="staticEmail">
    </div>


    <label for="staticEmail" class="col-form-label">Age</label>
    <div class="col-sm-10">
    <input type="number" name="age" disabled value=<?php echo $_SESSION['age']?> min='18' max='50' class="form-control" id="staticEmail">
    </div>

    
    <label for="staticEmail" class="col-form-label">Gender</label>
    <div class="col-sm-10">
    <input type="text" name="gender" disabled value=<?php echo $_SESSION['gender']?> min='18' max='50' class="form-control" id="staticEmail">
    </div>


    <label for="staticEmail" class="col-form-label">Contact</label>
    <div class="col-sm-10">
    <input type="text" name='contact' disabled value=<?php echo $_SESSION['contact']?> class="form-control" id="staticEmail">
    </div>

    <label for="staticEmail" class="col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="text" name='email' disabled value=<?php echo $_SESSION['email']?> class="form-control" id="staticEmail">
    </div>




    

      </div>
      <div class="modal-footer">
            <button class="btn btn-danger my-4">Submit</button>
          </form>
      </div>
    </div>
  </div>
</div>
