
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Charts</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/modules/fontawesome6.1.1/css/all.css">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="assets/modules/boxicons/css/boxicons.min.css">
    <!-- Apexcharts  CSS -->
    <link rel="stylesheet" href="assets/modules/Apexcharts/Apexcharts.css">
</head>
<body>
  
  <!--Topbar -->
  <div class="topbar transition">
	<div class="bars">
		<button type="button" class="btn transition" id="sidebar-toggle">
			<i class="fa fa-bars"></i>
		</button>
	</div>
    <!-- MENU SECTION -->
       <?php include("sections/menu.php") ?>
	</div>


	<!--Sidebar-->
    <?php include("sections/side-bar.php") ?>

    <!-- End Sidebar-->


	<div class="sidebar-overlay"></div>


	<!--Content Start-->
    <?php include("sections/chart-content.php") ?>
	<!-- End Content-->

	<!-- Footer -->				
	<!-- <footer>
		<div class="footer">
			<div class="float-start">
				<p>2022 &copy; Soil Sence</p>
			</div>
				<div class="float-end">
					<p>Crafted with 
						<span class="text-danger">
							<i class="fa fa-heart"></i> by 
							<a href="https://www.facebook.com/andreew.co.id/" class="author-footer">Andre Tri Ramadana</a>
						</span> 
					</p>
			</div>
		</div>
	</footer> -->



	<!-- General JS Scripts -->
	<script src="assets/js/Soil Sence.js"></script>

	<!-- JS Libraies -->
	<script src="assets/modules/jquery/jquery.min.js"></script>
	<script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="assets/modules/popper/popper.min.js"></script>

	<!-- Chart Js -->
	<script src="assets/modules/Apexcharts/Apexcharts.js"></script>
	<script src="assets/js/ui-Apexcharts.js"></script>

	<!-- Template JS File -->
	<script src="assets/js/script.js"></script>
	<script src="assets/js/custom.js"></script>
 </body>
</html>
