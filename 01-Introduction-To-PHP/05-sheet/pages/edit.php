<!--
=========================================================
* Gabriel Bank Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Gabriel Otero (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Gabriel Otero

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" F content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<title>
		Dashboard
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
	<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>

<body class="">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
		<div class="container">
			<a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/dashboard.html">
				Gabriel Bank Dashboard
			</a>
			<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon mt-2">
					<span class="navbar-toggler-bar bar1"></span>
					<span class="navbar-toggler-bar bar2"></span>
					<span class="navbar-toggler-bar bar3"></span>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="navigation">
				<ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/dashboard.html">
							<i class="fa fa-chart-pie opacity-6  me-1"></i>
							Dashboard
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link me-2" href="../pages/users.php">
							<i class="fa fa-user opacity-6  me-1"></i>
							Users
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link me-2" href="../pages/sign-up.html">
							<i class="fas fa-user-circle opacity-6  me-1"></i>
							Add Client
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link me-2" href="../pages/modify.php">
							<i class="fas fa-key opacity-6  me-1"></i>
							Modify Users
						</a>
					</li>
				</ul>
				<!-- <li class="nav-item d-flex align-items-center">
          <a class="btn btn-round btn-sm mb-0 btn-outline-white me-2" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard">Online Builder</a>
        </li> -->
				<ul class="navbar-nav d-lg-block d-none">
					<!-- <li class="nav-item">
            <a href="https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-light">Free download</a>
          </li> -->
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->
	<main class="main-content  mt-0">
		<section class="min-vh-100 mb-8">
			<div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
				<span class="mask bg-gradient-dark opacity-6"></span>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5 text-center mx-auto">
							<h1 class="text-white mb-2 mt-5">Welcome!</h1>
							<p class="text-lead text-white">Edit User</p>
						</div>
					</div>
				</div>
			</div>
			<?php
			$conexion = mysqli_connect("localhost", "root");
			mysqli_select_db($conexion, "bank");

			$values = mysqli_query($conexion, "SELECT * FROM clients WHERE account={$_GET["account"]}");
			$user = mysqli_fetch_array($values);

			?>


			<div class="container">
				<div class="row mt-lg-n10 mt-md-n11 mt-n10">
					<div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
						<div class="card z-index-0">
							<div class="card-header text-center pt-4">
								<h5>Edit</h5>
							</div>
							<div class="card-body">
								<form action="../database/edituser.php" method="post" role="form text-left">

									<div class="mb-3">
										<input type="text" class="form-control" aria-label="Name" value="<?php print $user["name"] ?>" name="name" aria-describedby="email-addon">
									</div>

									<div class="mb-3">
										<input type="text" class="form-control" aria-label="First Surname" value="<?php print $user["firstsurname"] ?>" name="firstsurname" aria-describedby="email-addon">
									</div>

									<div class="mb-3">
										<input type="text" class="form-control" aria-label="Second Surname" value="<?php print $user["secondsurname"] ?>" name="secondsurname" aria-describedby="email-addon">
									</div>

									<div class="mb-3">
										<input type="text" class="form-control" aria-label="Dni" value="<?php print $user["dni"] ?>" name="dni" aria-describedby="email-addon"minlength="9" maxlength="9">
									</div>

									<div class="mb-3">
										<input type="tel" class="form-control" aria-label="Phone Number" value="<?php print $user["phone"] ?>" name="phone" aria-describedby="email-addon"minlength="9" maxlength="9">
									</div>


									<div class="mb-3">
										<input type="email" class="form-control" aria-label="Email" value="<?php print $user["email"] ?>" name="email" aria-describedby="email-addon">
									</div>

									<div class="mb-3">
										<input type="text" class="form-control" aria-label="Address" value="<?php print $user["address"] ?>" name="address" aria-describedby="email-addon">
									</div>

									<input type="hidden" class="form-control" aria-label="Account Number" value="<?php print $user["account"] ?>" name="account" aria-describedby="email-addon" minlength="8" maxlength="8">

									<div class="mb-3">
										<input type="text" class="form-control" name="money" aria-label="Money" value="<?php print $user["money"] ?>" aria-describedby="email-addon">
									</div>

									<!-- <div class="form-check form-check-info text-left">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    </label>
                  </div> -->

									<div class="text-center">
										<input type="submit" value="Edit" class="btn bg-gradient-dark w-100 my-4 mb-2"></input>
									</div>

									<!-- <p class="text-sm mt-3 mb-0">Already have an account? <a href="javascript:;" class="text-dark font-weight-bolder">Modify Users</a></p> -->

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
		<footer class="footer py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mb-4 mx-auto text-center">
						<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
							Company
						</a>
						<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
							About Us
						</a>
						<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
							Team
						</a>
						<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
							Products
						</a>
						<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
							Blog
						</a>
						<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
							Pricing
						</a>
					</div>
					<div class="col-lg-8 mx-auto text-center mb-4 mt-2">
						<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
							<span class="text-lg fab fa-dribbble"></span>
						</a>
						<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
							<span class="text-lg fab fa-twitter"></span>
						</a>
						<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
							<span class="text-lg fab fa-instagram"></span>
						</a>
						<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
							<span class="text-lg fab fa-pinterest"></span>
						</a>
						<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
							<span class="text-lg fab fa-github"></span>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-8 mx-auto text-center mt-1">
						<p class="mb-0 text-secondary">
							Copyright ©
							<script>
								document.write(new Date().getFullYear())
							</script> Gabriel Otero.
						</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
	</main>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>
	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>