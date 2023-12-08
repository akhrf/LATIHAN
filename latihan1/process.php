<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    // Tampilkan hasil
    echo "<h2>Terima kasih, $nama!</h2>";
    echo "<p>Email Anda: $email</p>";
} else {
    // Jika form tidak di-submit, kembalikan ke halaman form
    header("Location: index.html");
    exit();
}
?>