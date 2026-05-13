<?php
//echo $_POST['input_email'];
//echo $_POST['input_password'];
//exit();
include "config.php";
$query = "SELECT * FROM users WHERE username='".$_POST['input_email']."'";

//cek nis dan kode
//nis: 248222
//kode: 1122
$result = $conn->query($query);


//echo "jumlah data: ";
//echo $result->num_rows;
///echo "<br /> <br />";

//exit();

$row = $result->fetch_assoc();

if ($result->num_rows == 0) {
  // jika num_rows = 0 berarti tidak ada data yang ditemukan dari database 
  // echo "Akun tidak ditemukan";
  header("location:autentifikasi.php");
  exit(); // langsung akhiri eksekusi tanpa harus lanjut ke bawah
} else {
  if ($_POST['input_password'] == $row['password']) {
    // echo "Anda berhasil login";
    header("location:kandidat.php");
  } else {
    // echo "Password anda salah";
    header("location:autentifikasi.php");
  }
}


if ($result->num_rows == 0) {
  echo "Akun tidak ditemukan";
  exit(); 
} else {
  if ($_POST['input_password'] == $row['password']) {
    echo "Anda berhasil login";
  } else {
    echo "Password anda salah";
  }
}

