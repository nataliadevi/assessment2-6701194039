<html>
<head>
    <title>Index</title>
</head>
<body>

    <h1> <b>Login Form</h1><b>
    <link rel="stylesheet" type="text/css" href="css.css">

    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal, Username atau Password Salah!";
            }
            else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
    ?>
    <br/>
    <form method="POST" action="dashboard.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="Username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="Password" name="Password" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>
</html>