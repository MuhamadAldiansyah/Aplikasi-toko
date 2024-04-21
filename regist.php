<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['regist'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM akun WHERE email='$email'";
        $result = mysqli_query($con, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO akun (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                ?>
                <meta http-equiv="refresh" content="0; url=login.php" /> 
                <?php
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Regist</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="./image/logo (2).png" rel="shortcut icon">
</head>
<style>
    .main{
        height: 100vh;
    }

    .login-box{
        width: 80%;
        height: 90%;
        box-sizing: border-box;
        border-radius: 10px;
    }
</style>
<body style="background-color: #EEC373;">
 
<div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow" style="background-color: white;">
            <form action="" method="post">
                <h3>Register</h3>
                <!--Username-->
                <div class="form-outline mb-4">
      <input type="text" name="username" id="username" class="form-control form-control-lg"
        placeholder="Enter a valid Username" />
      <label class="form-label" for="form3Example3">username</label>
    </div>

     <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" name="email" id="email" class="form-control form-control-lg"
        placeholder="Enter a valid email address" />
      <label class="form-label" for="form3Example3">Email address</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-3">
      <input type="password" name="password" id="password" class="form-control form-control-lg"
        placeholder="Enter password" />
      <label class="form-label" for="form3Example4">Password</label>
    </div>

    <div class="form-outline mb-3">
      <input type="password" name="cpassword" id="cpassword" class="form-control form-control-lg"
        placeholder="Enter Confirm password" />
      <label class="form-label" for="form3Example4">Confirm Password</label>
    </div>

    <div class="d-flex justify-content-between align-items-center">
      <!-- Checkbox -->
      <div class="form-check mb-0">
        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
        <label class="form-check-label" for="form2Example3">
          Remember me
        </label>
      </div>
    </div>   
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="login.php"
          class="link-danger">Login</a></p>
                <div>
                    <button class="btn btn-warning form-control mt-3" type="submit" 
                    name="regist" style="color: white;">Regist</button>
                </div>
            </form>
        </div>
       
        </div>
    </div>

    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>