<?php
// include database connection file
include_once("../config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
  $id = $_POST['id'];

  $kode_barang=$_POST['kode_barang'];
  $nama_barang=$_POST['nama_barang'];
  $harga_jual=$_POST['harga_jual'];
  $harga_beli=$_POST['harga_beli'];
  $satuan=$_POST['satuan'];
  $kategori=$_POST['kategori'];

  // update user data
  $result = mysqli_query(
    $mysqli,
    "
      UPDATE master_barang
      SET kode_barang='$kode_barang',nama_barang='$nama_barang',harga_jual='$harga_jual',harga_beli='$harga_beli',satuan='$satuan',kategori='$kategori' WHERE id=$id
    "
  );

  // Redirect to homepage to display updated user in list
  header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM master_barang WHERE id=$id");

while($master_barang = mysqli_fetch_array($result))
{
  $kode_barang = $master_barang['kode_barang'];
  $nama_barang = $master_barang['nama_barang'];
  $harga_jual = $master_barang['harga_jual'];
  $harga_beli = $master_barang['harga_beli'];
  $satuan = $master_barang['satuan'];
  $kategori = $master_barang['kategori'];
}
?>
<html>
<head>  
  <title>Edit User Data</title>
</head>

<body>
  <a href="index.php">Kembali</a>
  <br/><br/>

  <form name="update_data" method="post" action="edit.php">
    <table border="0">
      <tr> 
        <td>Kode Barang</td>
        <td><input type="text" name="kode_barang" value=<?php echo $kode_barang;?>></td>
      </tr>
      <tr> 
        <td>Nama Barang</td>
        <td><input type="text" name="nama_barang" value=<?php echo $nama_barang;?>></td>
      </tr>
      <tr> 
        <td>Harga Jual</td>
        <td><input type="number" name="harga_jual" value=<?php echo $harga_jual;?>></td>
      </tr>
      <tr> 
        <td>Harga Beli</td>
        <td><input type="number" name="harga_beli" value=<?php echo $harga_beli;?>></td>
      </tr>
      <tr> 
        <td>Satuan</td>
        <td><input type="text" name="satuan" value=<?php echo $satuan;?>></td>
      </tr>
      <tr> 
        <td>Kategori</td>
        <td><input type="text" name="kategori" value=<?php echo $kategori;?>></td>
      </tr>
      <tr>
        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
        <td><input type="submit" name="update" value="Update"></td>
      </tr>
    </table>
  </form>
</body>
</html>