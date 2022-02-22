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
<?php include 'connection.php';
      include 'header1.php';
if(isset($_POST['submit'])){
    $itemname = $_POST['itemname'];
    $ingridients =$_POST['ingridients'];
    $price =$_POST['price'];
    $sql="INSERT INTO `menu`(item_name,item_ingredients,item_price)  values('$itemname','$ingridients','$price')";  
    $result = mysqli_query($con,$sql);
    if($result){
        echo "data added successfully ";

    }else{
        die(mysqli_error($con));
    }
}

?>
<form method = "post">

<label  class="form-label">Item name</label>
    <input type="text"  class="form-control"placeholder="Enter item name" name="itemname" >
    
<label  class="form-label">Ingridients</label>
    <input type="text"  class="form-control"placeholder="Ingridients" name="ingridients">
    
     
<label  class="form-label">Price</label>
    <input type="number"  class="form-control"placeholder="Amount" name="price">
    
    
    <button type="submit"  class="btn btn-primary"name = "submit">Submit</button>
  
  
  </form>