<?php
require "Items.php";

$item = new Items();
$rows = $item->all();

include "header.php";
?>
<body>
<?php include "nav.php"; ?>

<br /><br />

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a href="insert_item.php" class="btn btn-primary">Tambah Data</a>
			<br /><br />
			<table class="table" id="myTable">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Category</th>
			      <th scope="col">Name</th>
			      <th scope="col">Price</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	while ($row = $rows->fetch_assoc()) {
			  	?>
				    <tr>
				      <th scope="row"><?php echo $row['id'] ?></th>
				      <td><?php echo $row['category'] ?></td>
				      <td><?php echo $row['name'] ?></td>
				      <td>IDR <?php echo number_format($row['price']) ?></td>
				      <td>
				      	<a href="edit_item.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a>
				      	<a href="delete_item.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
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
</body>
</html>
<script type="text/javascript">
	$(document).ready( function () {
	    $('#myTable').DataTable();
	} );
</script>