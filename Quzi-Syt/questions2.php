<?php 
	include 'db.php';
	session_start(); 
	//Set Question Number
	$number = $_GET['n'];

	//Query for the Question
	$query = "SELECT * FROM questions2 WHERE question_number2 = $number";

	// Get the question
	$result = mysqli_query($connection,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM options2 WHERE question_number2 = $number";
	$choices = mysqli_query($connection,$query);
	// Get Total questions
	$query = "SELECT * FROM questions2";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
 	
	
?>
<html>
<head>
	<title>HTML Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<style>
	body{
		background-image: url('back13.png');
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
<body>

	<header>
		<div class="container">
			<p>HTML Quiz</p>
		</div>
	</header>

	<main>
			<div class="container">
				<div class="current">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
				<p class="question"><?php echo $question['questions_text2']; ?> </p>
				<form method="POST" action="process2.php">
					<ul class="choicess">
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
						<li><input type="radio" name="choice" value="<?php echo $row['id2']; ?>"><?php echo $row['coptions2']; ?></li>
						<?php } ?>
						
						
					</ul>
					<input type="hidden" name="number" value="<?php echo $number; ?>">
					<input type="submit" name="submit" value="Submit">


				</form>
				

			</div>

	</main>


	<footer>
			<div class="container">
				Copyright &copy; Team 11
			</div>


	</footer>








</body>
</html>