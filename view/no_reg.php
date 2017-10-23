
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
	<body>

		<?php require_once $root . 'view/components/navbar.php' ?>

		<div class="container">
			
		<div class="alert alert-danger">ERRORE, non è stato possibile effetturare la registrazione</div>

		</div>
		
		<?php require_once $root . 'view/components/footer.php' ?>

	</body>
</html>
