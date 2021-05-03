<?php $conn = mysqli_connect("localhost","root","","daftarmhs"); ?>
 ?>
      <?php
        session_start();
        if (empty($_SESSION['user'])) {
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Form</title>
      <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="container">
<form action="" method="post">
    <h1 align="center">FORM REGISTRASI</h1>
    <hr>
    <p><b>Isilah Kolom Registrasi dibawah ini</b></p>
<table>
    <tr>
        <td valign="top">Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
    </tr>
    <tr>
        <td valign="top">Username</td>
        <td>:</td>
        <td><input type="text" name="username" placeholder="Masukan username"></td>
    </tr>
    <tr>
        <td valign="top">Password</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="Password"></td>
    </tr>
    <tr>
        <td valign="top">Email</td>
        <td>:</td>
        <td><input type="email" name="email" placeholder="Masukan email"></td>
    </tr>
    <tr>
        <td valign="top">Jenis_Kelamin</td>
        <td>:</td>
        <td>
            <input type="radio" name="l">Pria<br />
            <input type="radio" name="p">Perempuan
        </td>
    </tr>
    </div>
    <tr>
        <td colspan="2"><input type="submit" value="Simpan"></td>
    </tr>
    </form>
    </table>

</body>
</html>

<?php
if isset($_POST['daftar']) {
      $nama = $_POST['nama'];
      $username = $_POST["username"];
      $password = md5($_POST["password"]);
      $email = $_POST['email'];
      $Jenis_Kelamin = $_POST['Jenis_Kelamin'];

        $sql="INSERT INTO registrasi (nama. username, password, email, Jenis_Kelamin)
        VALUES ('$nama','$username','$password', '$email', '$Jenis_Kelamin')";
        $result=$conn->query($sql);
        if ($result == true) {
            echo "<script> alert('berhasil mendaftar');</script>";
        } else {
            echo "<script> alert('gagal mendaftar');</script>";
        }
    echo "<script> location='login.php' </script>";
  }
 ?>

<?php } else { header("location: dashboard.php");} ?>