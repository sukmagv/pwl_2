<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\KelasModel;
use App\Models\MahasiswaModel;
use App\Models\Mahasiswa_Matakuliah;
use App\Models\MhsMatkul;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.mahasiswa');
    }

    public function data()
    {
        $data = MahasiswaModel::selectRaw('id, nim, nama, hp');
        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
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
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nim' => 'required|string|max:10|unique:mahasiswa,nim',
    //         'nama' => 'required|string|max:50',
    //         'foto' => 'required|image|mimes:jpeg,png,jpg',
    //         'kelas_id' => 'required',
    //         'jk' => 'required|in:L,P',
    //         'tempat_lahir' => 'required|string|max:50',
    //         'tanggal_lahir' => 'required|date',
    //         'hp' => 'required|digits_between:6,15',
    //         'alamat' => 'required|string|max:255',
    //     ]);

    //     MahasiswaModel::insert($request->except(['_token']));

    //     $image_name = $request->file('foto')->store('images', 'public');

    //     MahasiswaModel::create([
    //         'nim' => $request->nim,
    //         'nama' => $request->nama,
    //         'foto' => $image_name,
    //         'kelas_id' => $request->kelas_id,
    //         'jk' => $request->jk,
    //         'tempat_lahir' => $request->tempat_lahir,
    //         'tanggal_lahir' => $request->tanggal_lahir,
    //         'hp' => $request->hp,
    //         'alamat' => $request->alamat,
    //     ]);

    //     //jika berhasil ditambah, akan kembali ke hal.awal
    //     return redirect('mahasiswa')
    //             ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    // }

    public function store(Request $request)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal ditambahkan. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::create($request->all());
        return response()->json([
            'status' => ($mhs),
            'modal_close' => false,
            'message' => ($mhs)? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
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
        return view('mahasiswa.detail', ['mahasiswa' => $mahasiswa]);
    }

    public function khs($id)
    { 
        $mahasiswa = MahasiswaModel::find($id);
        $khs = MhsMatkul::where('mhs_id', $id)->get();
        return view('mahasiswa.nilai')
            ->with('mahasiswa',$mahasiswa)
            ->with('khs',$khs);
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
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'kelas_id' => 'required',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'hp' => 'required|digits_between:6,15',
            'alamat' => 'required|string|max:255',
        ]);

        MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        
        $image_name = $request->file('foto')->store('images', 'public');

        MahasiswaModel::where('id', $id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'kelas_id' => $request->kelas_id,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
        ]);

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

        $mahasiswa = Mahasiswamodel::find($id);

        // Storage::disk('public')->delete($mahasiswa->foto);
        $mahasiswa->delete();

        //jika berhasil ditambah, akan kembali ke hal.awal
        return redirect('mahasiswa')
                ->with('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function cetak_pdf($id) {
        $mahasiswa = MahasiswaModel::where('id',$id)->first();
        $khs = MhsMatkul::where('mhs_id',$id)->get();
        $pdf = Pdf::loadview('mahasiswa.mhs_pdf', ['mahasiswa' => $mahasiswa, 'khs' => $khs]);
        return $pdf->stream();
    }
}
