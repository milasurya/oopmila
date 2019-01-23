<?php 

require_once 'App/init.php';

$produk1 = new Komik("Doraemon", "Sergio Pablos", "Shogakukan Asia", 30000,100);
$produk2 = new Game("Minecraft", "Max Brooks", "Mojang Microsoft Studios", 550000,60);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new coba();



 ?>