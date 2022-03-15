<?php 
session_start();

include 'partials/template.php';

include 'partials/nav.php';

	if(isset($_SESSION['msg'])){
		echo '
		<div class="alert alert-danger alert-dismissible fade show" role="alert">'.$_SESSION['msg'].'
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>';

	unset($_SESSION['msg']);
	}

include 'partials/slidera.php';
include 'partials/register.php';
include 'partials/login.php';
include 'partials/editPro.php';
include 'partials/donate.php';


if(isset($_SESSION['uid']))
{
include 'partials/myDonation.php';
include 'partials/request.php';
include 'partials/myRequest.php';
}

if(isset($_SESSION['aid'])){
	include 'partials/donations.php';
include 'partials/cdonations.php';
include 'partials/udonations.php';
include 'partials/requests.php';
include 'partials/crequests.php';
include 'partials/urequests.php';
}

?>



<!-- <div class="row container deck">
<div class="col-md-6">
	<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-6">

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-6">

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>


<div class="col-md-6">

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
	
</div>
 -->


 



	<!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php include 'partials/footer.php';?>
</body>
</html>