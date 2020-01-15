<?php
include "header.php";
?>

<body>
<?php include "nav.php"; ?>

<br /><br />

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="stored_item.php">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Category</label>
			    <input type="text" name="category" class="form-control" id="category" required="required">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Name</label>
			    <input type="text" name="name" class="form-control" id="name" required="required">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Price</label>
			    <input type="number" name="price" class="form-control" id="price" required="required">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>