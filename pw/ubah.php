<?php
require 'function.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query buku berdasarkan id
$b = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah data Buku</title>

</head>

<body>
  <h3>Form ubah data Buku</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $b['id']; ?>">
    <ul>
      <li>
        <label>
          Judul Buku :
          <input type="text" name="judul_buku" autofocus required value="<?= $b['judul_buku']; ?>">
        </label>
      </li>

      <li>
        <label>
          Pengarang buku :
          <input type="text" name="pengarang_buku" required value="<?= $b['pengarang_buku']; ?>">
        </label>
      </li>

      <li>
        <label>
          Tahun Terbit:
          <input type="text" name="tahun_terbit" required value="<?= $b['tahun_terbit']; ?>">
        </label>
      </li>

      <li>
        <label>
          Gambar Buku :
          <input type="text" name="gambar" required value="<?= $b['gambar']; ?>">
        </label>
      </li>

      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>