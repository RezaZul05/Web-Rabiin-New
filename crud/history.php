<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        .back{
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-left: 15px;
            margin-bottom: 10px;
            border: none;
        }
        .back:hover{
            opacity: .7;
        }
        th{
            background-color: #588c7e;
            color: #fff;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>
    <a href="./pilihanAdmin.php"><button class="back">Kembali</button></a>
    <table>
        <th>Id</th>
        <th>Nama</th>
        <th>E-mail</th>
        <th>Nomer</th>
        <th>Paket</th>
        <th>Tanggal</th>
        <th>Operations</th>
        
        <?php
            include 'connect.php';
            $sql = "select * from registrasi";
            $result = $conn->query($sql);

            if ($result-> num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                    <td>'. $row['id'].'</td>
                    <td>'. $row['nama'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['nomer'].'</td>
                    <td>'. $row['paket'].'</td>
                    <td>'.$row['tanggal'].'</td>
                    <td>
                    <button><a href="update.php?updateid='.$row['id'].'">Update</a></button>
                    <button><a href="delete.php?deleteid='.$row['id'].'">Delete</a></button>
                    </td>
                </tr>'; 
            }
            echo "</table>";
        } else {
            
        }
        $conn -> close();
        ?>
    </table>
</body>
</html>