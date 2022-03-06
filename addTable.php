<?php 

	include("db.php");


	function addTable($conn , $num) { // function to add to table 

		if ($conn->query("insert into table_entity (num_of_chairs) values ($num);") === TRUE) {
						// SQL query 
		  header("Location:admintables.php");
		} else {
		  echo "Error: " . "insert into table_entity($num)" . "<br>" . $conn->error;
		}
	}

	if(isset($_POST["chairs"])) {
		addTable($link, $_POST['chairs']);
	}

?>