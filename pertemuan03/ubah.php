<?php 
require 'function.php';

$id = $_GET["id"];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];

// Ketika tombol ubah diklik
if (isset($_POST["ubah"])) {
  // Jalankan fungsi ubah()
  if(ubah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'index.php';
          </script>";
  }
}

require 'header.php';
?>
<div class="container">
  <h1>Form Ubah Data Buku</h1>
  <a href="index.php">Kembali ke Daftar Buku</a>
  <div class="row mt-3">
    <div class="col-8">
      <form action="" method="post" autocomplete="off">
        <input type="hidden" name="id" value="<?= $buku['id']; ?>">
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul']; ?>">
        </div>
        <div class="mb-3">
          <label for="penulis" class="form-label">Penulis</label>
          <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis']; ?>">
        </div>
        <div class="mb-3">
          <label for="penerbit" class="form-label">Penerbit</label>
          <input type="text" class="form-control" id="penerbit" value="<?= $buku['penerbit']; ?>" name="penerbit">
        </div>
        <div class="mb-3">
          <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
          <input type="text" class="form-control" id="tahun_terbit" value="<?= $buku['tahun_terbit']; ?>" name="tahun_terbit">
        </div>
        <button type="submit" class="btn btn-primary" name="ubah">Ubah Data Buku</button>
      </form>
    </div>
  </div>
</div>
<?php
require 'footer.php';
?>