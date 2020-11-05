<!DOCTYPE html>
<html lang="en">
<head>
 <title>Toko Pak Adi</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 
//koneksi database
include('dbconnect.php');
//query
$query = "SELECT * FROM barang WHERE id_barang='$id'";
$result = mysqli_query($conn, $query);
?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
 <h3>Update Data Barang</h3>
 <form role="form" action="edit.php" method="get">
 <?php
 while ($row = mysqli_fetch_assoc($result)) {
 ?>

 <input type="hidden" name="id_bg" value="<?php echo $row['id_barang']; ?>">

 <div class="form-group">
  <label>SKU</label>
  <input type="text" name="sku_bg" class="form-control" value="<?php echo $row['sku_barang']; ?>">   
 </div>

 <div class="form-group">
  <label>Nama Barang</label>
  <input type="text" name="nama_bg" class="form-control" value="<?php echo $row['nama_barang']; ?>">   
 </div>

 <div class="form-group">
  <label>Kategori Barang</label>
  <input type="text" name="kategori_bg" class="form-control" value="<?php echo $row['kategori_barang']; ?>">   
 </div>

 <div class="form-group">
  <label>Harga Barang</label>
  <input type="text" name="harga_bg" class="form-control" value="<?php echo $row['harga_barang']; ?>">   
 </div>

 <div class="form-group">
  <label>Jumlah Barang</label>
  <input type="text" name="jumlah_bg" class="form-control" value="<?php echo $row['jumlah_barang']; ?>">   
 </div>
 <button type="submit" class="btn btn-success btn-block">Update Buku</button>

 <?php 
 }
 mysqli_close($conn);
 ?>    
 </form>
</div>
</body>
</html>