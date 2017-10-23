
<?php 
	$root = (strcmp($_SERVER['HTTP_HOST'], 'localhost')==0 ? ($_SERVER['DOCUMENT_ROOT']. '/03_bottasso_2017_07_07') : '') . '/';

	require_once $root . 'view/components/session.php'; 

//echo $_SESSION['user'];
if(!isset($_SESSION['user'])){
	header("location: form.php");		
}


?>

<!DOCTYPE html>
<html>
	<head>
		<?php require_once $root . 'view/components/header.php' ?>
	</head>
	<body >

		<?php require_once $root . 'view/components/navbar.php' ?>

		<div class="container" style="height: 70vh">
		<div class="row"><h1 class="text-center">School of turin</h1></div>
			<div class="col col-md-6 col-md-offset-3">
				<div class="row">
					<a href="subject.php" class="btn btn-lg btn-secondary btn-block">Subject</a>
				</div>
				<div class="row">
					<a href="lesson.php" class="btn btn-lg btn-secondary btn-block">Lesson</a>
				</div>
				<div class="row">
					<a href="registration.php" class="btn btn-lg btn-secondary btn-block">Registration</a>
				</div>

			</div>			

		</div>
		
		<?php require_once $root . 'view/components/footer.php' ?>

	</body>
</html>
