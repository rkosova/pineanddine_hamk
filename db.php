<?php 

    $link = mysqli_connect("172.20.0.2", "root", "password", "pinedine"); 
                        // phpmyadmin ip
    if($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
 ?>