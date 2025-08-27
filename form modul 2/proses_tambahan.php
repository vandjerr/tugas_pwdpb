<?php
Include "koneksi.php";

if ($ SERVER["REQUEST METHOD"] "POST") {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO siswa (nama, email, alamat) VALUES ('$nama', 'Semail', 'Salamat')";
    if ($koneksi->query($query) === TRUE) {
        echo "Data berhasil ditambahkan.";
        echo "<br><a href='tampil_data.php'>Lihat Data</a>";
    } else {
    echo "Error: " $query. "<br>". $koneksi->error;
    }
}
?>