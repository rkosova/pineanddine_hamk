<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php include 'db.php';
    ?>
</head>
<?php

include 'db.php';

$id = $_GET['updateid'];

$sql = "Select * from  `lunch` where item_id=$id";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);

$itemname = $row['item_name'];

$price = $row['item_price'];
if (isset($_POST['submit'])) {
    $itemname = $_POST['itemname'];
    $price = $_POST['price'];


    $sql = "UPDATE `lunch`SET item_id= $id, item_name='$itemname',item_price='$price' where item_id=$id";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "data added successfully";
    } else {
        die(mysqli_error($con));
    }
}
?>
<div class="container my-8">

    <button class="btn btn-primary"> <a href="viewmenu.php" class="text-light"> Exit </a>

    </button>

</div>
<form name="addlunch" method="post">

    <div class="mb-5">
        <label class="form-label">Item name</label>
        <input type="text" class="form-control" placeholder="Enter item name " name="itemname">

    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" placeholder="Price" name="price">

    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>