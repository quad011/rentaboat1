<?php
	
	require "config.php";

	include 'head.php';
	include 'header.php';
	include 'navbar.php';
	include 'flexslider.php';

	$message = Array();
	$_POST = array_map('trim', $_POST);

	if(!isset($_POST['price']) || empty($_POST['price'])){
        $message[]="*Required price field";
  	}

  	if(isset($_POST['boat_name']) && strlen($_POST['boat_name'])<3 ){
	    $message[]="*Name must be filed";
  	}

  	if(!isset($_POST['description']) || empty($_POST['description'])){
        $message[]="*Required description";
  	}

  	if (empty($_FILES) || $_FILES['foto']['size'] == 0) {
    $message[]="*Insert Image!";
  	}   

  	

  	
?>

	<form method="POST" action="" enctype="multipart/form-data">
		<br><br>
		<input type="file" name="foto">
		<br><br>
		<p>Boat name:</p>
		<input type="text" name="boat_name"><br>
		<textarea name="description" placeholder="Descripton" cols=50 rows=10></textarea><br><br>
		<input type="number" placeholder="Price" data-validate="require, number" min="10" max="200" name="price"><br><br>
		<input type="text" placeholder="Phone" name="phone"><br>
	<p>Category:</p>
	<select name="category_id">

		
<?php
	 
	  $db = dbConn::getConnection();
	    $q = $db->connection->prepare("select * from category where category_status=1");
        $q->execute();
        $q->setFetchMode(PDO::FETCH_OBJ);
        $rows=$q->fetchAll();
        foreach ($rows as $row) {
        	echo "<option value='$row->category_id'>{$row->category_name}</options>";
        }
		
		   
?>		
	</select><br>
		<br><br>
		<input type="submit" name="boat_insert" value="add new" class="btn">

	</form>
<?php

	if(isset($_POST['boat_insert']) && count($message)==0){
  		$db = dbConn::getConnection();
		$id=BoatsId::getLastId();
	    $newId=$id+1;
	    $resize = new resizeImage($_FILES['foto']['tmp_name']);                         
	    $resize->resizeTo(200,200,'exact');
	    $resize->saveImage('Image/'.$newId.'.jpg');
		
		$query=$db->connection->prepare("insert into boats(name,description,price,phone,category_id,product_status) values(:name,:description,:price,:phone,:category_id,1)");
		$query->bindParam(':name',$_POST['boat_name']);
        $query->bindParam(':description',$_POST['description']);
		$query->bindParam(':price',$_POST['price']);
		$query->bindParam(':phone',$_POST['phone']);
		$query->bindParam(':category_id',$_POST['category_id']);
	    $query->execute();
		
		$message[]="Čamac je ubacen";
  	}
	
if(isset($_POST['boat_insert'])){
  		if(isset($message) && count($message) > 0){
		foreach ($message as $item) {
			echo "<p>{$item}</p>";
		}
	  }
  	}


?>

<div class="nav-back">
	<a href="admin.php">Back</a>
</div>

<?php
	include 'footer.php';
?>