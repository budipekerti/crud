create database crud_db;

use crud_db;

CREATE TABLE `master_barang` (
  `id` int(11) NOT NULL auto_increment,
  `kode_barang` varchar(100),
  `nama_barang` varchar(100),
  `harga_jual` int(9),
  `harga_beli` int(9),
  `satuan` varchar(100),
  `kategori` varchar(100),
  PRIMARY KEY (`id`)
);

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL auto_increment,
  `tgl_faktur` datetime,
  `no_faktur` int(9),
  `nama_konsumen` varchar(100),
  `kode_barang` varchar(100),
  `jumlah` int(9),
  `harga_satuan` int(9),
  `harga_total` int(9),
  PRIMARY KEY  (`id`)
);