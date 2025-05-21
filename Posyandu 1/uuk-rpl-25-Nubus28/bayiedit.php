<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET['id'];
    $sql = "SELECT * FROM kader WHERE id=?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} elseif
     ($_SERVER["REQUEST_METHOD"] === "POST") {
    $NAMA= $_POST["NAMA"];
    $UMUR = $_POST["UMUR"];
    $KELAMIN = $_POST["KELAMIN"];
    $ALAMAT = $_POST["ALAMAT"];
    $KONDISI = $_POST["KONDISI"];
    $NAMAORTU= $_POST["NAMAORTU"];

    $id = $_GET["id"];
    $sql = "UPDATE barang SET nama=?, stok=?, status=? WHERE id=?";
    $row = $koneksi->execute_query($sql, [$NAMA, $UMUR, $KELAMIN,$ALAMAT,$KONDISI,$NAMAORTU ]);
    header("BAYI.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit cars</title>
</head>
<body>
<h1 style="font-size:large;">BAYI</h1>
<form action="" method="post">
    <div class="form-item">
        <label for="NAMA">NAMA</label>
        <input type="text" name="NAMA" id="NAMA" value="<?=$row['NAMA']?>">
    </div>
    <div class="form-item">
        <label for="UMUR">UMUR</label>
        <input type="number" name="UMUR" id="UMUR" value="<?=$row['UMUR']?>">
    </div>
    <div class="form-item">
        <label for="KELAMIN">KELAMIN</label>
        <input type="text" name="KELAMIN" id="KELAMIN" value="<?=$row['KELAMIN']?>">
    </div>
    <div class="form-item">
        <label for="ALAMAT">ALAMAT</label>
        <input type="text" name="ALAMAT" id="ALAMAT" value="<?=$row['ALAMAT']?>">
    </div>
    <div class="form-item">
        <label for="KONDISI">KONDISI BAYI</label>
        <input type="text" name="KONDISI" id="KONDISI" value="<?=$row['KONDISI']?>">
    </div>
     <div class="form-item">
        <label for="NAMAORTU">NAMA ORTU</label>
        <input type="text" name="NAMA ORTU" id="NAMA ORTU" value="<?=$row['NAMA ORTU']?>">
    </div>
    </div>
    <button type="submit">Submit</button>
</form>
<a href="lamankades.php">Kembali</a>
</body>
</html>
