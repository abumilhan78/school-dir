<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
        	['nama'=>'Mochammad Qaysa', 'nis'=>'1115RPL1', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Margahayu Kencana', 'tgl_lahir'=>'2003-01-24', 'umur'=>'16'],
        	['nama'=>'Aldi Lazuardi', 'nis'=>'1101RPL1', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Margahayu Kencana', 'tgl_lahir'=>'2000-05-23', 'umur'=>'19'],
        	['nama'=>'Rafi Defransyah', 'nis'=>'1026RPL3', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Margahayu Kencana', 'tgl_lahir'=>'2004-03-12', 'umur'=>'15'],
        	['nama'=>'Gilang Rizal', 'nis'=>'1125RPL2', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Margahayu Kencana', 'tgl_lahir'=>'2003-07-12', 'umur'=>'16'],
        	['nama'=>'Zunaidi Nur Pamuji', 'nis'=>'1035RPL3', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Margahayu Kencana', 'tgl_lahir'=>'2004-11-29', 'umur'=>'15']
        ];

        DB::table('students')->insert($students);
    }
}
