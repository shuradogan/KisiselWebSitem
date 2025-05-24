<?php
$dogru_kullanici = "b2412100001@sakarya.edu.tr";
$dogru_sifre = "b2412100001";

if ($_POST) {
    $email = $_POST['email'];
    $sifre = $_POST['password'];

    if ($email == $dogru_kullanici && $sifre == $dogru_sifre) {
        echo "<h1 style='text-align:center; margin-top:50px;'>Hoşgeldiniz $sifre 🎉</h1>";
    } else {
        header("Location: login.html");
        exit();
    }
}
?>

