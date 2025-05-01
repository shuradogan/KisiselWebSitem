<?php
$email = $_POST['email'];
$sifre = $_POST['sifre'];

$dogru_email = "b2412100001@sakarya.edu.tr";
$dogru_sifre = "b2412100001";

if ($email == $dogru_email && $sifre == $dogru_sifre) {
    echo "<h2>Hoþgeldiniz $sifre</h2>";
} else {
    header("Location: login.html");
    exit();
}
?>
