<?php 
	
	include("db.php");

	function readTable($conn) {
		$result = $conn->query("select * from table_entity");
		
		while($row = mysqli_fetch_array($result)) {
			$is_res = NULL;

			$q2 = $conn->query("select TE.table_id from table_entity TE where TE.table_id in (select TR.table_id from table_reservation TR)");

			$q2_o = mysqli_fetch_object($q2);

			if($q2_o) {

				if ($row["table_id"] == $q2_o->table_id) {
					$is_res = "Yes";
				}
			} else {
				$is_res = "No";
			}

			echo "<tr><td>".$row["table_id"]."</td>"."<td>".$row["num_of_chairs"]."</td>"."<td>".$is_res."</td>"."</tr>";
		}	
	}

	readTable($link);

?>

