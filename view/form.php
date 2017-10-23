<?php require_once 'components/session.php' ?>


<!DOCTYPE html>
<html>
	<head>
		
	<?php require_once 'components/header.php' ?>
	
	</head>

	<body>

		<div class="container" style="margin-top: 50px">
		<div class="row">
			
        	<div class="col-md-6 col-md-offset-3">
        			
				<div class="panel panel-default">
					<div class="panel-body">
						<h2 class="text-center">Login</h2>
						<hr>
						<div id="lbl-alert" class="alert alert-danger" role="alert"></div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" id="input_name" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label>Surname:</label>
							<input type="text" id="input_surname" name="surname" class="form-control">
						</div>
						<button name="submit" onclick="submit()" class="btn btn-success pull-right">Login</button>
					</div>

				</div>

        	</div>
		</div>
        
        </div>

        <script type="text/javascript" src="../javascript/form.js"></script>

	</body>
</html>