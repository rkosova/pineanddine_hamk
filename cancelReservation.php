<?php 

	include("db.php");

	function cancelReservation($conn , $num) {  

		if ($conn->query("delete from table_reservation where table_id = $num;") === TRUE) {
						// SQL query 
		  header("Location:admintables.php");
		} else {
		  echo "Error: " . "delete from table_reservation where table_id = $num" . "<br>" . $conn->error;
		}
	}


	if(isset($_POST["id"])) {
		cancelReservation($link, $_POST['id']);
	}


?>