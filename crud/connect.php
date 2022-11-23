<?php
    $conn = new mysqli('localhost', 'root', '', 'db_rabiin');
    if(!$conn){
        die(mysqli_error($conn));
    }

?>