<?php
require_once 'app/buku.php';

$buku = new Buku();
$rows = $buku->getData();

// Menangani penghapusan buku
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $buku->deleteData($id);
    header("Location: show.php");
    exit();
}
?>

<table>
    <tr>
        <th>Indeks</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tebal Buku</th>
        <th>Penerbit</th>
        <th>Stock</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['indeks']; ?></td>
        <td><?php echo $row['judul']; ?></td>
        <td><?php echo $row['pengarang']; ?></td>
        <td><?php echo $row['tebal_buku']; ?></td>
        <td><?php echo $row['penerbit']; ?></td>
        <td><?php echo $row['stock']; ?></td>
        <td>
            <a href="show.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus buku ini?')">Hapus</a>
            <a href="../edit.php?id=<?php echo $row['id']; ?>">Edit</a>
        </td>
    </tr>
    <?php } ?>
</table>
