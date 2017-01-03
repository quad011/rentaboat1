
	<?php 
	require "config.php";
	include 'head.php'; 
	?>

<body>

	<wrapper> <!--WRAPPER-->

		<?php include 'header.php'; ?>
		
		
		<div id="main"> <!---MAIN-->

			<?php include 'navbar.php'; ?>

			<?php include 'flexslider.php'; ?>
		
		


		<div class="list">

			<?php
					$db = dbConn::getConnection();
					    $q = $db->connection->prepare("select * from category where category_status=1");
				        $q->execute();
				        $q->setFetchMode(PDO::FETCH_OBJ);
				        $rows=$q->fetchAll();
				        foreach ($rows as $row) {
				        	echo "<ul><li><a href='{$row->category_name}.php'>{$row->category_name}</a></li></ul>";
				        }
			?>	

		</div>



		<div id="gallery">
		
			<?php
				$db = dbConn::getConnection();
				    $q = $db->connection->prepare("SELECT * FROM `boats` WHERE category_id=1 and product_status=1 ");
					$q->execute();
					$q->setFetchMode(PDO::FETCH_OBJ);
					$rows=$q->fetchAll();
						foreach($rows as $row) {
							 echo "
							 <div class='img'>
							 
							 <h2>{$row->name}</h2>
							 <img src='./image/{$row->boats_id}.jpg' alt='' style='width:270px; height:200px;'>
							 <p>{$row->description}</p>
							 <p>{$row->price}&euro; per day</p>
							 <p>Phone:{$row->phone}</p>
							 
							 </div>";
			    
						}
			?>

		</div>




			
</div><!---MAIN END-->

		<?php include 'footer.php'; ?>		

</wrapper><!---WRAPPER-END-->

</body>

</html>
