<?php

namespace App\Http\Controllers;

use App\Models\{
    Tanggapan,
    Pengaduan,
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;


class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pengaduan $pengaduan)
    {
        //
        $pengaduans = Pengaduan::find($pengaduan->id);
        return view('tanggapan.create', compact('pengaduans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pengaduan $pengaduan)
    {
        // //
        // 'pengaduans_id',
        // 'users_id',
        // 'tgl_tanggapan',
        // 'tanggapan',
        // $request->validate([
        //     'tanggapan' => 'required',
        //     'status'    => 'required'
        // ]);

        $tanggapan = new Tanggapan();
        $tanggapan->pengaduans_id   = $pengaduan->id;
        $tanggapan->users_id       = Auth::user()->id;
        $tanggapan->tgl_tanggapan   = Carbon::now()->format('Y-m-d');
        $tanggapan->tanggapan       = $request->tanggapan;
        $tanggapan->save();


        DB::table('pengaduans')
            ->where('id', $pengaduan->id)
            ->update(['status' => $request->status]);

        return redirect('/pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function show(Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tanggapan $tanggapan)
    {
        //
    }
}