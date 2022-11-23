<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Admin</title>
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
        div{
            width: 500px;
            border: 2px solid #ccc;
            padding: 30px;
            background: #fff;
            border-radius: 15px;
        }
        button{
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-left: 65px;
            border: none;
        }
        button:hover{
            opacity: .7;
        }
    </style>
</head>
<body>
    <div>
        <h2>PILIHAN ADMIN</h2>            
        <a href="./history.php"><button>History Reservasi</button></a>
        <a href="./tabelPaket.php"><button>Data Paket</button></a>
    </div>        
</body>
</html>