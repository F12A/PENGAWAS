<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Jadual Tugasan Pengawas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jadual Tugasan Pengawas</h1>
    <a href="tambah.php" class="btn">+ Tambah Tugasan</a>
    <table>
        <tr>
            <th>Nama</th>
            <th>Tarikh</th>
            <th>Masa</th>
            <th>Lokasi</th>
            <th>Tindakan</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM tugasan ORDER BY tarikh ASC");
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['nama_pengawas']}</td>
                <td>{$row['tarikh']}</td>
                <td>{$row['masa']}</td>
                <td>{$row['lokasi']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='padam.php?id={$row['id']}' onclick='return confirm(\"Padam tugasan ini?\")'>Padam</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
