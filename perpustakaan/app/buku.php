<?php
require_once 'app/buku.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tebal_buku = $_POST['tebal_buku'];
    $penerbit = $_POST['penerbit'];
    $stock = $_POST['stock'];

    if (is_numeric($tebal_buku) && is_numeric($stock)) {
        $buku = new buku();
        $buku->addData($judul, $pengarang, $tebal_buku, $penerbit, $stock);
        header("Location: index.php");
        exit();
    } else {
        echo "<p class='error-message'>Tebal buku dan stock harus berupa angka.</p>";
    }
}
?>

<form method="POST" action="index.php">
    <input type="text" name="judul" placeholder="Judul Buku" required>
    <input type="text" name="pengarang" placeholder="Pengarang" required>
    <input type="number" name="tebal_buku" placeholder="Tebal Buku (halaman)" required>
    <input type="text" name="penerbit" placeholder="Penerbit" required>
    <input type="number" name="stock" placeholder="Stock Buku" required>
    <input type="submit" value="Tambah Buku">
</form>
