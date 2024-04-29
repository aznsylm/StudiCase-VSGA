<?php
function hitung($hari, $denda){
	$jumlah = $hari * $denda;

	return $jumlah;

}
$hasil = hitung(5,2000);

echo $hasil;

exit();

$kelas = ['JWD', 'JGD', 'VE', 'OKM' ];
foreach ($kelas as $key => $value) {
	// code...
	echo $key.' - '. $value.'<br>';
}


// for ($i=0; $i<10 ; $i++) { 
// 	// code...
// 	echo "perulangan ke-".$i."<br>";
// }

// $platNomor = 'B';

// switch ($platNomor) {
//  	case 'KT':
//  		// code...
//  		echo "Kalimantan Timur";
//  		break;
// 	case 'KU':
//  		// code...
//  		echo "Kalimantan Utara";
//  		break;
//  	case 'B':
//  		// code...
//  		echo "Jakarta";
//  		break;
//  	case 'D':
//  		// code...
//  		echo "Bandung";
//  		break;		 	
//  	default:
//  		// code...
//  		echo "Plar Nomor Tidak Tersedia";
//  		break;
//  } 

// echo $platNomor;
?>