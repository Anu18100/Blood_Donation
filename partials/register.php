<?php
if(isset($_POST['name'])){
session_start();
  include 'dbConn.php';
  $name=$_POST['name'];
  $bg=$_POST['bg'];
  $gen=$_POST['gen'];
  $cont=$_POST['cont'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $age=$_POST['age'];

   $qr = 'select * from user where email="'.$email.'";';


    $result = mysqli_query($conn,$qr);

    if(mysqli_num_rows($result)>0){
      $_SESSION['msg']='Email Already In Use Use Different Email;';
      header("location:http://localhost/myfirstTp/");
    }
    else{
       $qr = 'insert into user (uname,bloodgroup,gender,email,age,password,contact) values ("'.$name.'", "'.$bg.'","'.$gen.'","'.$email.'","'.$age.'","'.$pass.'","'.$cont.'")';


  $result = mysqli_query($conn,$qr);

  $_SESSION['msg']='Registered Successfully';

  header("location:http://localhost/myfirstTp/index.php");
    }


 


}
?>


<div class="modal" id="signUp" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form action='partials/register.php' method="post">
        <label for="staticEmail" class="col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="text" required name="name" class="form-control" id="staticEmail">
    </div>

    <label for="staticEmail" class="col-form-label">Blood Group</label>
    <div class="col-sm-10">
    <input type="text" required name="bg" class="form-control" id="staticEmail">
    </div>


    <label for="staticEmail" class="col-form-label">Age</label>
    <div class="col-sm-10">
    <input type="number" required name="age" min='18' max='50' class="form-control" id="staticEmail">
    </div>

    
    <label for="staticEmail" class="col-form-label">Gender</label>
    <div class="col-sm-10">
    <select name="gen">
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
    </select>
    </div>


    <label for="staticEmail" class="col-form-label">Contact</label>
    <div class="col-sm-10">
    <input type="text" required maxS='10' name='cont' class="form-control" id="staticEmail">
    </div>

    <label for="staticEmail" class="col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="text" required name='email' class="form-control" id="staticEmail">
    </div>



      
    <label for="inputPassword" class="col-form-label">Password</label>
    <div class="col-sm-10">
    <input type="password" id='pass' required name='pass' class="form-control" id="inputPassword">
    </div>

    <label for="inputPassword" class="col-form-label">Confirm Password</label>
    <div class="col-sm-10">
    <input type="password" id='cnfpass' onkeyup ="equal()" required class="form-control" id="inputPassword">
    </div>

    <div id="equal"></div>


    <script type="text/javascript">
      const equal=function() {
        let pass = document.getElementById('pass').value;
        let cnfPass = document.getElementById('cnfpass').value;
        let sub = document.getElementById('sub');
        if(pass==cnfPass){
          sub.disabled = false;
        }
        else{
          document.getElementById('equal').innerHTML = 'Password and Confirm Password Must Be same';
        }
      }
    </script>
    

      </div>
      <div class="modal-footer">
            <button id='sub' disabled class="btn btn-danger my-4">Sign Up</button>
          </form>
      </div>
    </div>
  </div>
</div>