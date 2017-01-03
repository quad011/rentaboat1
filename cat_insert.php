<?php
	
	require "config.php";

	include 'head.php';
	include 'header.php';
	include 'navbar.php';
	include 'flexslider.php';
	$message = Array();

	$_POST = array_map('trim', $_POST);
 
  
  if(isset($_POST['category_name']) && strlen($_POST['category_name'])<3 ){
	    $message[]=" *Ime kategorije mora imati najmanje 4 karaktera";
  }
	

?>


<form method="POST" action="">
	
	<p>Category:</p>
	<input type="text" name="category_name"><br><br>
	<input type="submit" name="category_insert" value="add new" class="btn">

</form>


<?php 

if(isset($_POST['category_insert']) && count($message)==0){


$db = dbConn::getConnection();

	$q = $db->connection->prepare("INSERT INTO category(category_name,category_status) values (:category_name,1)");
	$q->bindParam(':category_name',$_POST['category_name']);
	$q->execute();
	$message[]="kategorija je ubačena";


}

if(isset($_POST['category_insert'])){
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