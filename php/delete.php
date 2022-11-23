<?php
    include 'connect.php';
    if (isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql = "delete from registrasi where id=$id";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header('location:history.php');
        }else {
            die(mysqli_error($conn));
        }
    }


?>