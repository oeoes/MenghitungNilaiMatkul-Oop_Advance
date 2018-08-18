<?php 
	namespace App;
	require "../vendor/autoload.php";

	use App\Classes\IndexPrestasi;
	use App\Traits\IndexPrestasiTrait as IPtraits;

	$algoritma = new IndexPrestasi("algoritma");
	$java = new IndexPrestasi("java");

	IPtraits::cetakNilai($algoritma, 80, 90, 80);
	IPtraits::cetakNilai($java, 20, 45, 30);	


 ?>