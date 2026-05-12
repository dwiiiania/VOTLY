<?php
echo $_POST['input_username'];
echo $_POST['input_password'];
exit();
include "autentifikasi.php";
$query = "SELECT * FROM users WHERE text='".$_POST['input_username']."'";
//cek nis dan kode
//nis: 248222
//kode: 1122
$result = $conn->query($query);


echo "jumlah data: ";
echo $result->num_rows;
echo "<br /> <br />";




$row = $result->fetch_assoc();

if ($result->num_rows == 0) {
  // jika num_rows = 0 berarti tidak ada data yang ditemukan dari database 
  // echo "Akun tidak ditemukan";
  header("detailkandidat1.php");
  exit(); // langsung akhiri eksekusi tanpa harus lanjut ke bawah
} else {
  if ($_POST['input_username'] == $row['username']) {
    // echo "Anda berhasil login";
    header("detailkandidat1.php");
  } else {
    // echo "Password anda salah";
    header("detailkandidat1.php");
  }
}


if ($result->num_rows == 0) {
  echo "Akun tidak ditemukan";
  exit(); 
} else {
  if ($_POST['input_username'] == $row['username']) {
    echo "Anda berhasil login";
  } else {
    echo "Password anda salah";
  }
}

//conditional statement

    if($_POST['input_password'] == "1122") {
    if($_POST['input_password'] == "1122") {
        echo "login sukses";
    } else {
        echo "maaf password anda salah";
    }

    }