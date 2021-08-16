<?php 

session_start();

?>

<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
	body{
		background-image: url('back12.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		
	}
</style>
<body>

	<header>
		<div class="container">
			<p>CSS Quizer</p>
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Your Result</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
				
			</div>

	</main>


	<footer>
			<div class="container">
				Copyright &copy; Team 11
			</div>


	</footer>








</body>
</html>