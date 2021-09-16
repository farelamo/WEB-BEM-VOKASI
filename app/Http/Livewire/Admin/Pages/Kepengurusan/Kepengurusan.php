<?php

namespace App\Http\Livewire\Admin\Pages\Kepengurusan;

use App\Models\urus;

use Livewire\Component;

class Kepengurusan extends Component
{
    public $id_urus, $jenis, $deskripsi, $logo, $gambar;
    public $isModalOpen = 0;
    
    public function render()
    {
        $pengurus = urus::all();
        return view('livewire.admin.pages.kepengurusan.kepengurusan', compact('pengurus'));
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->jenis = '';
        $this->deskripsi = '';
    }
    
    public function store()
    {
        $this->validate([
            'jenis' => 'required',
            'deskripsi' => 'required',
            'logo' => 'required',
            'gambar' => 'required',
        ]);
    
        urus::CreateOrCreate(['id' => $this->id_urus], [
            'jenis' => $this->jenis,
            'deskripsi' => $this->deskripsi,
            'logo' => $this->logo,
            'gambar' => $this->gambar,
        ]);

        session()->flash('message','Data created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $pengurus = urus::findOrFail($id);

        $this->id_urus = $id;
        $this->jenis = $pengurus->jenis;
        $this->deskripsi = $pengurus->deskripsi;
        $this->logo = $pengurus->logo;
        $this->gambar = $pengurus->gambar;
    
        $this->openModalPopover();
    }
    
    public function delete($id)
    {
        urus::find($id)->delete();
        session()->flash('message', 'Data deleted.');
    }
}
