<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', 'sms');
$sql = "select * from student where id = $id";
$result = mysqli_query($conn, $sql);
$student = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

    <title>data view</title>
  </head>
  <body>
    
 
    <div class="container">
		  <div class="row">
		    <div class="col-sm-4">
		      <a href="index.php" class="btn btn-success"> student list </a>
		    </div>
		    <div class="col-sm-7">
		    	<h1>student information</h1>
		        <table class="table table-bordered">
				   
				      <tr>
				        <th>ID</th>
				        <td><?php echo $student['id']; ?></td>
				      </tr>
				      <tr>
				      	<th>Name</th>
				      	<td><?php echo $student['name']; ?></td>
				      </tr>
				      <tr>
				      	<th>Age</th>
				      	<td><?php echo  $student['age']; ?></td>
				      </tr>

      				 <tr>
				      	<th>Roll</th>
				      	<td><?php echo $student['roll']; ?></td>
				      </tr>
				     <tr>
				      	<th>Address</th>
				      	<td><?php echo $student['address']; ?></td>
				      </tr>
				      <tr>
				      	<th>Phone</th>
				      	<td><?php echo  $student['phone']; ?></td>
				      </tr>
				  </table>
		    </div>
		    
		  </div>
	</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>