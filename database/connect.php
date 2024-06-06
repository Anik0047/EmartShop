<?php

$conn = mysqli_connect('localhost', 'root', '', 'emart_shop');
if (!$conn) {
    die(mysqli_connect_error($conn));
}
