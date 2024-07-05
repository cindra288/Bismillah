<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - MindWell Clinic</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Admin - MindWell Clinic</h1>
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
            <h2>Daftar Janji Konsultasi</h2>
            <?php
            // Membaca file janji_temu.txt dan menampilkannya
            $file = "janji_temu.txt";
            if (file_exists($file)) {
                $data = file_get_contents($file);
                $appointments = explode("\n\n", $data);

                foreach ($appointments as $appointment) {
                    echo "<div class='appointment'>";
                    echo nl2br($appointment); // Menampilkan data dengan mempertahankan baris baru
                    echo "</div>";
                }
            } else {
                echo "<p>Belum ada janji konsultasi yang dibuat.</p>";
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
