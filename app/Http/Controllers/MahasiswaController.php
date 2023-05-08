<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\KelasModel;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = MahasiswaModel::all();
        return view('mahasiswa.mahasiswa')
                ->with('mhs', $mhs);

        // $mhs = MahasiswaModel::with('kelas')->get();
        // $paginate = MahasiswaModel::orderBy('id', 'asc')->paginate(3);
        // return view('mahasiswa.mahasiswa', ['mahasiswa'=>$mhs,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = KelasModel::all();
        return view('mahasiswa.create_mahasiswa', ['kelas'=>$kelas])
                ->with('url_form', url('/mahasiswa'));

        // $kelas = KelasModel::all();
        // return view('mahasiswa.create', ['kelas'=>$kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'kelas_id' => 'required',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'hp' => 'required|digits_between:6,15',
            'alamat' => 'required|string|max:255',
        ]);

        MahasiswaModel::insert($request->except(['_token']));

        //jika berhasil ditambah, akan kembali ke hal.awal
        return redirect('mahasiswa')
                ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswa.detail', ['Mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        $kelas = KelasModel::all();
        return view('mahasiswa.create_mahasiswa', ['kelas'=>$kelas])
                ->with('mhs', $mahasiswa)
                ->with('url_form', url('/mahasiswa/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'kelas_id' => 'required',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'hp' => 'required|digits_between:6,15',
            'alamat' => 'required|string|max:255',
        ]);

        MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        
        //jika berhasil ditambah, akan kembali ke hal.awal
        return redirect('mahasiswa')
                ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        //jika berhasil ditambah, akan kembali ke hal.awal
        return redirect('mahasiswa')
                ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
