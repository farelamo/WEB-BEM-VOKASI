<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\berita as Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::paginate(2);
        return view('user.berita.index', compact('berita'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('user.berita.show', compact('berita'));
    }
}
