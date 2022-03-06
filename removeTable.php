<?php 

	include("db.php");


	function removeTable($conn , $num) { // function to add to table 

		if ($conn->query("delete from table_entity where table_id = $num;") === TRUE) {
						// SQL query 
		  header("Location:admintables.php");
		} else {
		  echo "Error: " . "delete from table_entity where table_id = $num" . "<br>" . $conn->error;
		}
	}

	if(isset($_POST["id"])) {
		removeTable($link, $_POST['id']);
	}


?>