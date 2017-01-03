<?php
	
	require "config.php";

	include 'head.php';
	include 'header.php';
	include 'navbar.php';
	include 'flexslider.php';
?>

<form method="POST" action="">

	<p>Select boat:</p>
	<select name="boats">

<?php		
	$db = dbConn::getConnection();
	    $q = $db->connection->prepare("select * from boats");
        $q->execute();
        $q->setFetchMode(PDO::FETCH_OBJ);
        $rows=$q->fetchAll();

        foreach ($rows as $row) {
        	echo "<option value='{$row->boats_id}'>{$row->name}:{$row->product_status}</option>";
        }

?>
	</select>

	<p>Boats status:</p>
	<input type="number" min="0" max="1" name="product_status"><br><br>
	<input type="submit" name="product_delete" value="Update" class="btn">


</form>

<?php
	
	if(isset($_POST['product_status'])){
		
		$db = dbConn::getConnection();
        
        $q = $db->connection->prepare("update boats set product_status =:product_status where boats_id=:boats_id");
		$q->bindParam(':product_status',$_POST['product_status']);
		$q->bindParam(':boats_id',$_POST['boats']);
        $q->execute(); 
		header("location:boat_delete.php");
	}

?>

<div class="nav-back">
	<a href="admin.php">Back</a>
</div>

<?php
	include 'footer.php';
?>	