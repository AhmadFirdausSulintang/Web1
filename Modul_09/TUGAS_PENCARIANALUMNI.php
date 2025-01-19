<?php
include 'Latihan_09_config.php'; // Memasukkan file konfigurasi untuk koneksi database

// Menangani pencarian alumni
$search_result = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_query = $_POST['search_query'];
    $sql = "SELECT * FROM alumni WHERE nama LIKE '%$search_query%'";
    $search_result = $conn->query($sql);
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Penelusuran Alumni</h2>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="search_query" class="form-label">Cari Alumni</label>
            <input type="text" class="form-control" id="search_query" name="search_query" required>
        </div>
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>

    <?php if (!empty($search_result) && $search_result->num_rows > 0) {
        echo "<h3 class='mt-5'>Hasil Pencarian:</h3>
        <table class='table table-bordered'>
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>Tahun Lulus</th>
            <th>Jurusan</th>
            <th>Foto</th>
        </tr>";
        while ($row = $search_result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['tahun_lulus'] . "</td>
            <td>" . $row['jurusan'] . "</td>
            <td><img src='" . $row['foto'] . "' width='50'></td>
            </tr>";
        }
        echo "</table>";
    } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div class='alert alert-warning'>Alumni tidak ditemukan.</div>";
    }
    ?>
</div>