<?php
require_once "dbconnect/dbconnect.php";
?>
<!DOCTYPE html>
<html>
<head> 
    <link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
    	body{
    		margin:0;
    		padding: 0;
    	}
    	.card-header h3{
    		color: green;
    	}
    	.card-body{
    		color: green;
    	}
    	label{
    		color: green;
    		font-size: 16px;
    		margin-right: : 10px;
    	}
    	.btn{
    		width: 100%;

    	}
    </style>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
				<div class="card-header">
					<h3>Register new patient</h3>
				</div>
				<div class="card-body">
					<form method="get" action="registered.php">
						<div class="row">
						<div class="col-md-6">
							<div class="grp_form">
								<label>Patient's Name</label>
								<input type="text" name="name" placeholder="Patient's fullname">
							</div>
						</div>
						<div class="col-md-6">
							<div class="grp_form">
								<label>Patient's Age</label>
								<input type="text" name="age" placeholder="Age of the patient">
							</div>
						</div>
						<div class="col-md-6">
							<div class="grp_form">
								<label>Ptient's Address</label>
								<input type="text" name="address" placeholder="patient'sddress">
							</div>
						</div>
						<div class="col-md-6">
							<div class="grp_form">
								<label>Patient's  Phone No</label>
								<input type="text" name="phone" placeholder="Patient's phone number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="grp_form">
								<label>Patient's Gender</label>
								<input type="radio" name="gender" value="male">male
								<input type="radio" name="gender" value="female">female
							</div>
						</div>
							<div class="col-md-6">
							<div class="grp_form">
								<label>Patient's Section</label>
								<select name="section">
									<option name="emergency">Emergency</option>
									<option name="emergency">Consultancy</option>
									<option name="emergency">Pharmacy</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="grp_form">
								<input type="submit" class="btn btn-success" name="submit">
							</div>
						</div>
						</div>
					</form>
				</div>
			</div>
			</div>
			
		</div>
		
	</div>
</body>
</html>