<?php
include 'Latihan_09_config.php'; // Memasukkan file konfigurasi untuk koneksi database

// Menangani pengiriman form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nama']) && isset($_POST['pesan'])) {
        $nama = $_POST['nama'];
        $pesan = $_POST['pesan'];

        // Menyimpan data ke database
        $sql = "INSERT INTO buku_tamu (nama, pesan) VALUES ('$nama', '$pesan')";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Pesan berhasil dikirim.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    }
}

// Mengambil data buku tamu
$sql = "SELECT * FROM buku_tamu ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2 class="mb-4">Buku Tamu</h2>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" required ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>

    <h3 class="mt-5">Pesan Tamu</h3>
    <?php if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='alert alert-info'><strong>" . htmlspecialchars($row['nama']) . ":</strong> " 
            . nl2br(htmlspecialchars($row['pesan'])) . "</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Belum ada pesan.</div>";
    }
    ?>
</div>

<?php
$conn->close();
?>