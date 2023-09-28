<?php
require "function.php";
$buku = query("SELECT * FROM buku");

require 'header.php';
?>
<div class="container">
    <div class="title mb-3 mt-3">
        <h1>Data Buku</h1>
    </div>
    <a href="tambah.php" class="btn btn-primary">Tambah Data Buku</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($buku as $b): ?>
            <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $b["judul"]; ?></td>
                <td><?php echo $b["penulis"]; ?></td>
                <td><?php echo $b["penerbit"]; ?></td>
                <td><?php echo $b["tahun_terbit"]; ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo $b['id']; ?>" class="btn badge bg-warning">Ubah</a>
                    <a href="hapus.php?id=<?php echo $b['id']; ?>" class="btn badge bg-danger" onclick="return confirm('Yakin?')" >Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
require 'footer.php';
?>