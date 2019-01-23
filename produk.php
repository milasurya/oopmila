<?php 


class Produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}	   

}

//$produk1 = new Produk();
//$produk1->judul = "Doraemon";
//var_dump($produk1);

//$produk2 = new produk();
//$produk2->judul = "Minecraft";
//$produk2->tambahproperty = "topi";
//var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Doraemon";
$produk3->penulis = "Sergio Pablos";
$produk3->penerbit = "Shogakukan Asia";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Minecraft";
$produk4->penulis = "Max Brooks";
$produk4->penerbit = "Mojang Microsoft Studios";
$produk4->harga = 5500000;

echo "Komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();






 ?>