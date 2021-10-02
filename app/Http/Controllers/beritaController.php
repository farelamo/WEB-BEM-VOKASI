<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = berita::all();
        return view('admin/pages/berita/berita', compact('berita'));
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
            $gambar->move(public_path() . '/images/berita/', $gambar_name);

            $berita=[
                'judul' => $request->judul,
                'waktu' => $request->waktu,
                'tempat' => $request->tempat,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambar_name
            ];

        }else{
            $berita=[
                'judul' => $request->judul,
                'waktu' => $request->waktu,
                'tempat' => $request->tempat,
                'deskripsi' => $request->deskripsi,
                'gambar' == '',
            ];
        }
        berita::create($berita);
        return redirect('/berita')->with('success', 'Data Berhasil ditambahkan !!');
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
        $berita = berita::findorfail($id);

        if ($request->has('gambar')){
            
            $picture = $berita->gambar;
            File::delete("images/berita/" . $picture);
            $gambar= $request->gambar;
            $gambar_name = time() . '.jpg';
            $gambar->move('images/berita/',$gambar_name);

            $berita_data = [
                'judul' => $request->judul,
                'waktu' => $request->waktu,
                'tempat' => $request->tempat,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambar_name
            ];
        }else {
            $berita_data =[
                'judul' => $request->judul,
                'waktu' => $request->waktu,
                'tempat' => $request->tempat,
                'deskripsi' => $request->deskripsi,
                'gambar' == '',
            ];
        }
        $berita->update($berita_data);
        
        return redirect('/berita')->with('success', 'Data Berhasil diedit !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = berita::findorfail($id);
        if ($berita->gambar != ''){
            $picture = $berita->gambar;
            File::delete("images/berita/" . $picture);
            berita::find($id)->delete();
            return redirect('/berita')->with('success', 'Data Berhasil dihapus !!');
        } 
    }
}
