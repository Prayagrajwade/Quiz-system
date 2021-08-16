 <?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<html>
<head>
	<title>HTML Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<style>
.ye{
		width: 500px;
		height: 500px;
		
		
		
	} 
	.bech{
		margin-top: 200px;
		margin-left: 550px;
		
		
		place-content: center;
		
	}

	body{
		background-image: url('back12.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
		
	}
</style>
<body>

<div class="bech">
<div class = "ye">



<div class="container">
		<p>HTML Quiz</p>
	</div>
</header>

<main>
		<div class="container">
			<h2>Test Your HTML Knowledge</h2>
			<p>
				This is a multiple choise quiz to test your PHP Knowledge.
			</p>
			<ul>
				<li><strong>Number of Questions:</strong><?php echo $total_questions; ?></li>
				<li><strong>Type:</strong> Multiple Choise</li>
				<li><strong>Estimated Time:</strong> <?php echo $total_questions*1.5; ?></li>
				<li><strong>Each question Hold 1 Point</strong></li>

			</ul>

			<a href="question.php?n=1" class="start">Start Quize</a>

		</div>

</main>


<footer>
		<div class="container">
			Copyright &copy; Team 11
		</div>


	</footer>

	</div>
</div>






	<!-- <header>
		<div class="container">
			<p>PHP Quizer</p>
		</div>
	</header> -->

	<!-- <main>
			<div class="container">
				<h2>Test Your PHP Knowledge</h2>
				<p>
					This is a multiple choise quiz to test your PHP Knowledge.
				</p>
				<ul>
					<li><strong>Number of Questions:</strong></li>
					<li><strong>Type:</strong> Multiple Choise</li>
					<li><strong>Estimated Time:</strong> /li>

				</ul>

				<a href="question.php?n=1" class="start">Start Quize</a>

			</div>

	</main>


	<footer>
			<div class="container">
				Copyright &copy; Team 11
			</div>


		</footer> -->

		
			
</body>
</html>