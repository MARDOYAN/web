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
  <h3>coontactly form</h3>
  <form action="check.php" method="post">
    <input type="email" name="email" placeholder="write email" class="form-control"> <br>
    <textarea name="message" class="form-control" placeholder="write text"></textarea> <br>
    <button type="submit" name="send" class="btn btn-success">send</button>
    
  </form>
</div>
 <div class="container mt-5">
 	<h3 class="mb-3">Our saites</h3>
	 	
	<?php require "blacks/footer.php" 
  ?>
 	 
      </div>
    </div>
 </div>

</body>
</html>