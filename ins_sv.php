<?php

include "connect.php" ;


$id = $_POST['id'];
$nama = $_POST['nama'];
$tarif = $_POST['tarif'];
$foto = $_POST['foto'];

mysql_query("INSERT INTO barang VALUE(NULL, '$id', '$nama', '$harga', '$foto)");
header("location:produk.php");



?>