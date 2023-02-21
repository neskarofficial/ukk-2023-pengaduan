<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengaduans = Pengaduan::all();
        return view('pengaduan.index', compact('pengaduans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pengaduans = Pengaduan::all();
        return view('pengaduan.create',compact('pengaduans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'isi_laporan' => 'required|min:10',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'isi_laporan.required'      => 'Isi laporan wajib di isi',
            'isi_laporan.min'           => 'Isi laporan minimal 10 Karakter',
            'foto.required'             => 'Foto Wajib Disi',
            'foto.mimes'                => 'Wajib Foto dengan ekstensi .jpg , .jpeg, .png',
            'foto.max'                  => 'Maksimal size 2MB'
        ]);
        // $filename = $request->file()->
        $path = $request->file('foto')->store('public/img/');

        Pengaduan::create([
            'users_id' => Auth::user()->id,
            'tgl_pengaduan' => Carbon::now()->format('Y-m-d'),
            'isi_laporan' => $request->isi_laporan,
            'foto' => $path,
            'status' => '0'
        ]);

        return redirect('/pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
        // $pengaduans = Pengaduan::all()->where('id', $pengaduan->id);
        $pengaduans = Pengaduan::find($pengaduan->id);
        return view('pengaduan.show', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
        $pengaduans = Pengaduan::find($pengaduan->id);
        return view('pengaduan.edit', compact('pengaduan'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        
        // $request->validate([
        //     'tgl_pengaduan' => 'required',
        //     'isi_laporan' => 'required',
        //     'foto' => 'required'
        // ]);
        
        // $pengaduans = Pengaduan::find($pengaduan->id);
        // $pengaduan->   tgl_pengaduan         =  $request->tgl_pengaduan;
        // $pengaduan->   isi_laporan           =  $request->isi_laporan;
        // $pengaduan->   foto                  =  $request->foto;
        // $pengaduan->update();

        $pengaduan->update([
            'tgl_pengaduan' => $request->tgl_pengaduan,
            'isi_laporan' => $request->isi_laporan,
        ]);
        return redirect('/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
        $pengaduans = $pengaduan::find($pengaduan->id);
        $pengaduans->delete();
        return redirect('pengaduan');
    }
}