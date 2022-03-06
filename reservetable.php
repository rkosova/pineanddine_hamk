<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/reserve.css">
	<title>Reserve a Table</title>
</head>
<body>

    <?php include("./header_footer/header_black.php")?>

	<div class="body">
		<div class="contact">
			<form action="/addReservation.php" method="post">
				<div class="firstrow">
					<input class="half" id="fname" name="fname" placeholder="first name"></input>
					<input class="half" id="lname" name="lname" placeholder="last name"></input>
				</div>

				<div class="secondrow">
					<input class="full" name="email" placeholder="email"></input>
				</div>
			
				<div class="thirdrow">
					<input class="full" name="number" placeholder="phone number"></input>
				</div>

				<div class="fourthrow">
					<input class="morehalf" name="date" placeholder="reservation date (dd/mm/yyyy)"></input>
					<input type="time" name="time" class="lesshalf" id="time" placeholder="time"></input>
				</div>
			
				<div class="fifthrow">
					<input class="half" name="adults" placeholder="# of adults"></input>
					<input class="half" name="children" placeholder="# of children"id="children"></input>
				</div>
				<div class="sixthrow">
					<button type="submit">
						make a reservation
					</button>
				</div>
			</form>
			
			
			
		</div>

		<div class="num">
			<p>
				table reservation
			</p>
			<ul>
				<li>
					7263273271
				</li>
			</ul>
		</div>
	</div>
	
	<?php include("./header_footer/footer.php")?>

</body>
</html>
