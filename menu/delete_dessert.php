<?php

include 'db.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM dessert where item_id =$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Deleted successfully";
        header('location:viewmenu.php');
    } else {
        die(mysqli_error($con));
    }
}
