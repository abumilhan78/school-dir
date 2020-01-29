<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function halo()
    {
    	return 'Ini Controller Latihan';
    }

    public function pertambahan($a = null,$b = null)
    {
    	$msg = "Silakan Masukan Angka Terlebih Dahulu";
    	
    	if (isset($a) || isset($b)) {
    		$msg = "Silakan Masukan Angkanya 1 lagi";	
    	}

    	if (isset($a) && isset($b)) {
    		$c = $a + $b;
    		$msg = "$a + $b = $c";
    	}
    	return $msg;
    }

    public function pengurangan($a = null,$b = null)
    {
    	$msg = "Silakan Masukan Angka Terlebih Dahulu";
    	
    	if (isset($a) || isset($b)) {
    		$msg = "Silakan Masukan Angkanya 1 lagi";	
    	}

    	if (isset($a) && isset($b)) {
    		$c = $a - $b;
    		$msg = "$a - $b = $c";
    	}
    	return $msg;
    }

    public function pembagian($a = null,$b = null)
    {
    	$msg = "Silakan Masukan Angka Terlebih Dahulu";
    	
    	if (isset($a) || isset($b)) {
    		$msg = "Silakan Masukan Angkanya 1 lagi";	
    	}

    	if (isset($a) && isset($b)) {
    		$c = $a / $b;
    		$msg = "$a / $b = $c";
    	}
    	return $msg;
    }

    public function perkalian($a = null,$b = null)
    {
    	$msg = "Silakan Masukan Angka Terlebih Dahulu";
    	
    	if (isset($a) || isset($b)) {
    		$msg = "Silakan Masukan Angkanya 1 lagi";	
    	}

    	if (isset($a) && isset($b)) {
    		$c = $a * $b;
    		$msg = "$a * $b = $c";
    	}
    	return $msg;
    }

    public function loop()
    {
    	$data = [
    	['nama'=>'Hari'],
    	['nama'=>'Memet'],
    	['nama'=>'Restu'],
    	['nama'=>'David']
    ];
    	foreach ($data as $key => $value) {
    		echo "Nama : ".$value['nama'] ."<hr>";
    	}
    }

    public function loop2()
    {
    	$data = [
    		['nama'=>'Qaysa', 'kelas'=>'RPL 1' , 'uang_jjn'=>20000],
    		['nama'=>'Aldi', 'kelas'=>'RPL 3' , 'uang_jjn'=>60000],
    		['nama'=>'Gilang', 'kelas'=>'RPL 1' , 'uang_jjn'=>45000],
    		['nama'=>'Daffa', 'kelas'=>'RPL 2' , 'uang_jjn'=>30000],
    		['nama'=>'Alpin', 'kelas'=>'RPL 2' , 'uang_jjn'=>15000],
    	];

    	foreach ($data as $key => $value) {
    		$n = $value['uang_jjn'];
    		$disc = 0;
    		$str = "Nama : " .$value['nama']. "<br>Kelas : " .$value['kelas']. "<br>Uang Jajan : " .$value['uang_jjn'];
    		if ($n >= 50000) {
    			$str .= "&nbsp&nbsp&nbsp<b>Uang Tabungan Sebesar 25%</b>";
    			$disc = 0.4;
    		}
    		else if ($n >= 25000) {
    			$str .= "&nbsp&nbsp&nbsp<b>Uang Tabungan Sebesar 15%</b>";
    			$disc = 0.15;
    		}
    		else if ($n >= 10000) {
    			$str .= "&nbsp&nbsp&nbsp<b>Uang Tabungan Sebesar 10%</b>";
    			$disc = 0.1;
    		}
    		$after = $n-($n*$disc);
    		$str .= "<br>Sisa Uang = $after";
    		echo $str."<hr>";
    	}
    }

    public function tugaspulang()
    {
    	$aral =[
    		['nama'=>'Qaysa', 'agama'=>'Islam', 'alamat'=>'Bandung', 'jk'=>'Laki-laki', 'jabat'=>'Fullstack', 'jamkerja'=>250],
    		['nama'=>'Aldi', 'agama'=>'Islam', 'alamat'=>'Bandung', 'jk'=>'Laki-laki', 'jabat'=>'Manager', 'jamkerja'=>230],
    		['nama'=>'Rafi', 'agama'=>'Islam', 'alamat'=>'Bandung', 'jk'=>'Laki-laki', 'jabat'=>'Staff', 'jamkerja'=>210]
    	];

    	foreach ($aral as $key => $value) {
    		$str = "Nama : " .$value['nama']. "<br>Agama : " .$value['agama']. "<br>Alamat : " .$value['alamat']. "<br>Jenis Kelamin : " .$value['jk']. "<br>Jabatan : ". $value['jabat'] ."<br>Jam Kerja : " .$value['jamkerja']. "<br><br>Gaji : ";
    		echo $str."<hr>";
    	}
    }
}
