<?php 
require 'function.php';

// Ketika tombol tambah diklik
if (isset($_POST["tambah"])) {
  // Jalankan fungsi tambah()
  if(tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
          </script>";
  }
}

require 'header.php';
?>
<div class="container">
  <h1>Form Tambah Data Buku</h1>
  <a href="index.php">Kembali ke Daftar Buku</a>
  <div class="row mt-3">
    <div class="col-8">
      <form action="" method="post" autocomplete="off">
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" required">
        </div>
        <div class="mb-3">
          <label for="penulis" class="form-label">Penulis</label>
          <input type="text" class="form-control" id="penulis" name="penulis" required>
        </div>
        <div class="mb-3">
          <label for="penerbit" class="form-label">Penerbit</label>
          <input type="text" class="form-control" id="penerbit" name="penerbit">
        </div>
        <div class="mb-3">
          <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
          <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
        </div>
        <button type="submit" class="btn btn-primary" name="tambah">Tambah Data Buku</button>
      </form>
    </div>
  </div>
</div>

<?php
require 'footer.php';
?>