<?php 


class Produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}	   

}


$produk1 = new Produk("Doraemon", "Sergio Pablos", "Shogakukan Asia", 30000);
$produk2 = new Produk("Minecraft", "Max Brooks", "Mojang Microsoft Studios", 550000);
$produk3 = new Produk("Mobile Legends");




echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);






 ?>