<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/contact.css">
	<title>Contact</title>
</head>

<body>
    <?php include("./header_footer/header.php")?>

    <div class="header-one">
        <h1>Contact us!</h1>
    </div>

    <div class="header-two">
        <h2>How to get in touch?</h2>
        <p>This section only proves that you are approachable and ready to accept reviews and prior bookings.People love to be associated with
            businesses that are friendly and communicate well.Encourage them to get in touch with you.
        </p>
    </div>

    <div class="row">
        <div class="col-md-6" id="leftside">
            <h4>ADDRESS</h4>
            <p>Aleksanterinkatu 12234, Helsinki-Finland</p>

            <h4>PHONE NUMBER</h4>
            <p>+3587235482921
            <br>+3587263273271</p>

            <h4>EMAIL ADDRESS</h4>
            <p>pineanddine@pdgroup.fi</p>

            <h4>HOURS</h4>
            <p>MONDAY-THURSDAY 
            <br>17.30-11.30
            <br>FRIDAY-SATURDAY
            <br>17.00-01.00</p>

            <h4>Follow us!</h4>
            <img class="fb" src="./images/fbwhite.png" height="35px" width="35px">
			<img src="./images/igwhite.png" height="45px" width="45px">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127248.38967100704!2d24.878257254973178!3d60.11026054812121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46920bc796210691%3A0xcd4ebd843be2f763!2sHelsinki!5e0!3m2!1sen!2sfi!4v1652396046102!5m2!1sen!2sfi" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="col-md-6" id="rightside">
                <div class="firstrow">
                    <input class="half" id="name" type="text" placeholder="Your name"></input>
                    <input class="half" id="email" type="text" placeholder="Your email"></input>
                </div>
                <div class="secondrow">
                    <input class="full" placeholder="Subject"></input>
                </div>
                <div class="thirdrow">
                    <textarea class="full" id="msg" placeholder="Message"></textarea>
                </div>
                <div class="fourthrow">
                    <button>Send Message</button>
                </div>

        </div>
    </div>

    <?php include("./header_footer/footer.php") ?>

</body>

</html>