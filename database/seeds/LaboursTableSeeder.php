<?php

use Illuminate\Database\Seeder;

class LaboursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labours = [
        	['nama'=>'Mochammad Qaysa', 'nik'=>'DI123R4', 'jenis_kelamin'=>'Laki-laki', 'tgl_lahir'=>'2003-01-24', 'jabatan'=>'Head Comitee', 'kota'=>'Bandung', 'gaji'=>'20000000'],
        	['nama'=>'Aldi Lazuardi', 'nik'=>'DRCCTI24', 'jenis_kelamin'=>'Laki-laki', 'tgl_lahir'=>'2000-03-11', 'jabatan'=>'Director', 'kota'=>'Bandung', 'gaji'=>'20000000'],
        	['nama'=>'Gilang Rizal Triana', 'nik'=>'FERDE234', 'jenis_kelamin'=>'Laki-laki', 'tgl_lahir'=>'2003-11-21', 'jabatan'=>'Co-Director', 'kota'=>'Bandung', 'gaji'=>'20000000'],
        	['nama'=>'Rafi Defransyah', 'nik'=>'FRRDF234', 'jenis_kelamin'=>'Laki-laki', 'tgl_lahir'=>'2004-05-30', 'jabatan'=>'Marketing', 'kota'=>'Bandung', 'gaji'=>'20000000'],
        	['nama'=>'Salman alFarisi', 'nik'=>'RD124FDF', 'jenis_kelamin'=>'Laki-laki', 'tgl_lahir'=>'2004-01-15', 'jabatan'=>'Mechanic', 'kota'=>'Bandung', 'gaji'=>'20000000'],
        	['nama'=>'Zunaidi Nur Akbar Pamuji', 'nik'=>'RDSWE3R4', 'jenis_kelamin'=>'Laki-laki', 'tgl_lahir'=>'2004-06-20', 'jabatan'=>'Front-End', 'kota'=>'Bandung', 'gaji'=>'20000000'],
        	['nama'=>'Firman Nugraha', 'nik'=>'RD323R4', 'jenis_kelamin'=>'Laki-laki', 'tgl_lahir'=>'2004-01-15', 'jabatan'=>'Mechanic', 'kota'=>'Bandung', 'gaji'=>'20000000'],
        	['nama'=>'Insan Nugraha', 'nik'=>'BCK233R4', 'jenis_kelamin'=>'Laki-laki', 'tgl_lahir'=>'2003-09-19', 'jabatan'=>'Back-End', 'kota'=>'Bandung', 'gaji'=>'20000000'],
        	['nama'=>'Alpin Alamsah', 'nik'=>'PRE145R4', 'jenis_kelamin'=>'Laki-laki', 'tgl_lahir'=>'2001-07-12', 'jabatan'=>'Personalia', 'kota'=>'Bandung', 'gaji'=>'20000000'],
        	['nama'=>'Daffa Jaya', 'nik'=>'PRR123R4', 'jenis_kelamin'=>'Laki-laki', 'tgl_lahir'=>'2003-05-22', 'jabatan'=>'Back-End', 'kota'=>'Bandung', 'gaji'=>'20000000']
        	
        ];

        DB::table('labours')->insert($labours);
    }
}
