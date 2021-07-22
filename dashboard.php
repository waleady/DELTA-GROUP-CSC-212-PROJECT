<?php
require_once "dbconnect/dbconnect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-Chemist</title>
	<link rel="stylesheet" type="text/css" href="asset/css/dashboard.css"> 
    <link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		margin-bottom: 0;
	}
	#main{
		    width: 100%;
    height: 100vh;
    background: linear-gradient(to right, #052e05, #7af8ab);
    background-size: cover;
    color: #fff;
	}
	.path{
		margin-bottom: 20px;

	}
</style>
<body>
	<div id="main">
	<?php  include 'head.php'; ?>

	<div class="path">
		<div>
			<span><? php echo$message; ?></span>
		</div>
	<?php  include 'register_user.php'; ?>
	</div>
	<div class="path">
		
	<?php  include 'pateint_record.php'; ?>
	</div>
	
	<div class="path">
		<div>
			
		</div>
	<?php  include 'footer.php'; ?>
	</div>
</div>
	
</body>
</html>