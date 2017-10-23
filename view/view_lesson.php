
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
			
		<div class="row"><h1 class="text-center">Lessons by Subject</h1></div>
		<?php require_once $root . 'controller/lesson_subject.php' ?>
		<?php require_once $root . 'controller/allSubject.php' ?>

		<?php if(is_array($lessons)){ ?>
			<table class="table table-striped">
				<thead class="thead">
				    <tr>
				      <th>#</th>
				      <th>Name</th>
				      <th>Date</th>
				    </tr>
				</thead>
				<tbody>

				<?php 
					
					for ($i=0; $i < count($lessons); $i++) { 
						echo '<tr>';
						echo '<th scope="row">'. $lessons[$i]->getID() .'</th>';
						echo '<td>'. $allSubject[$lessons[$i]->getIdSubject()-1]->getSubject_Name() . '</td>';
						echo '<td>'. $lessons[$i]->getDate() . '</td>';
						
					?>
						<td><a href=<?php echo 'view_registration.php?les='. urlencode($lessons[$i]->getID()) . '&i='. urlencode($i) ?> class="btn btn-success">View lessons</a></td>
						<td><a href=<?php echo 'edit.php?p='. urlencode($lessons[$i]->getID()) . '&i='. urlencode($i) ?> class="btn btn-warning">Edit</a></td>
						<td><button class="btn btn-danger" onclick="deleteLesson(<?php $lessons[$i]->getID() ?>)">Delete</button></td>
						<td><a href=<?php echo '../controller/sign_controller.php?les='. urlencode($lessons[$i]->getID()) . '&i='. urlencode($i) ?> class="btn btn-primary">Sign</a></td>
						</tr>

					<?php 
					}
				
				 ?>

				</tbody>
			</table>
			<?php 
			}
				else
					echo '<div class="alert alert-danger">nessuna lezione per questa materia</div>'; ?>

		</div>
		
		<?php require_once $root . 'view/components/footer.php' ?>
		 <script type="text/javascript" src="../javascript/myLibrary.js"></script>

	</body>
</html>
