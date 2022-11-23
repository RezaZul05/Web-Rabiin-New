<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Di Website Kami</title>
    <?php
        include 'connect.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $nomer = $_POST["nomer"];
            $paket = $_POST["paket"];
            $tanggal = $_POST["tanggal"];
            $stmt = $conn->prepare("insert into registrasi(nama,email,nomer,paket,tanggal) value(?,?,?,?,?)");
            $stmt -> bind_param("sssss", $nama, $email, $nomer, $paket, $tanggal);
            $stmt->execute();
            echo "registrasi Berhasil";
            header('location:index.php');
            $stmt->close();
        }
        
        $sql = "SELECT `id`, `nama`, `harga` FROM paket";
        $result = $conn->query($sql);
    ?>
    <style>
        body{
            background: #1690a7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        *{
            font-family: sans-serif;
            box-sizing: border-box;
        }
        h2{
            text-align: center;
            margin-bottom: 40px;
        }
        form{
            width: 500px;
            border: 2px solid #ccc;
            padding: 50px;
            background: #fff;
            border-radius: 15px;
        }
        input{
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
        }
        label{
            color: #888;
            font-size: 18px;
            padding: 10px;
        }
        .reserve form input select{
            width:max-content;
            border: none;
            padding: 8px 10px;
            margin-bottom: 20px;
            background-color: transparent;
            border-bottom: 5px solid #000;
            color: rgb(255, 255, 255);
        }
        button{
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-left: 60px;
            border: none;
        }
        button:hover{
            opacity: .7;
        }
        
    </style>
</head>
<body>
    <main>
        <section class="reserve">
            <form id="formres" method="POST"> 
                <h1>Formulir Pemesanan</h1>
                <label>Nama</label><br>
                <input type="text" name="nama" size="40%"><br>   
                <label>E-mail</label><br>
                <input type="email" name="email" size="40%"><br>
                <label>Nomor WA</label><br>
                <input type="text" name="nomer" size="40%"><br>
                <label>Paket</label><br>
                <select name="paket">
                <option value=""selected>--silahkan dipilih--</option>
                <?php
                    if ($result && $result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='".$row["id"]."'>".$row["nama"]."</option>";
                        }
                    }
                    ?>
                </select><br>
                <label>Tanggal Pemesanan</label><br>
                <input type="date" name="tanggal"><br>
                <div class="reserv-btn">
                    <div class="wrapper">
                        <a href="./index.php">
                            <button type="submit" class="back">Kembali</button>
                        </a>
                        <a href="./index.php">
                        <button type="submit" class="book" form="formres">Pesan Sekarang</button>
                        </a>
                    </div>
                </div>
            </form>  
        </section>
    </main>
</body>
</html>

