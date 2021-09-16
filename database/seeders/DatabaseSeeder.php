<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\anggota::factory(5)->create();
        DB::table('jenis_kepengurusan')->insert([
            'jenis' => 'iniJenis',
            'deskripsi' => 'iniDeskripsi',
            'logo' => 'iniLogo.jpg',
            'gambar' => 'iniGambar.jpg',
        ]);

        DB::table('anggota')->insert([
            'nama' => 'Wuwung',
            'prodi' => 'Sistem Informasi',
            'foto' => 'iniFoto.jpg',
            'gender' => 'P',
            'jabatan' => 'Staff',
            'jenis_kepengurusan_id' => '1',
        ]);

        DB::table('event')->insert([
            'judul' => 'iniJudul',
            'timeline' => '03-09-2017 - 04-09-2017',
            'deskripsi' => 'iniDeskripsi',
            'gambar' => 'iniGambar.jpg',
        ]);

        DB::table('berita')->insert([
            'judul' => 'iniJudul',
            'waktu' => '2017-05-03',
            'tempat' => 'malang',
            'deskripsi' => 'iniDeskripsi',
            'gambar' => 'iniGambar.jpg',
        ]);

        DB::table('proker')->insert([
            'judul_proker' => 'iniProker',
            'gambar' => 'iniGambar.jpg',
            'tipe' => 'besar',
            'jenis_kepengurusan_id' => '1',
        ]);

        DB::table('galeri')->insert([
            'judul_kegiatan' => 'iniKegiatan',
            'gambar' => 'iniGambar.jpg',
        ]);
    }
}
