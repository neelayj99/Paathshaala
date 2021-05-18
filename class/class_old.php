<?php
	$current_class_code = htmlspecialchars($_GET["class_code"]);
	$user="pankti.n@somaiya.edu"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Class</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	

	<!-- NAVBAR STARTS -->
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="http://localhost/Paathshaala/teacher_dashboard/teacher_dashboard.php">PAATHSAALA</a>
	  <button class="btn btn-info" type="button" id="dropdownMenuButton" data-toggle="dropdown"><span class="fa fa-plus"></span> 
	  </button>
	  <div class="dropdown-menu dropdown-menu-right">
	    <!--<button class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModalCenter">Create Quiz</button>-->
	    <a class="text-decoration-none" href="http://localhost/Paathshaala/quiz/quiz_details.php?code=<?php echo $current_class_code; ?>"><button class="dropdown-item" type="button">Create Quiz</button></a>
	    <button class="dropdown-item" type="button">Create Assignment</button>
	    <button class="dropdown-item" type="button">Make Announcement</button>
	  </div>
	</nav>
	<!-- NAVBAR ENDS -->

</body>
</html>