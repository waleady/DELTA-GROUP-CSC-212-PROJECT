<!DOCTYPE html>
<html>
<head>
   
    <title>Emergency Services</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">

    
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
			<span><?php echo$message; ?></span>
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