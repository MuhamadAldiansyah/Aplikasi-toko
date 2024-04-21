<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM akun WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("Location: index.php");
        $_SESSION['login'] = true;
        header('location: index.php');
    } else {
        echo "<script>alert('email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="./image/logo (2).png" rel="shortcut icon">
</head>

<style>
    .main{
        height: 100vh;
    }

    .login-box{
        width: 80%;
        height: 80%;
        box-sizing: border-box;
        border-radius: 10px;
        margin-bottom: 20px;
    }
</style>
<body style="background-color: #EEC373 ;">
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow" style="background-color: white;">
            <form action="" method="post">
            <h3>Login</h3>

                    <!-- Email input -->
    <div class="form-outline mb-2 mt-3">
      <input type="email" name="email" id="email" class="form-control form-control-lg"
        placeholder="Masukan Email anda" />
      <label class="form-label" for="form3Example3">Email</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-2">
      <input type="password" name="password" id="password" class="form-control form-control-lg"
        placeholder="Enter password" />
      <label class="form-label" for="form3Example4">Password</label>
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

    <div class="text-center text-lg-start mt-4 pt-2">
      <button type="submit" class="btn btn-primary btn-lg" 
        style="padding-left: 2.5rem; padding-right: 2.5rem;" name="login">Login</button>
      <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="regist.php"
          class="link-danger">Register</a></p>
    </div>
            </form>
        </div>
        <div class="mt-3" style="width: 500px;">
            
        </div>
    </div>
    
</body>
</html>