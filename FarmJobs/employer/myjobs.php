<?php include "php/read2.php"; 
include'db_conn.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    
</head>
<body>
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FarmIndia</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="read.php">MY JOBS</a></li>
      <li><a href="postjobs.php">NEW JOB</a></li>
       <li><a href="myjobs.php">APPLICATIONS</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Hello , <?php echo $_SESSION['name']; ?></a></li>
    </ul>
  </div>
</nav> 
 
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center" style="font-size :30px">My Applications</h4><br>

				<a href="postjobs.php" class="btn btn-primary dropdown-toggle">New Job</a>
			
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name </th>
			      <th scope="col">email </th>
			       <th scope="col">contact</th>
			      <th scope="col">Address</th>
			      <th scope="col">Action</th>

			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['firstname']?> <?php echo $rows['middlename']; ?> <?php echo $rows['lastname']; ?></td>
			      <td><?=$rows['email']?> </td>
			       <td><?=$rows['contact']?></td>
			        <td><?=$rows['address']?> </td>
			      <td>
			      	  <a href="php/deletejobs.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-primary dropdown-toggle">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			
		</div>
	</div>
</body>
</html>