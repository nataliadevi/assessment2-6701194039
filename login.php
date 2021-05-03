
<?php
    session_start();
    include 'admin/koneksi.php';

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <form action="" method="POST">

        <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Masukkan Username" name="uname" required>

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Masukkan Password" name="pass" required>

        <button type="submit">Login</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button"><a href = "registrasi.php">
            Registrasi</a>
            </button>

        </div>
    </form>
</body>
</html>

<?php

		$data = mysqli_query ($koneksi, "SELECT * FROM admin WHERE username= '$username' AND password='$password'";
		$cek = mysqli_num_rows($data);

		if ($cek > 0) {
			$_SESSION['username']=$username;
			$_SESSION['status'] = "login";
			echo "<script>document.location='home.php'
                        </script>";

		} else{
			header ("location : index.php? pesan = gagal");
		}
?>
