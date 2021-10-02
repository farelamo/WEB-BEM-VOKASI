<?php

namespace App\Http\Controllers;
use App\Models\urus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class kepengurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengurus = urus::all();
        return view('admin/pages/kepengurusan/kepengurusan', compact('pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // protected $rules = [
    //     'jenis' => 'required',
    //     'deskripsi' => 'required',
    //     'logo' => 'required',
    //     'gambar' => 'required',
    // ];

    public function store(Request $request)
    {
        // $request->validate([
        //     'jenis' => 'required',
        //     'deskripsi' => 'required',
        //     'logo' => 'required',
        //     'gambar' => 'required'
        // ]);

        //batas
        if ($request->has('files')){
            $gambar =  $request->file('files')['gambar']; //akses array di array assosiative files
            $logo = $request->file('files')['logo'];
            // dd($request->file('files'));
            $gambar_name = time() . '.' . $request->file('files')['gambar']->getClientOriginalExtension(); 
            $logo_name = time() . '.' . $request->file('files')['logo']->getClientOriginalExtension(); 

            foreach ($request->file('files') as $key => $file){
                $key == 'gambar' ? 
                    $gambar->move(public_path() . '/images/kepengurusan/gambar', $gambar_name) :  
                    $logo->move(public_path() . '/images/kepengurusan/logo', $logo_name);
            }

            $kepengurusan=[
                'jenis' => $request->jenis,
                'deskripsi' => $request->deskripsi,
                'logo' => $logo_name,
                'gambar' => $gambar_name,
            ];

        }else{
            $kepengurusan=[
                'jenis' => $request->jenis,
                'deskripsi' => $request->deskripsi,
                'logo' => '',
                'gambar' => '',
            ];
        }
        urus::create($kepengurusan);
        return redirect('/kepengurusan')->with('success', 'Data Berhasil ditambahkan !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // BATAS LAMA ,, JANGAN DIHAPUS PLISS BUAT BELAJAR - FARIZ !!!
        // $urus = urus::findorfail($id);

        // if ($request->has('files')){

        //     if(array_key_exists('gambar', $request->file('files'))) {
        //         $gambar = $request->file('files')['gambar'];
        //         File::delete("images/kepengurusan/gambar/" . $picture1);
        //     } else if (array_key_exists('logo', $request->file('files'))) {
        //         $logo = $request->file('files')['logo'];
        //         File::delete("images/kepengurusan/logo/" . $picture2);
        //     }

        //     // batas
        //     $picture1 = $urus->gambar;
        //     $picture2 = $urus->logo;
        //     File::delete("images/kepengurusan/gambar/" . $picture1);
        //     File::delete("images/kepengurusan/logo/" . $picture2);

        //     $gambar =  $request->file('files')['gambar']; //akses array di array assosiative files
        //     $logo = $request->file('files')['logo'];
        //     // dd($request->file('files'));
        //     $gambar_name = time() . '.' . $request->file('files')['gambar']->getClientOriginalExtension(); 
        //     $logo_name = time() . '.' . $request->file('files')['logo']->getClientOriginalExtension(); 

        //     foreach ($request->file('files') as $key => $file){
        //         $key == 'gambar' ? 
        //             $gambar->move(public_path() . '/images/kepengurusan/gambar', $gambar_name) :  
        //             $logo->move(public_path() . '/images/kepengurusan/logo', $logo_name);
        //     }

        //     $kepengurusan=[
        //         'jenis' => $request->jenis,
        //         'deskripsi' => $request->deskripsi,
        //         'logo' => $logo_name,
        //         'gambar' => $gambar_name,
        //     ];

        // }
        // END BATAS LAMA ,, JANGAN DIHAPUS PLISS BUAT BELAJAR - FARIZ !!!

        // BATAS BARU
        $urus = urus::findorfail($id);
        $picture1 = $urus->gambar;
        $picture2 = $urus->logo;

        if ($request->has('files')){
 
        $gambar_name = $picture1;
        $logo_name = $picture2;

        foreach ($request->file('files') as $key => $file){
            if($key == 'gambar') {
                $gambar = $request->file('files')['gambar'];
                File::delete("images/kepengurusan/gambar/" . $picture1);

                $gambar_name = time() . '.' . $gambar->getClientOriginalExtension(); 
                $gambar->move(public_path() . '/images/kepengurusan/gambar', $gambar_name);
            } else if ($key == 'logo') {
                $logo = $request->file('files')['logo'];
                File::delete("images/kepengurusan/logo/" . $picture2);

                $logo_name = time() . '.' . $logo->getClientOriginalExtension();
                $logo->move(public_path() . '/images/kepengurusan/logo', $logo_name);
            }
        }

        $kepengurusan=[
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'logo' => $logo_name,
            'gambar' => $gambar_name,
        ];

        }else{
            $kepengurusan=[
                'jenis' => $request->jenis,
                'deskripsi' => $request->deskripsi,
                'logo' => $picture2,
                'gambar' => $picture1,
            ];
        }

        $urus->update($kepengurusan);
        
        return redirect('/kepengurusan')->with('success', 'Data Berhasil diedit !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $urus = urus::findorfail($id);
        if ($urus->gambar != '' && $urus->logo != '') {
            $picture1 = $urus->gambar;
            $picture2 = $urus->logo;
            File::delete('images/kepengurusan/gambar/'.$picture1);
            File::delete('images/kepengurusan/logo/'.$picture2);

            urus::find($id)->delete();
            return redirect('/kepengurusan')->with('success', 'Data Berhasil dihapus !!');
        } 
    }
}