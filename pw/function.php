<?php

function koneksi()
{
  return mysqli_connect('Localhost', 'root','', 'prakweb_2022_b_203040060');
//   return mysqli_connect('Localhost', 'pw20060', '#Akun#203040060#', 'pw20060_pw_203040060');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
//tambah
function tambah($data)
{
  $conn = koneksi();
 
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $pengarang_buku = htmlspecialchars($data['pengarang_buku']);
  $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO 
            buku
            VALUES
            (null, '$judul_buku', '$pengarang_buku', '$tahun_terbit', '$gambar');
            ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

//hapus
function hapus($id)
{
  $conn = Koneksi();

  // meghapus gambar di folder img
  $b = query("SELECT * FROM buku WHERE id = $id");
  if ($b['gambar_buku'] != 'nofoto.png') {
    unlink('img/' . $b['gambar_buku']);
  }

  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// ubah 
function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $pengarang_buku = htmlspecialchars($data['pengarang_buku']);
  $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
  $gambar= htmlspecialchars($data['gambar']);


  $query = "UPDATE buku SET
            judul_buku = '$judul_buku',
            pengarang_buku=  '$pengarang_buku',
            tahun_terbit = '$tahun_terbit',
            gambar =  '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
// fungsi cari
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM buku 
              WHERE 
              judul_buku LIKE '%$keyword%' OR
              pengarang_buku LIKE '%$keyword%' OR
              tahun_terbit LIKE '%$keyword%' OR
              gambar LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
?>