<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tugasan WHERE id = $id";

    if ($conn->query($sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Ralat semasa padam tugasan: " . $conn->error;
    }
} else {
    echo "ID tugasan tidak sah!";
}
?>
