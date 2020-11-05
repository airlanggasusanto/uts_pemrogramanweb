<?php
//include('dbconnected.php');
include('dbconnect.php');

$sku = $_POST['sku_bg'];
$nama = $_POST['nama_bg'];
$kategori = $_POST['kategori_bg'];
$harga = $_POST['harga_bg'];
$jumlah = $_POST['jumlah_bg'];

//query update
$query = "UPDATE barang SET sku_barang='$sku' , nama_barang='$nama' , kategori_barang='$kategori' , harga_barang='$harga' , jumlah_barang='$jumlah' WHERE id_barang='$id' ";

if (mysqli_query($conn, $query)) {
 # credirect ke page index
 header("location:index.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>