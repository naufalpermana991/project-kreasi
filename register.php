<?php
require_once("koneksi.php");

if (isset($_POST['register'])) {
  
  //filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    //enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    //menyisipkan query
    $sql = "INSERT INTO hotel (name,username,email,password) VALUES (:name,:username,:email,:password)";
    $stmt = $db->prepare($sql);

    //bind parameter ke query
    $params=array(
      ":name" => $name,
      ":username" => $username,
      ":password" => $password,
      ":email" => $email
    );

    //eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);
    //jika query tersimpan, user berhasil mendaftar
    //lalu diarahkan ke halaman login
    if ($saved) {
        header("Location: login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
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
        <h2 style="font-weight: 600;">Silahkan Daftar</h2>
        <p>Sudah punya akun? <a href="login.php">Login disini</a></p>

        <form action="" method="POST">
          <div class="form-group col-4">
            <label for="namalengkap" style="font-weight: 600;"
              >Nama Lengkap</label
            >
            <input
              type="text"
              class="form-control"
              name="name"
              placeholder="Nama lengkapmu"
            />
          </div>
          <div class="form-group col-4">
            <label for="username" style="font-weight: 600;">Username</label>
            <input
              type="text"
              class="form-control"
              name="username"
              placeholder="Username"
            />
          </div>
          <div class="form-group col-4">
            <label for="email" style="font-weight: 600;">Email</label>
            <input
              type="text"
              class="form-control"
              name="email"
              placeholder="Email"
            />
          </div>
          <div class="form-group col-4">
            <label for="password" style="font-weight: 600;">Password</label>
            <input
              type="password"
              class="form-control"
              name="password"
              placeholder="Password"
            />
          </div>
          <input
            type="submit"
            class="btn btn-primary"
            name="register"
            value="Daftar"
          />
        </form>
      </center>
    </div>
  </body>
</html>
