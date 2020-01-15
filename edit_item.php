<?php
require "Items.php";

$item = new Items();
$data = $item->find($_GET['id']);
$row = $data->fetch_assoc();

include "header.php";
?>

<body>
<?php include "nav.php"; ?>

<br /><br />

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="updated_item.php?id=<?php echo $row['id'] ?>">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Category</label>
			    <input type="text" name="category" class="form-control" id="category" required="required" value="<?php echo $row['category'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Name</label>
			    <input type="text" name="name" class="form-control" id="name" required="required" value="<?php echo $row['name'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Price</label>
			    <input type="number" name="price" class="form-control" id="price" required="required" value="<?php echo $row['price'] ?>">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>