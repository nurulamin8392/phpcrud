<?php
$conn = mysqli_connect('localhost', 'root', '', 'sms');
$sql = "select * from student";
$result = mysqli_query($conn, $sql);
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
		      <a href="insert.php" class="btn btn-success">add student </a>
		    </div>
		    <div class="col-sm-7">
		    	<h1>student list</h1>
		        <table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>ID</th>
				        <th>Name</th>
				        <th>Age</th>
				        <th>Roll</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				    <tbody>
				    <?php 
				    while($row = mysqli_fetch_assoc($result)){


				    	?>
				      <tr>
				        <td><?php echo $row['id']; ?> </td>
				        <td><?php echo $row['name']; ?></td>
				        <td><?php echo $row['age']; ?></td>
				        <td><?php echo $row['roll']; ?></td>
				        <td>
				        	<a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">view</a>
				        	<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">edit</a>
				        	<a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('are you sure?')" class="btn btn-success" class="btn btn-info">delete</a>
				        </td>
				      </tr>
				      <?php
				       }
				    ?>
				    </tbody>
				  </table>
		    </div>
		    
		  </div>
	</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>