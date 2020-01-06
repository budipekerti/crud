<?php
// Create database connection using config file
include_once("../config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM master_barang ORDER BY id DESC");
?>

<html>
<head>    
<title>Master Barang</title>
</head>

<body>
<a href="add.php">Tambah Master Barang</a><br/><br/>
  <table width='80%' border=1>

  <tr>
      <th>Kode Barang</th>
      <th>Nama Barang</th>
      <th>Harga Jual</th>
      <th>Harga Beli</th>
      <th>Satuan</th>
      <th>Kategori</th>
      <th>Update</th>
  </tr>
  <?php  
  while($master_barang = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>".$master_barang['kode_barang']."</td>";
    echo "<td>".$master_barang['nama_barang']."</td>";
    echo "<td>".$master_barang['harga_jual']."</td>";    
    echo "<td>".$master_barang['harga_beli']."</td>";    
    echo "<td>".$master_barang['satuan']."</td>";    
    echo "<td>".$master_barang['kategori']."</td>";    
    echo "<td><a href='edit.php?id=$master_barang[id]'>Edit</a> | <a href='delete.php?id=$master_barang[id]'>Delete</a></td></tr>";        
  }
  ?>
  </table>
</body>
</html>