<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <?php
    include 'connect.php';
    error_reporting(0);
 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {    
        $nama = $_POST['uname'];
        $password = $_POST['password'];
    
        $sql = "select * from admin where nama='$nama' and password='$password'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            header("Location: pilihanAdmin.php");
        } else {
            echo "<script>alert('Nama atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }   
    // if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //     $uname = $_POST['uname'];
    //     $pass = $_POST['password'];
    //     $stmt = $conn->prepare("select * from admin where nama = ?");
    //     $stmt->bind_param("s", $uname);
    //     $stmt-> $stmt->execute();
    //     $stmt_result = $stmt->get_result();
    //     if ($stmt_result->num_rows > 0) {
    //         $data = $stmt_result->fetch_assoc();
    //         if($data['password'] === $pass){
    //             echo "<h2>Login Successfully</h2>";
    //             header('location:pilihanAdmin.php');
    //         } else {
    //             echo "<h2> Invalid username or password</h2>";
    //         }
    //     } else {
    //         echo "<h2> Invalid username or password</h2>";
    //     }
    // }

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
            padding: 30px;
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
        button{
            float: right;
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            border: none;
        }
        button:hover{
            opacity: .7;
        }
    </style>
</head>
<body>
<div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
    <form method="POST">
        <h2>LOGIN</h2>
        <label for="">Username</label>
        <input type="text" name="uname" placeholder="Username" required><br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>