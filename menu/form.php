<?php include 'connection.php';

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
    <input type="text"  placeholder="Enter item name" name="itemname" >
    
<label  class="form-label">Ingridients</label>
    <input type="text"  placeholder="Ingridients" name="ingridients">
    
     
<label  class="form-label">Price</label>
    <input type="number"  placeholder="Amount" name="price">
    
    
    <button type="submit"  name = "submit">Submit</button>
  
  
  </form>