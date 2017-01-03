<?php
	
	require "config.php";

	include 'head.php';
	include 'header.php';
	include 'navbar.php';
	include 'flexslider.php';
?>

<form method="POST" action="">

	<p>Select category:</p>
	<select name="category">

<?php		
	$db = dbConn::getConnection();
	    $q = $db->connection->prepare("select * from category");
        $q->execute();
        $q->setFetchMode(PDO::FETCH_OBJ);
        $rows=$q->fetchAll();

        foreach ($rows as $row) {
        	echo "<option value='{$row->category_id}'>{$row->category_name}:{$row->category_status}</option>";
        }

?>
	</select>

	<p>Category status:</p>
	<input type="number" min="0" max="1" name="category_status"><br><br>
	<input type="submit" name="category_delete" value="Update" class="btn">


</form>

<?php
	
	if(isset($_POST['category_status'])){
		
		$db = dbConn::getConnection();
        
        $q = $db->connection->prepare("update category set category_status =:category_status where category_id=:category_id");
		$q->bindParam(':category_status',$_POST['category_status']);
		$q->bindParam(':category_id',$_POST['category']);
        $q->execute(); 
		header("location:cat_delete.php");
	}

?>

<div class="nav-back">
	<a href="admin.php">Back</a>
</div>

<?php
	include 'footer.php';
?>	