<?php
if(isset($_POST['uname'])){
	session_start();
  include 'dbConn.php';


  foreach ($_SESSION as $key => $value) {


    if($_SESSION[$key] == $_POST[$key] && $key!='uid')
    {
      echo 'Nothing Been chANGED<br>';
    }
    else if($key!='uid'){
      $qr = 'update user set '.$key.' = "'.$_POST[$key].'" where email ="'.$_SESSION['email'].'"';
      $result = mysqli_query($conn,$qr);
      $_SESSION[$key]=$_POST[$key];
    }
  }
header("location:http://localhost/myfirstTp/");



 



}
?>

<div class="modal" id="editPro" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Please Edit Your Details Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form action='partials/editPro.php' method="post">
        <label for="staticEmail" class="col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="text" name="uname" value=<?php echo $_SESSION['uname']?> class="form-control" id="staticEmail">
    </div>

    <label for="staticEmail" class="col-form-label">Blood Group</label>
    <div class="col-sm-10">
    <input type="text" name="bloodgroup" value=<?php echo $_SESSION['bloodgroup']?> class="form-control" id="staticEmail">
    </div>


    <label for="staticEmail" class="col-form-label">Age</label>
    <div class="col-sm-10">
    <input type="number" name="age" value=<?php echo $_SESSION['age']?> min='18' max='50' class="form-control" id="staticEmail">
    </div>

    
    <label for="staticEmail" class="col-form-label">Gender</label>
    <div class="col-sm-10">
    <input type="text" name="gender" value=<?php echo $_SESSION['gender']?> min='18' max='50' class="form-control" id="staticEmail">
    </div>


    <label for="staticEmail" class="col-form-label">Contact</label>
    <div class="col-sm-10">
    <input type="text" name='contact' value=<?php echo $_SESSION['contact']?> class="form-control" id="staticEmail">
    </div>

    <label for="staticEmail" class="col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="text" name='email' value=<?php echo $_SESSION['email']?> class="form-control" id="staticEmail">
    </div>




    

      </div>
      <div class="modal-footer">
            <button class="btn btn-danger my-4">Submit</button>
          </form>
      </div>
    </div>
  </div>
</div>
