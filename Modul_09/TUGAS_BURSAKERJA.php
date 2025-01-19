<?php
include 'Latihan_09_config.php'; // Memasukkan file konfigurasi untuk koneksi database

// Menangani pengiriman form
if ($_SERVER["REQUEST_METHOD"] == "POST"); {
    if (isset($_POST['posisi']) && isset($_POST['perusahaan']) && isset($_POST['tanggal'])) {
        $Posisi = $_POST['posisi'];
        $perusahaan = $_POST['perusahaan'];
        $tanggal = $_POST['tanggal'];

        // Menyimpan data ke database
        $sql = "INSERT INTO bursa_kerja (posisi, perusahaan, tanggal) VALUES ('$Posisi', '$perusahaan', '$tanggal')";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Lowongan kerja berhasil ditambahkan.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    }
}

// Mengambil data bursa kerja
$sql = "SELECT * FROM bursa_kerja ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2 class="mb-4">Bursa Kerja</h2>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="posisi" name="posisi" required>
        </div>
        <div class="mb-3">
            <label for="perusahaan" class="form-label">Perusahaan</label>
            <input type="text" class="form-control" id="perusahaan" name="perusahaan" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Lowongan</button>
    </form>

    <h3 class="mt-5">Lowongan Kerja Tersedia</h3>
    <?php if ($result->num_rows > 0) {
        echo "<table class='table table-bordered'>
        <tr>
            <th>Posisi</th>
            <th>Perusahaan</th>
            <th>Tanggal</th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row['posisi'] . "</td>
            <td>" . $row['perusahaan'] . "</td>
            <td>" . $row['tanggal'] . "</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "<div class='alert alert-warning'>Belum ada lowongan kerja.</div>";
    }
    ?>
</div>