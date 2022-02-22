<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Menu</title>
  </head>
<?php include 'connection.php';?>
<?php include 'header.php';?>

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