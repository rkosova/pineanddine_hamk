<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/reserve.css">
	<title>Reserve a Table</title>
</head>
<body>

    <?php include("./header_footer/header.php")?>

	<div class="body">
		<div class="contact">
			<div class="firstrow">
				<input class="half" id="fname" placeholder="first name"></input>
				<input class="half" id="lname" placeholder="last name"></input>
			</div>

			<div class="secondrow">
				<input class="full" placeholder="email"></input>
			</div>
			
			<div class="thirdrow">
				<input class="full" placeholder="phone number"></input>
			</div>

			<div class="fourthrow">
				<input class="morehalf" placeholder="reservation date (dd/mm/yyyy)"></input>
				<input type="time" class="lesshalf" id="time" placeholder="time"></input>
			</div>
			
			<div class="fifthrow">
				<input class="half" placeholder="# of adults"></input>
				<input class="half" placeholder="# of children"id="children"></input>
			</div>
			
			<div class="sixthrow">
				<button>
					make a reservation
				</button>
			</div>
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
