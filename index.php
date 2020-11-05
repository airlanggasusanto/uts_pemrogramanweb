<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="navbar.css">
    </head>
 <body>
    <div class="nav">
    <ul>
 <li><a href="index.php">Manajemen Barang</a></li>
 </ul>
 </div>
 </body>
 </html>
 <title>Toko Pak Adi</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>

 <?php
 //tambahkan dbconnect
 include('dbconnect.php');

 //query
 $query = "SELECT * FROM barang";

 $result = mysqli_query($conn , $query);

 ?>

 <div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
  <h3>BAROKAH MINIMARKET</h3>
  <hr>
  <div class="row">
   <div class="col-sm-4">
    <h3>Form Tambah Barang</h3>
    <form role="form" action="insert.php" method="post">
     <div class="form-group">
      <label>SKU</label>
      <input type="text" name="sku_bg" class="form-control">
     </div> 
     <div class="form-group">
      <label>Nama Barang</label>
      <input type="text" name="nama_bg" class="form-control">
     </div>
     <div class="form-group">
      <label>Kategori Barang</label>
      <input type="text" name="kategori_bg" class="form-control">
     </div>
     <div class="form-group">
      <label>Harga Barang</label>
      <input type="text" name="harga_bg" class="form-control">
     </div>
     <div class="form-group">
      <label>Jumlah Barang</label>
      <input type="text" name="jumlah_bg" class="form-control">
     </div>
     <button type="submit" class="btn btn-info btn-block">Tambah Barang</button>     
    </form>
    
   </div>
   <div class="col-sm-8">
    <h3>Tabel Daftar Barang</h3>
    <table class="table table-striped table-hover dtabel">
     <thead>
      <tr>
       <th>No</th>
       <th>SKU</th>
       <th>Nama Barang</th>
       <th>Kategori Barang</th>
       <th>Harga Barang</th>
       <th>Jumlah Stok Barang</th>
       <th>Aksi</th>
      </tr>
     </thead>
     <tbody> 
      
      <?php
       $no = 1;  
       while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
       <td><?php echo $no++; ?></td>
       <td><?php echo $row['sku_barang']; ?></td>
       <td><?php echo $row['nama_barang']; ?></td>
       <td><?php echo $row['kategori_barang']; ?></td>
       <td><?php echo $row['harga_barang']; ?></td>
       <td><?php echo $row['jumlah_barang']; ?></td>
       <td>
        <a href="editform.php?id=<?php echo $row['id_barang'];?>" class="btn btn-success" role="button">Edit</a>
        <a href="delete.php?id=<?php echo $row['id_barang']?>" class="btn btn-danger" role="button">Delete</a>
       </td>
      </tr>

      <?php
       }
       mysqli_close($conn); 
      ?>
     </tbody>
    </table>
   </div>
  </div>
 </div>
</body>

 <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
 <script>
 $(document).ready(function() {
  $('.dtabel').DataTable();
 } );
 </script>

</html>