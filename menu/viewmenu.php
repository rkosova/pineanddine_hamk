<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('header.php') ?>
    <?php include('db.php') ?>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        * {
            box-sizing: border-box
        }

        /* Set height of body and the document to 100% */
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial;
            background-color: #FFF3E9;
        }

        /* Style tab links */
        .tablink {
            background-color: #555;
            color: white;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            font-size: 17px;
            width: 25%;
        }

        .footer {

            background-color: #353246;
            padding: 2% 0;
            color: snow;
            display: flex;
            flex-wrap: wrap-reverse;
            flex-direction: row;
            justify-content: space-between;
            position: relative;
        }

        .footer-text {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0 5%;

        }

        #socials img {
            flex: 1;
            align-self: center;
            width: 35px;
            height: 35px;
        }

        .tablink:hover {
            background-color: #777;
        }

        /* Style the tab content (and add height:100% for full page content) */
        .tabcontent {
            color: black;
            display: none;
            padding: 100px 20px;
            height: 100%;
        }

        #Home {
            background-color: cadetblue;
        }

        #News {
            background-color: lightgreen;
        }

        #Contact {
            background-color: palegoldenrod;
        }

        #About {
            background-color: lightsalmon;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }



        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            color: black;
    </style>
</head>

<body>
    <button class="tablink" onclick="openPage('Home', this, 'cadetblue')">Breakfast</button>
    <button class="tablink" onclick="openPage('News', this, 'lightgreen')" id="defaultOpen">Lunch</button>
    <button class="tablink" onclick="openPage('Contact', this, 'palegoldenrod')">Dinner</button>
    <button class="tablink" onclick="openPage('About', this, 'lightsalmon')">Deserts</button>

    <div id="Home" class="tabcontent">
    <h3>Breakfast</h3>
    <p>Say good morning to your body eat breakfast!</p>
        <button> <a href="add_breakfast.php"> Add breakfast </a> </button>
        <table id="customers">
            <thead>
                <tr>
                    <th scope="col">Item name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql =   "SELECT * FROM `breakfast`";
                $result = mysqli_query($con, $sql);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $itemname = $row['item_name'];
                        $price = $row['item_price'];
                        $id = $row['item_id'];


                        echo '<tr>
             <th scope="row">' . $itemname . '</th>
             <td>' . $price . '</td>
             
            
             <td>
             <button class="btn btn-primary" >  <a href= "update_breakfast.php?updateid=' . $id . '" class= "text-light"> update </a>  </button>
             <button class="btn btn-primary" >  <a href= "delete_breakfast.php?deleteid=' . $id . '" class= "text-light"> delete </a>  </button>
             </td>
           </tr>';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>

    <div id="News" class="tabcontent">
        <h3>Lunch</h3>
        <p>Lunchtime, if breakfast's not enough.</p>
        <button> <a href="add_lunch.php"> Add lunch </a> </button>
        <table id="customers">
            <thead>
                <tr>
                    <th scope="col">Item name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql =   "SELECT * FROM `lunch`";
                $result = mysqli_query($con, $sql);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $itemname = $row['item_name'];
                        $price = $row['item_price'];
                        $id = $row['item_id'];


                        echo '<tr>
             <th scope="row">' . $itemname . '</th>
             <td>' . $price . '</td>
             
            
             <td>
             <button class="btn btn-primary" >  <a href= "update_lunch.php?updateid=' . $id . '" class= "text-light"> update </a>  </button>
             <button class="btn btn-primary" >  <a href= "delete_lunch.php?deleteid=' . $id . '" class= "text-light"> delete </a>  </button>
             </td>
           </tr>';
                    }
                }
                ?>


            </tbody>
        </table>

    </div>

    <div id="Contact" class="tabcontent">
        <h3>Dinner</h3>
        <p>Try the best pizza's in town.</p>
        <button> <a href="add_dinner.php"> Add dinner </a> </button>
        <table id="customers">
            <thead>
                <tr>
                    <th scope="col">Item name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql =   "SELECT * FROM `dinner`";
                $result = mysqli_query($con, $sql);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $itemname = $row['item_name'];
                        $price = $row['item_price'];
                        $id = $row['item_id'];



                        echo '<tr>
             <th scope="row">' . $itemname . '</th>
             <td>' . $price . '</td>
             
            
             <td>
             <button class="btn btn-primary" >  <a href= "update_dinner.php?updateid=' . $id . '" class= "text-light"> update </a>  </button>
             <button class="btn btn-primary" >  <a href= "delete_dinner.php?deleteid=' . $id . '" class= "text-light"> delete </a>  </button>
             </td>
           </tr>';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>

    <div id="About" class="tabcontent">
        <h3>dessert</h3>
        <p>Order delicious dessert.</p>
        <button> <a href="add_dessert.php"> Add dessert </a> </button>
        <table id="customers">
            <thead>
                <tr>
                    <th scope="col">Item name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql =   "SELECT * FROM `dessert`";
                $result = mysqli_query($con, $sql);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $itemname = $row['item_name'];
                        $price = $row['item_name'];
                        $id = $row['item_id'];


                        echo '<tr>
             <th scope="row">' . $itemname . '</th>
             <td>' . $price . '</td>
             
            
             <td>
             <button class="btn btn-primary" >  <a href= "update_dessert.php?updateid=' . $id . '" class= "text-light"> update </a>  </button>
             <button class="btn btn-primary" >  <a href= "delete_dessert.php?deleteid=' . $id . '" class= "text-light"> delete </a>  </button>
             </td>
           </tr>';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>



    <script>
        function openPage(pageName, elmnt, color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</body>

<div class="footer">
    <div class="footer-text" id="location">
        <p>LOCATION
            <br>
            <br>Finland- Helsinki-
            <br> Aleksanterinkatu 12234
        </p>
    </div>

    <div class="footer-text" id="hours">
        <p>HOURS
            <br>
            <br>MONDAY-THURSDAY
            <br>17.30-11.30
            <br>FRIDAY-SATURDAY
            <br>17.00-01.00
        </p>
    </div>

    <div class="footer-text" id="contact">
        <p>CONTACT US
            <br>
            <br>+3587235482921
            <br>+3587263273271
            <br>
            <br>pineanddine@pdgroup.fi
        </p>
    </div>

    <div class="footer-text" id="socials">
        <img src="./images/fbwhite.png">
        <img src="./images/igwhite.png">
    </div>
</div>

</html>