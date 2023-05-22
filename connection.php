<?php

  $conn = mysqli_connect('localhost', 'root', '', 'tubes_pemweb');
  if (mysqli_connect_errno()) {
    echo "koneksi data base gagal";
    mysqli_connect_error();
  }

  function Pesan($data) {

    global $conn;
    $nama = strtolower(stripslashes($data["nama"]));
    $alamat = strtolower(stripslashes($data["alamat"]));
    $nohp = strtolower(stripslashes($data["nohp"]));
    $email = strtolower(stripslashes($data["email"]));
    $delivery = strtolower(stripslashes($data["delivery"]));
    $tanggal = strtolower(stripslashes($data["tanggal"]));
    $jumlah = strtolower(stripslashes($data["jumlah"]));
    $servis = strtolower(stripslashes($data["servis"]));
    $note = strtolower(stripslashes($data["note"]));

    //insert pesanan
    mysqli_query($conn, "INSERT INTO pemesanan VALUES('','$nama','$alamat','$nohp','$email','$delivery','$tanggal', '$jumlah','$servis','$note')");
    return mysqli_affected_rows($conn);
}
