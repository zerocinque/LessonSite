
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
			
		<div class="row"><h1 class="text-center">Subjects</h1></div>
		<?php require_once $root . 'controller/allSubject.php' ?>

		<div class="row">
			<a href="new_subject.php" class="btn btn-lg btn-block btn-link">New Subject</a>
		</div>
			<table class="table table-striped">
				<thead class="thead">
				    <tr>
				      <th>#</th>
				      <th>Name</th>
				    </tr>
				</thead>
				<tbody>

				<?php 

					for ($i=0; $i < count($allSubject); $i++) { 
						echo '<tr>';
						echo '<th scope="row">'. $allSubject[$i]->getID() .'</th>';
						echo '<td>'. $allSubject[$i]->getSubject_Name() . '</td>';
						
					?>
						<td><a href=<?php echo 'view_lesson.php?sub='. urlencode($allSubject[$i]->getID()) . '&i='. urlencode($i) ?> class="btn btn-success">View lessons</a></td>
						<td><a href=<?php echo 'edit.php?p='. urlencode($allSubject[$i]->getID()) . '&i='. urlencode($i) ?> class="btn btn-warning">Edit</a></td>
						<td><button class="btn btn-danger" onclick="deleteSubject(<?php $allSubject[$i]->getID() ?>)">Delete</button></td>
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
