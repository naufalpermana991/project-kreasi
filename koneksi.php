<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="uas_pemrogramanweb";

try {
    //buat koneksi dengan method PDO
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch (PDOException $e) {
    //memunculkan error apabila terjadi gagal koneksi
    die("Terjadi kesalahan : " . $e->getMessage());
}

?>