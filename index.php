<!-- THE ROUTER -->
<?php
	$currentPage = null;
	if( isset($_GET['page']) ) {
		$currentPage = $_GET['page'];
	} else {
		$currentPage = 'home';
	}

	function pageLoader($currentPage) {
		include($currentPage . '.php');
	}
?>


<!doctype html>
<html lang="en">

<?php include('head.php');?>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6BPFV8"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php
		if( $currentPage == 'home' ) {
			include('index-header.php');
		}
	?>
	<div id="top"></div>
	<?php include('site-header.php')?>

	<main>
		<?php pageLoader($currentPage); ?>	
	</main>

	<?php include('site-footer.php')?>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<script>
  		AOS.init();
	</script>
	
</body>

</html>