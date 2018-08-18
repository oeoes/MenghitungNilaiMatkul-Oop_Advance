<?php 
	namespace App\Traits;

	use App\Interfaces\IndexPrestasi;

	trait IndexPrestasiTrait
	{

		public static function cetakNilai (IndexPrestasi $instance, $tugas, $uts, $uas)
		{
			echo "Matkul : ". $instance->mataKuliah()."<br>";
			echo "Tugas : ".$instance->tugas($tugas) ."<br>";
			echo "UTS : ".$instance->tengahSemester($uts) ."<br>";
			echo "UAS : ".$instance->akhirSemester($uas) ."<br>";

			echo "NA : ".$instance->nilaiAkhir() ."<br>";
			echo "Kualitatif : ".$instance->nilaiKualitatif()."<br><br>";
		}
	}


 ?>