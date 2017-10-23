
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
			
		<div class="row"><h1 class="text-center">Lessons</h1></div>
		<?php require_once $root . 'controller/allLesson.php' ?>
		<?php require_once $root . 'controller/allSubject.php' ?>

		<div class="row">
			<a href="new_lesson.php" class="btn btn-lg btn-block btn-link">New Lesson</a>
		</div>

			<table class="table table-striped">
				<thead class="thead">
				    <tr>
				      <th>#</th>
				      <th>Subject</th>
				      <th>Date</th>
				    </tr>
				</thead>
				<tbody>

				<?php 

					for ($i=0; $i < count($allLesson); $i++) { 
						echo '<tr>';
						echo '<th scope="row">'. $allLesson[$i]->getID() .'</th>';
						echo '<td>'. $allSubject[$allLesson[$i]->getIdSubject()-1]->getSubject_Name() . '</td>';
						echo '<td>'. $allLesson[$i]->getDate() . '</td>';
						
					?>
						<td><a href=<?php echo 'view_registration.php?les='. urlencode($allLesson[$i]->getID()) . '&i='. urlencode($i) ?> class="btn btn-success">View Registrations</a></td>
						<td><a href=<?php echo 'edit.php?p='. urlencode($allLesson[$i]->getID()) . '&i='. urlencode($i) ?> class="btn btn-warning">Edit</a></td>
						<td><button class="btn btn-danger" onclick="deleteLesson(<?php $allLesson[$i]->getID() ?>)">Delete</button></td>
						<td><a href=<?php echo '../controller/sign_controller.php?les='. urlencode($allLesson[$i]->getID()) . '&i='. urlencode($i) ?> class="btn btn-primary">Sign</a></td>

						</tr>

					<?php 
					}
				 ?>

				</tbody>
			</table>

		</div>
		
		<?php require_once $root . 'view/components/footer.php' ?>
		 <script type="text/javascript" src="../javascript/myLibrary.js"></script>

	</body>
</html>
