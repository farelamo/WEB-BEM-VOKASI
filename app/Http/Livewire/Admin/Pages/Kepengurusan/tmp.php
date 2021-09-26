<?php

namespace App\Http\Livewire\Admin\Pages\Kepengurusan;

use App\Models\urus;
use Illuminate\Http\Request;

use Livewire\Component;

class Kepengurusan extends Component
{
    public $id_urus, $jenis, $deskripsi, $logo, $gambar;
    public $pengurus;
    public $isModalOpen = 0;
    
    public function render()
    {
        $this->pengurus = urus::all();
        return view('livewire.admin.pages.kepengurusan.kepengurusan', compact($this->pengurus));
    }

    private function resetInputFields(){
        $this->jenis = '';
        $this->deskripsi = '';
        $this->logo = '';
        $this->gambar = '';
    }

    public function store(Request $request)
    {
        $validatedDate = $this->validate([
            'jenis' => 'required',
            'deskripsi' => 'required',
            'logo' => 'required',
            'gambar' => 'required',
        ]);
        
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
          
        // session()->flash('message', 'Data Created Successfully.');

        $this->resetInputFields();

        $this->emit('CreateStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $data = urus::where('id', $id)->first();
        $this->id_urus = $id;
        $this->jenis = $data->jenis;
        $this->deskripsi = $data->deskripsi;
        $this->logo = $data->logo;
        $this->gambar = $data->gambar;
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'jenis' => 'required',
            'deskripsi' => 'required',
            'logo' => 'required',
            'gambar' => 'required',
        ]);

        if ($this->id_urus) {
            $data = User::find($this->id_urus);
            $data->update([
                'jenis' => $this->jenis,
                'deskripsi' => $this->deskripsi,
                'logo' => $this->logo,
                'gambar' => $this->gambar
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Data Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            urus::where('id',$id)->delete();
            session()->flash('message', 'Data Deleted Successfully.');
        }
    }
}