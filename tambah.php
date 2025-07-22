<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugasan Pengawas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Tugasan Baru</h2>
    <form method="post">
        <label>Nama Pengawas:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Tarikh:</label><br>
        <input type="date" name="tarikh" required><br><br>

        <label>Masa:</label><br>
        <input type="text" name="masa" required placeholder="Contoh: 7.00 - 7.30 pagi"><br><br>

        <label>Lokasi:</label><br>
        <input type="text" name="lokasi" required><br><br>

        <button type="submit">Simpan Tugasan</button>
    </form>
    <br>
    <a href="index.php">← Kembali ke Jadual</a>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tarikh = $_POST['tarikh'];
        $masa = $_POST['masa'];
        $lokasi = $_POST['lokasi'];

        $sql = "INSERT INTO tugasan (nama_pengawas, tarikh, masa, lokasi)
                VALUES ('$nama', '$tarikh', '$masa', '$lokasi')";

        if ($conn->query($sql)) {
            echo "<p><strong>✅ Tugasan berjaya ditambah.</strong></p>";
        } else {
            echo "<p><strong>❌ Ralat:</strong> " . $conn->error . "</p>";
        }
    }
    ?>
</body>
</html>
