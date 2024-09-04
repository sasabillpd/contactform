<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Terkirim</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Data Terkirim</h2>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "form_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "SELECT name, nim, prodi, email, message, phone, address, gender, reg_date FROM contacts";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table'><thead><tr><th>Nama</th><th>NIM</th><th>Prodi/Kelas</th><th>Email</th><th>Pesan</th><th>Telepon</th><th>Alamat</th><th>Jenis Kelamin</th><th>Tanggal Kirim</th></tr></thead><tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . htmlspecialchars($row["name"]) . "</td><td>" . htmlspecialchars($row["nim"]) . "</td><td>" . htmlspecialchars($row["prodi"]) . "</td><td>" . htmlspecialchars($row["email"]) . "</td><td>" . htmlspecialchars($row["message"]) . "</td><td>" . htmlspecialchars($row["phone"]) . "</td><td>" . htmlspecialchars($row["address"]) . "</td><td>" . htmlspecialchars($row["gender"]) . "</td><td>" . htmlspecialchars($row["reg_date"]) . "</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p>Tidak ada data ditemukan.</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
