<?php

if(isset($_POST['email'])){
session_start();
  include 'dbConn.php';
  $email=$_POST['email'];
  $pass=$_POST['pass'];

  if(substr($email, 0,2)=='a:'){
    $qr = 'select * from admin where email="'.$email.'" and pass="'.$pass.'";';


    $result = mysqli_query($conn,$qr);

    if(!$result || mysqli_num_rows($result)<1){
      $_SESSION['msg']='User Not Found';
    header("location:http://localhost/myfirstTp/");
    }
    else{
      $row = mysqli_fetch_assoc($result);

      $_SESSION['aname']=$row['aname'];
      $_SESSION['aid']=$row['aid'];
      $_SESSION['email']=$row['email'];
      $_SESSION['age']=$row['age'];
      $_SESSION['contact']=$row['contact'];

      header("location:http://localhost/myfirstTp/");
    }
  }
  else{

  $qr = 'select * from user where email="'.$email.'" and password="'.$pass.'";';

  echo $qr;


  $result = mysqli_query($conn,$qr);

  if(!$result || mysqli_num_rows($result)<1){
    $_SESSION['msg']='User Not Found';
    header("location:http://localhost/myfirstTp/");


  }
  else{
    $row = mysqli_fetch_assoc($result);

    $_SESSION['uname']=$row['uname'];
    $_SESSION['uid']=$row['uid'];
    $_SESSION['email']=$row['email'];
    $_SESSION['age']=$row['age'];
    $_SESSION['contact']=$row['contact'];
    $_SESSION['bloodgroup']=$row['bloodgroup'];
    $_SESSION['gender']=$row['gender'];

    header("location:http://localhost/myfirstTp/");
  }
}


}
?>


<div class="modal" id="login" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form action="partials/login.php" method="POST">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="text" name="email" required class="form-control" id="staticEmail">
    </div>
      
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
    <input type="password" name="pass" required class="form-control" id="inputPassword">
    </div>

    

    
    

      </div>
      <div class="modal-footer">
            <button class="btn btn-danger my-4">Login</button>
          </form>
      </div>
    </div>
  </div>
</div>