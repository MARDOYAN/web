<!DOCTYPE html>
<html lang = "ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, intial-scale =1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<title>PHP</title>
</head>
<body>
	<?php require "blacks/header.php" 
  ?>
 <div class="container mt-5">
 	<h3 class="mb-3">Our saites</h3>
	 	<div class="d-flex d-wrap">
	 	<?php 
	 	for($i = 0; $i <5; $i++):
	 		?>
	 		<div class="card mb-4 shadow-sm">
	      <div class="card-header">
	        <h4 class="my-0 font-weight-normal">Free</h4>
	      </div>
	      <div class="card-body">
	      	<img src="img/<?php echo ($i + 1) ?>.jpg" class= "img-thumbnail">
	        
	        <ul class="list-unstyled mt-3 mb-4">
	          <li>10 users included</li>
	          <li>2 GB of storage</li>
	          <li>Email support</li>
	          <li>Help center access</li>
	        </ul>
	        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
	      </div>
	    </div>
	<?php endfor; ?>
	</div>
	<?php require "blacks/footer.php" 
  ?>
 	 
      </div>
    </div>
 </div>

</body>
</html>