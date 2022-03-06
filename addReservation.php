<?php 

	include("db.php");

	function addReservation($conn , $fn, $ln, $pn, $email, $dateofr, $timeofr, $adults, $children) { // function to add to table 

		$att = $adults + $children;
		$tid = NULL;

		$result = $conn->query("select table_entity.table_id, table_entity.num_of_chairs ,table_reservation.date_of_res
							from table_entity left join table_reservation
								on table_entity.table_id = table_reservation.table_id
							where table_reservation.table_id is null;
							");

		while($row = mysqli_fetch_array($result)) {

			if (($dateofr != $row["date_of_res"]) and ($att <= $row["num_of_chairs"])) {
				$tid = $row["table_id"];
					
				if (mysqli_query($conn, "insert into table_reservation (table_id, customer_fn, customer_ln, phone_number, email, date_of_res, time_of_res, attendants) values ($tid, '$fn', '$ln', '$pn', '$email', '$dateofr', '$timeofr', $att);") === TRUE) {
						// SQL query 
		 			 header("Location:reservetable.php");
				} else {
		 			 echo "Error: " . "<br>" . mysqli_error($conn);
				}
				break;
			}
		}
	}

	if(isset($_POST["fname"])) {
		addReservation($link, $_POST['fname'], $_POST['lname'], $_POST['number'], $_POST['email'], $_POST['date'], $_POST['time'], $_POST['adults'],$_POST['children']);
	}


?>