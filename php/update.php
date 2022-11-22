<?php

include 'connect.php';
$id = $_GET['updateid'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paket = $_POST["paket"];
    $tanggal = $_POST["tanggal"];
   
        $sql = "update registrasi set paket='$paket', tanggal='$tanggal' where id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result){
            header('location:history.php');
        } else {
            die(mysqli_error($conn));
        }
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Selamat Datang Di Website Kami</title>
</head>
<body>
    <main>
        <section class="reserve">
            <div>
                <h1>Formulir Pemesanan</h1>
            </div>
            <form id="formres" method="POST">
                <label>Paket</label><br>
                <select name="paket">
                    <option value="sakinah">Paket Sakinah</option>
                    <option value="mawadah">Paket Mawadah</option>
                    <option value="warahmawah">Paket Warahmawah</option>
                    <option value="silahkan"selected>--silahkan dipilih--</option>
                </select><br>
                <label>Tanggal Pemesanan</label><br>
                <input type="date" name="tanggal"><br>
            </form>

            <div class="reserv-btn">
                <div class="wrapper">
                    <a href="../php/history.php">
                        <button type="submit" class="back">Kembali</button>
                    </a>
                    <a href="../php/history.php">
                    <button type="submit" class="book" form="formres">Update Pesanan</button>
                    </a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

