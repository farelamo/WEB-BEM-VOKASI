<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anggota;
use App\Models\urus;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = anggota::all();
        $urus = urus::all();
        return view('admin/pages/anggota/anggota', compact('anggota', 'urus'));
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

    public function store(Request $request)
    {

        $rules = array(
            'nama' => 'required',
            'prodi' => 'required',
            'gender' => 'required',
            'jabatan' => 'required',
            'kepengurusan' => 'required',
            'foto' => 'required|image',
        );

        $input = array(
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'gender' => $request->gender,
            'jabatan' => $request->jabatan,
            'kepengurusan' => $request->kepengurusan,
            'foto' => $request->foto,
        );

        $validator = Validator::make($input, $rules, $messages = [
            'required' => 'hayoo nakal ngedit inspect elemen yaa ?? W K W K W K',
            'image' => ':attribute harus berupa .jpg .png',
        ])->validate();

        if ($request->has('foto')) {
            $foto = $request->foto;
            $foto_name = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path() . '/images/anggota/', $foto_name);

            $anggota = [
                'nama' => $request->nama,
                'prodi' => $request->prodi,
                'foto' => $foto_name,
                'gender' => $request->gender,
                'jabatan' => $request->jabatan,
                'jenis_kepengurusan_id' => $request->kepengurusan,
            ];
        } else {
            $anggota = [
                'nama' => $request->nama,
                'prodi' => $request->prodi,
                'foto' == '',
                'gender' => $request->gender,
                'jabatan' => $request->jabatan,
                'jenis_kepengurusan_id' => $request->kepengurusan,
            ];
        }
        anggota::create($anggota);

        return redirect('/anggota')->with('success', 'Data Berhasil ditambahkan !!');
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
        $urus = urus::all();
        $anggota = anggota::all();
        $eanggota = anggota::find($id);
        return view('admin/pages/anggota/edit', compact('urus','anggota', 'eanggota'));
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
        $anggota = anggota::findorfail($id);

        // $rules = array(
        //     'nama' => 'required',
        //     'prodi' => 'required',
        //     'gender' => 'required',
        //     'jabatan' => 'required',
        //     'kepengurusan' => 'required',
        //     'foto' => 'required|image',
        // );

        // $input = array(
        //     'nama' => $request->nama,
        //     'prodi' => $request->prodi,
        //     'gender' => $request->gender,
        //     'jabatan' => $request->jabatan,
        //     'kepengurusan' => $request->kepengurusan,
        //     'foto' => $request->foto,
        // );

        // Validator::make($input, $rules, $messages = [
        //     'required' => ' :attribute haru diisi !!',
        //     'image' => ':attribute harus berupa .jpg .png',
        // ])->validate();

        if ($request->has('foto')) {
            $picture = $anggota->foto;
            File::delete("images/anggota/" . $picture);
            $foto = $request->foto;
            $foto_name = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path() . '/images/anggota/', $foto_name);

            $anggota_data = [
                'nama' => $request->nama,
                'prodi' => $request->prodi,
                'foto' => $foto_name,
                'gender' => $request->gender,
                'jabatan' => $request->jabatan,
                'jenis_kepengurusan_id' => $request->kepengurusan,
            ];
        } else {
            $anggota_data = [
                'nama' => $request->nama,
                'prodi' => $request->prodi,
                'foto' == '',
                'gender' => $request->gender,
                'jabatan' => $request->jabatan,
                'jenis_kepengurusan_id' => $request->kepengurusan,
            ];
        }
        $anggota->update($anggota_data);

        return redirect('/anggota')->with('success', 'Data Berhasil diedit !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = anggota::findorfail($id);
        if ($anggota->foto != ''){
            $picture = $anggota->foto;
            File::delete("images/anggota/" . $picture);
            anggota::find($id)->delete();
            return redirect('/anggota')->with('success', 'Data Berhasil dihapus !!');
        } 
    }
}
