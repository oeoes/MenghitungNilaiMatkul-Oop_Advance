<?php 
	namespace App\Classes;

	class AspekPenilaian
	{

		const TUGAS = 0.1; // 10%
		const UTS = 0.3; // 30%
		const UAS = 0.6; // 60%

		protected $nilai_akhir;
		protected $nilai_tugas, $nilai_uts, $nilai_uas;
		protected $mataKuliah;

		public function nilaiKualitatif ()
		{
			$nilai = $this->nilai_akhir;

			if($nilai >= 45){
				if($nilai >= 50){
					if($nilai >= 60){
						if($nilai >= 65){
							if($nilai >= 70){
								if($nilai >= 75){
									if($nilai >= 80){
										if($nilai >= 85){
											return "A";
										}
										return "-A";
									}
									return "B+";
								}
								return "B";
							}
							return "-B";
						}
						return "C+";
					}
					return "C";
				}
				return "-C";
			}
			else{
				return "F";
			}
		}

	}


 ?>