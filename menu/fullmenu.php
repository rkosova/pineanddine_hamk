<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Menu</title>
    <div class="head">
        <div class="logo">
                    <a href=""><img src="https://raw.githubusercontent.com/rkosova/pineanddine_hamk/master/images/pinelogo.png"></a>
                </div>
                <div class="navbar">
                    <a href="home.html">home page</a>
                    <a href="menu.html">menu</a>
                    <a href="reservetable.html">reserve table</a>
                    <a href="aboutus.html">about us</a>
                    <a href="Contact.html">contact</a>
                </div>
    </div>
    <style>
  .head {
 display: flex;
 align-items: center;
 justify-content: space-between;
}

.logo img{
 width: 100px;
 height: 100px;
}

.navbar {
 flex-basis: 50%;
}

.navbar a{
 font-family: 'Playfair Display', serif;
 font-size: 22px;
 color: black;
 letter-spacing: 0.05em;
 text-decoration: underline 0.15em rgba(0, 0, 0, 0);
   text-underline-offset: 0.2em;
   transition: text-decoration-color 150ms, text-underline-offset 200ms;
   margin-left: 2%;
}

.navbar a:hover {
 text-decoration-color: black;
   text-underline-offset: 0.4em;
}

</style>
  </head>
<?php include 'header1.php';?>
<?php include 'connection.php';?>


<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">item name</th>
      <th scope="col">ingredients</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
  <?php
     $sql=   "SELECT * FROM `menu`";
     $result= mysqli_query($con,$sql);
     if($result){
        while($row=mysqli_fetch_assoc($result)){
            $itemname=$row['item_name'];
            $ingridients=$row['item_ingredients'];
            $price=$row['item_price'];
            echo '<tr>
            <td>'. $itemname.'</td>
            <td>'. $ingridients.'</td>
            <td>'.$price.'</td>
            </tr>';
        }
    }
 ?>
  </tbody>
</table>