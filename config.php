<?php
$host = "localhost";
$user = "root";
$pass = ""; // Laragon biasanya tiada password
$db = "jadual_pengawas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}
?>
