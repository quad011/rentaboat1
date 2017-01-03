<?php
	
	require "config.php";

	include 'head.php';
	include 'header.php';
	include 'navbar.php';
	include 'flexslider.php';
?>

<div class="users">
	<h2>Users:</h2>

	<a href="users_show.php">Show all users</a>

</div>

<div class="category">

	<h2>Category:</h2>

	<a href="cat_insert.php">Insert Category</a>

	<a href="cat_delete.php">Delete Category</a>
</div>
	
<div class="boats">
	<h2>Boats:</h2>

	<a href="boat_insert.php">Insert Boats</a>

	<a href="boat_delete.php">Delete Boats</a>

	<a href="boat_show.php">Show all Boats</a>

</div>

<?php
	include 'footer.php';
?>
	