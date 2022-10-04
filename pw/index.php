<?php
require 'function.php';
$buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Buku</title>
</head>

<body class= "bg-success">
<div class="container ">
  <div class="card mt-5 bg-white text-light">
    <div class="card-body text-light">
      <h1 class="display-1 text-center text-dark ">Daftar Buku</h1>

    <button class="add mb-3 btn btn-success rounded-pill">
    <a href="tambah.php" style="text-decoration:none;color:white;">Tambah Data Buku</a>
    </button>

    <form class="d-flex" action="" method="POST">
          <input class="form-control me-2" type="text" name="keyword" autocomplete="off" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit" name="cari">Search</button>
    </form>

    <br><br>
    <table class="table table-bordered table-striped table-hover text-center bg-transparent text-dark">
        <tr> 
            <th>Id Buku</th>
            <th>Gambar</th>
            <th>Judul buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php $i = 1;
        foreach ($buku as $b) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="assets/img/<?= $b["gambar"]; ?>" alt="" width="150"></td>
                <td><?= $b["judul_buku"]; ?></td>
                <td><?= $b["pengarang_buku"]; ?></td>
                <td><?= $b["tahun_terbit"]; ?></td>
                <td>
                <button class="add mb-3 btn btn-success rounded-pill">
                    <a href="ubah.php?id=<?= $b['id']; ?>" style="text-decoration:none;color:white;">Ubah</a>
                </button>
                <button class="add mb-3 btn btn-success rounded-pill">
                    <a href="hapus.php?id=<?= $b['id']; ?>" onclick="return confirm ('Apakah anda yakin?');" style="text-decoration:none;color:white;">Hapus</a>
                </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
  </div>
</div>
</body>

</html>
