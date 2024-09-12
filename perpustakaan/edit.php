<?php
require_once 'app/buku.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $buku = new Buku();
    $data = $buku->getDataById($id);

    if (!$data) {
        echo "Data tidak ditemukan!";
        exit();
    }
} else {
    echo "ID tidak ditemukan!";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tebal_buku = $_POST['tebal_buku'];
    $penerbit = $_POST['penerbit'];
    $stock = $_POST['stock'];

    // Validasi angka pada tebal buku dan stock
    if (is_numeric($tebal_buku) && is_numeric($stock)) {
        $buku->updateData($id, $judul, $pengarang, $tebal_buku, $penerbit, $stock);
        header("Location: index.php"); // Redirect ke halaman utama setelah update
        exit();
    } else {
        echo "<p class='error-message'>Tebal buku dan stock harus berupa angka.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link ke CSS -->
</head>
<body>
    <form method="POST" action="edit.php?id=<?php echo $id; ?>">
        <input type="text" name="judul" placeholder="Judul Buku" value="<?php echo $data['judul']; ?>" required>
        <input type="text" name="pengarang" placeholder="Pengarang" value="<?php echo $data['pengarang']; ?>" required>
        <input type="number" name="tebal_buku" placeholder="Tebal Buku (halaman)" value="<?php echo $data['tebal_buku']; ?>" required>
        <input type="text" name="penerbit" placeholder="Penerbit" value="<?php echo $data['penerbit']; ?>" required>
        <input type="number" name="stock" placeholder="Stock Buku" value="<?php echo $data['stock']; ?>" required>
        <input type="submit" value="Update Buku">
    </form>
</body>
</html>
