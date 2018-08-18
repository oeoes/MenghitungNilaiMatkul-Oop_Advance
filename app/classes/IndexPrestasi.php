<?php 
	namespace App\Classes;

	use App\Interfaces\IndexPrestasi as IPinterface;
	use App\Classes\AspekPenilaian;

	class IndexPrestasi extends AspekPenilaian implements IPinterface
	{

		public function __construct($mataKuliah)
		{
			$this->mataKuliah = $mataKuliah;
		}

		public function mataKuliah ()
		{
			return ucfirst($this->mataKuliah);
		}

		public function tugas ($tugas)
		{
			$total = $tugas * parent::TUGAS;
			return $this->nilai_tugas = $total;
		}

		public function tengahSemester ($uts)
		{
			$total = $uts * parent::UTS;
			return $this->nilai_uts = $total;
		}

		public function akhirSemester ($uas)
		{
			$total = $uas * parent::UAS;
			return $this->nilai_uas = $total;
		}

		public function nilaiAkhir ()
		{
			$total = $this->nilai_tugas + $this->nilai_uts + $this->nilai_uas;
			return $this->nilai_akhir = $total;
		}
	}


 ?>