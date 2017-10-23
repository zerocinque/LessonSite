
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
			
		<div class="row"><h1 class="text-center">Registrations</h1></div>
		<?php require_once $root . 'controller/allLesson.php' ?>
		<?php require_once $root . 'controller/allSubject.php' ?>
		<?php require_once $root . 'controller/registration_lesson.php' ?>

		<?php if(is_array($registrations)){ ?>
			<table class="table table-striped">
				<thead class="thead">
				    <tr>
				      <th>#</th>
				      <th>Lesson</th>
				      <th>Date</th>
				      <th>Name</th>
				      <th>Surname</th>
				    </tr>
				</thead>
				<tbody>

				<?php 

					for ($i=0; $i < count($registrations); $i++) { 
						echo '<tr>';
						echo '<th scope="row">'. $registrations[$i]->getID() .'</th>';
						echo '<td>'. $allSubject[$allLesson[$registrations[$i]->getIdLesson()-1]->getIdSubject()-1]->getSubject_Name() . '</td>';
						echo '<td>'. $allLesson[$registrations[$i]->getIdLesson()-1]->getDate() . '</td>';
						echo '<td>'. $registrations[$i]->getName() . '</td>';
						echo '<td>'. $registrations[$i]->getSurname() . '</td>';
						
					?>
						<td><a href=<?php echo 'edit.php?les='. urlencode($registrations[$i]->getID()) . '&i='. urlencode($i) ?> class="btn btn-warning">Edit</a></td>
						<td><button class="btn btn-danger" onclick="deleteRegistration(<?php $registrations[$i]->getID() ?>)">Delete</button></td>
						</tr>

					<?php 
					}
				 ?>

				</tbody>
			</table>
			<?php 
			}
				else
					echo '<div class="alert alert-danger">nessuna Registrazione per questa materia</div>'; ?>
		</div>
		
		<?php require_once $root . 'view/components/footer.php' ?>
		 <script type="text/javascript" src="../javascript/myLibrary.js"></script>

	</body>
</html>
