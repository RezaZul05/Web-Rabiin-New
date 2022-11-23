<?php

include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

    // Create connectio
        $stmt = $conn->prepare("insert into paket(nama,harga) value(?,?)");
        $stmt -> bind_param("ss", $nama, $harga);
        $stmt->execute();
        echo "Input Success";
        header('location:tabelPaket.php');
        $stmt->close();
        $conn->close();
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Selamat Datang Di Website Kami</title>
</head>
<body>
    <main>
        <section class="reserve">
            <div>
                <h1>Tambah Paket</h1>
            </div>
            <form id="formres" method="POST"> 
                <label>Nama Paket</label><br>
                <input type="text" name="nama" size="40%"><br>
                <label>Harga</label><br>
                <input type="text" name="harga" size="40%"><br>
                <div class="reserv-btn">
                    <div class="wrapper">
                        <a href="./crud/index.php">
                            <button type="submit" class="back">Kembali</button>
                        </a>
                        <a href="./crud/index.php">
                        <button type="submit" class="book" form="formres">Tambah</button>
                        </a>
                    </div>
                </div>
            </form>

            
        </section>
    </main>
</body>
</html>

