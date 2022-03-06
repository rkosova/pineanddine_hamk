<?php

$con = new mysqli('db', 'root', 'password', 'menu');


if (!$con) {
    die(mysqli_error($con));
}
