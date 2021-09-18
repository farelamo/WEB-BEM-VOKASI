<?php

namespace App\Http\Livewire\Admin\Pages\Kepengurusan;

use App\Models\urus;
use Illuminate\Http\Request;

use Livewire\Component;

class Kepengurusan extends Component
{
    public $jenis, $deskripsi, $logo, $gambar;
    public $sukses;
    public $pengurus;
    
    public function render()
    {
        $this->pengurus = urus::all();
        return view('livewire.admin.pages.kepengurusan.kepengurusan');
                // ->extends('livewire.admin.layouts.master')
                // ->section('judul');
                // ->section('isi');
    }

    protected $rules = [
            'jenis' => 'required|min:3',
            'deskripsi' => 'required|min:3',
            'logo' => 'required|min:3',
            'gambar' => 'required|min:3',
    ];

    protected $messages = [
        'jenis.required' => 'Kolom Jenis Harus Diisi !!',
        'deskripsi.required' => 'Kolom deskripsi Harus Diisi !!',
        'logo.required' => 'Kolom logo Harus Diisi !!',
        'gambar.required' => 'Kolom gambar Harus Diisi !!',
    ];

    public function simpan()
    {
       
        $validasi = $this->validate();
        urus::create($validasi);
        session()->flash('message', 'Data Berhasil Disimpan!!');
        $this->ClearForm();
        $this->emit('create');
        
        //     $data->jenis = $request->jenis;
        //     $data->deskripsi = $request->deskripsi;
        //     $data->logo = $request->logo;
        //     $data->gambar = $request->gambar;

        
        // urus::create($validatedDate);

        // $data = urus::create([
        //     'jenis' => $request->jenis,
        //     'deskripsi' => $request->deskripsi,
        //     'logo' => $request->logo,
        //     'gambar' => $request->gambar
        // ]);

            // urus::create($request->all()); 
            // urus::create([
            //         'jenis' => $request->jenis,
            //         'deskripsi' => $request->deskripsi,
            //         'logo' => $request->logo,
            //         'gambar' => $request->gambar
            //     ]);
            // return redirect('kepengurusan');

    }

    public function ClearForm() {
        $this->jenis = '';
        $this->deskripsi = '';
        $this->logo = '';
        $this->gambar = '';
    }
}
