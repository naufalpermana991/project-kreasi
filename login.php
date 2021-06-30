<?php
require_once("koneksi.php");

//filter data yang diinput
if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM hotel WHERE username=:username OR email=:email";
    $stmt=$db->prepare($sql);

    //bind parameter ke query
    $params = array(
      ":username" => $username,
      ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //jika user terdaftar
    if ($user) {
        //verifikasi password
        if (password_verify($password, $user["password"])) {
            //buat Session
            session_start();
            $_SESSION["user"]=$user;
            //login sukses, diarahkan ke halaman utama
            header("Location: index_afterlogin.php");
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="styles/styles.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container mt-5">
      <center>
        <h2 style="font-weight: 600;">Silahkan Login</h2>
        <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>

        <form action="" method="POST">
          <div class="form-group col-7">
            <label for="username" style="font-weight: 600;">Username</label>
            <input
              type="text"
              class="form-control"
              name="username"
              placeholder="Username"
            />
          </div>
          <div class="form-group col-7">
            <label for="password" style="font-weight: 600;">Password</label>
            <input
              type="password"
              class="form-control"
              name="password"
              placeholder="Password"
            />
          </div>
          <button
            type="button"
            class="btn btn-secondary ml-3 px-3 tombol-secondary"
            value="Login"
            onclick="index()"
          >
            Kembali
          </button>
          <script>
            function index() {
              location.href = "index.php";
            }
          </script>
          <input
            type="submit"
            class="btn btn-primary mr-3 ml-2"
            name="login"
            value="Login"
          />
        </form>
      </center>
    </div>
  </body>
</html>
