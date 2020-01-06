<html>
<head>
    <title>Tambah Master Barang</title>
</head>

<body>
  <a href="index.php">Kembali</a>
  <br/><br/>

  <form action="add.php" method="post" name="form1">
    <table width="25%" border="0">
      <tr> 
        <td>Kode Barang</td>
        <td><input type="text" name="kode_barang"></td>
      </tr>
      <tr> 
        <td>Nama Barang</td>
        <td><input type="text" name="nama_barang"></td>
      </tr>
      <tr> 
        <td>Harga Jual</td>
        <td><input type="number" name="harga_jual"></td>
      </tr>
      <tr> 
        <td>Harga Beli</td>
        <td><input type="number" name="harga_beli"></td>
      </tr>
      <tr> 
        <td>Satuan</td>
        <td><input type="text" name="satuan"></td>
      </tr>
      <tr> 
        <td>Kategori</td>
        <td><input type="text" name="kategori"></td>
      </tr>
      <tr> 
        <td></td>
        <td><input type="submit" name="Submit" value="Tambah"></td>
      </tr>
    </table>
  </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
      $kode_barang = $_POST['kode_barang'];
      $nama_barang = $_POST['nama_barang'];
      $harga_jual = $_POST['harga_jual'];
      $harga_beli = $_POST['harga_beli'];
      $satuan = $_POST['satuan'];
      $kategori = $_POST['kategori'];

      // include database connection file
      include_once("../config.php");

      // Insert user data into table
      $result = mysqli_query(
        $mysqli,
        "
          INSERT INTO master_barang(kode_barang,nama_barang,harga_jual,harga_beli,satuan,kategori)
          VALUES('$kode_barang','$nama_barang','$harga_jual','$harga_beli','$satuan','$kategori')
        "
      );

      // Show message when user added
      echo "Master barang berhasil ditambahkan. <a href='index.php'>Lihat Master Barang</a>";
    }
    ?>
</body>
</html>