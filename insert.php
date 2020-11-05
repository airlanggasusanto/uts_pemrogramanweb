<?php
//add dbconnect

include('dbconnect.php');

$sku = $_POST['sku_bg'];
$nama = $_POST['nama_bg'];
$kategori = $_POST['kategori_bg'];
$harga = $_POST['harga_bg'];
$jumlah = $_POST['jumlah_bg'];

//query

$query =  "INSERT INTO barang(sku_barang , nama_barang , kategori_barang , harga_barang , jumlah_barang) VALUES('$sku' , '$nama' , '$kategori' , '$harga' , '$jumlah')";

if (mysqli_query($conn , $query)) {
 # code redicet setelah insert ke index
 header("location:index.php");
}
else{
 echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>