<?php
    $conn = new mysqli('localhost', 'root', '', 'data-wedding');
    if(!$conn){
        die(mysqli_error($conn));
    }

?>