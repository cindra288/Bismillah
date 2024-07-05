<?php
// Simpan data janji temu ke file .txt
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $tanggal = htmlspecialchars($_POST["tanggal"]);
    $waktu = htmlspecialchars($_POST["waktu"]);

    // Simpan data ke dalam file .txt
    $file = fopen("janji_temu.txt", "a");
    fwrite($file, "Nama: " . $nama . "\n");
    fwrite($file, "Email: " . $email . "\n");
    fwrite($file, "Tanggal: " . $tanggal . "\n");
    fwrite($file, "Waktu: " . $waktu . "\n\n");
    fclose($file);

    // Redirect atau tampilkan pesan sukses
    header("Location: buat_janji.php?status=sukses");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Janji Konsultasi - MindWell Clinic</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Buat Janji Konsultasi</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="jadwal.php">Jadwal Konsultasi</a></li>
            <li><a href="buat_janji.php">Buat Janji</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Isi Form Janji Konsultasi</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" required><br><br>
                
                <label for="waktu">Waktu:</label>
                <input type="time" id="waktu" name="waktu" required><br><br>
                
                <input type="submit" value="Buat Janji">
            </form>
            
            <?php
            // Tampilkan pesan sukses jika ada
            if (isset($_GET['status']) && $_GET['status'] == 'sukses') {
                echo "<p>Janji konsultasi berhasil dibuat.</p>";
            }
            ?>
        </section>
    </main>
    <footer>
        <p>© 2024 MindWell Clinic. All rights reserved.</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
