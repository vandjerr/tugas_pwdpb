<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['nama'];
    $sekolah = $_POST['sekolah'];
    $jurusan = $_POST['jurusan'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE siswa SET nama='$nama',sekolah='$sekolah',jurusan='$jurusan',
    no_hp='$no_hp',alamat='$alamat' WHERE id=$id";

    if($conn->query($sql)===TRUE){
        header('Location: index.php');
        exit();
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="includes/style.css">
    <style>
        input[type="text"] {
            padding: 10px; 
            width: calc(100% - 22px); 
            margin-bottom: 20px; 
            border: 1px solid #ccc; 
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 15px; 
            border: none; 
            border-radius: 4px; 
            background-color: #4CAF50; 
            color: white; 
            cursor: pointer; 
            width: 100%;
        }
        input[type="submit"]:hover { 
            background-color: #45a049; 
        }
    </style>
</head>
<body>
    <div class="container-2">
        <h2>Update Data Siswa</h2>
        <form action="" method="post">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?= htmlspecialchars($row['nama']);?>" required>

            <label for="sekolah">Sekolah:</label>
            <input type="text" name="sekolah" value="<?= htmlspecialchars($row['sekolah']);?>" required>

            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" value="<?= htmlspecialchars($row['jurusan']);?>" required>

            <label for="no_hp">No HP:</label>
            <input type="text" name="no_hp" value="<?= htmlspecialchars($row['no_hp']);?>" required>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" value="<?= htmlspecialchars($row['alamat']);?>" required>

            <input type="submit" value="Update">
        </form>
        <div class="back-link">
            <a href="index.php">Kembali ke Daftar Siswa</a>
        </div>
    </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>