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
		      <a href="index.php" class="btn btn-primary">student list</a>
		    </div>
		    <div class="col-sm-8">
		    	<h1>Add student </h1>
		       <form action="store.php" method="POST">
				  
				  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name">
				  </div>
				  <div class="form-group">
				    <label for="age">Age:</label>
				    <input type="text" class="form-control" placeholder="Enter Age" id="age" name="age">
				  </div>
				  <div class="form-group">
				    <label for="roll">Roll:</label>
				    <input type="text" class="form-control" placeholder="Enter Roll" id="roll" name="roll">
				  </div>
				  <div class="form-group">
				    <label for="address">Address:</label>
				    <input type="text" class="form-control" placeholder="Enter Address" id="address" name="address">
				  </div>
				  <div class="form-group">
				    <label for="phone">Phone:</label>
				    <input type="phone" class="form-control" placeholder="Enter Phone" id="phone" name="phone">
				  </div>
				 
				  <button type="submit" class="btn btn-primary" value="">Submit</button>
				</form>

		    </div>
		    
		  </div>
	</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>