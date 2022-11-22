<?php

include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nomer = $_POST["nomer"];
    $paket = $_POST["paket"];
    $tanggal = $_POST["tanggal"];
    // if(strlen( $nama) <= 3)
    //     $errorname = "Nama kurng panjang";
    //     else $errorname = "";
    // Create connectio
        $stmt = $conn->prepare("insert into registrasi(nama,email,nomer,paket,tanggal) value(?,?,?,?,?)");
        $stmt -> bind_param("sssss", $nama, $email, $nomer, $paket, $tanggal);
        $stmt->execute();
        echo "registrasi Berhasil";
        header('location:index.php');
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
                <label>Nama</label><br>
                <input type="text" name="nama" size="40%"><br>   
                <label>E-mail</label><br>
                <input type="email" name="email" size="40%"><br>
                <label>Nomor WA</label><br>
                <input type="text" name="nomer" size="40%"><br>
                <label>Paket</label><br>
                <select name="paket">
                    <option value="sakinah">Paket Sakinah</option>
                    <option value="mawadah">Paket Mawadah</option>
                    <option value="warahmawah">Paket Warahmawah</option>
                    <option value="silahkan"selected>--silahkan dipilih--</option>
                </select><br>
                <label>Tanggal Pemesanan</label><br>
                <input type="date" name="tanggal"><br>
                <div class="reserv-btn">
                    <div class="wrapper">
                        <a href="../php/index.php">
                            <button type="submit" class="back">Kembali</button>
                        </a>
                        <a href="../php/index.php">
                        <button type="submit" class="book" form="formres">Pesan Sekarang</button>
                        </a>
                    </div>
                </div>
            </form>

            
        </section>
    </main>
</body>
</html>

