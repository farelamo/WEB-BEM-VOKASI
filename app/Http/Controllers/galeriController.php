<?php

namespace App\Http\Controllers;
use App\Models\galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class galeriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = galeri::all();
        return view('admin/pages/galeri/galeri', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if ($request->has('gambar')){
            $gambar = $request->gambar;
            $gambar_name = time() . '.jpg'; 
            $gambar->move(public_path() . '/images/galeri/', $gambar_name);

            $Galeri=[
                'judul_kegiatan' => $request->judul,
                'gambar' => $gambar_name
            ];

        }else{
            $Galeri=[
                'judul_kegiatan' => $request->judul,
                'gambar' == '',
            ];
        }
        galeri::create($Galeri);
        return redirect('/galeri')->with('message', 'Data Berhasil ditambahkan !!');
        
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
        //
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
        $Galeri = galeri::findorfail($id);

        if ($request->has('gambar')){
            
            $picture = $Galeri->gambar;
            File::delete("images/berita/" . $picture);
            $gambar= $request->gambar;
            $gambar_name = time() . '.jpg';
            $gambar->move('images/galeri/',$gambar_name);

            $Galeri_data = [
                'judul_kegiatan' => $request->judul,
                'gambar' => $gambar_name
            ];
        }else {
            $Galeri_data =[
                'judul_kegiatan' => $request->judul,
                'gambar' == '',
            ];
        }
        $Galeri->update($Galeri_data);
        
        return redirect('/galeri')->with('message', 'Data Berhasil diupdate !!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $Galeri = galeri::findorfail($id);
        if ($Galeri->gambar != ''){
            $picture = $Galeri->gambar;
            File::delete("images/galeri/" . $picture);
            galeri::find($id)->delete();
            return redirect('/galeri')->with('message', 'Data Berhasil dihapus !!');
        } 
       
    }
}
