
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BloodDonation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active cur" aria-current="page" href="./index.php">Home</a>
        </li>

        <?php
        if(isset($_SESSION['uname'])){
          echo '
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#myDonation">My Donation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#myRequest">My Request</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#donation">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#request">Request</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#editPro">Edit Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" href="partials/logout.php">Logout</a>
        </li>';
        }
        else if(isset($_SESSION['aname'])){
          echo '
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#donations">Donations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#requests">Requests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#udonations">Update Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#urequests">Update Request</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#cdonations">Completed Donations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#crequests">Completed Request</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" href="partials/logout.php">Logout</a>
        </li>';
        }
        else{
          echo '
          <li class="nav-item">
          <a class="nav-link active cur"  data-bs-toggle="modal" data-bs-target="#login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active cur" data-bs-toggle="modal" data-bs-target="#signUp">Register</a>
        </li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>