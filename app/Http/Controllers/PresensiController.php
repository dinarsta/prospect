<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Presensi;
use PDF;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presensi = presensi::all();
        return view('masuk',compact('presensi'));
    }
    
    public function history()
    {
        $presensi = presensi::all();
        return view('history', compact('presensi'));
    }
    public function ubah()
    {
        return view('masuk');
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
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['id_user', '=', auth()->user()->id],
            ['tgl', '=', $tanggal],
        ])->first();
        if ($presensi) {
            dd(" absen masuk sudah ada");
        } else {
            Presensi::create([
                'id_user' => auth()->user()->id,
                'tgl' => $tanggal,
                'jamasuk' => $localtime,
            ]);
        }


        return redirect('masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function halamanrekap()
    {
        return view('Halaman-rekap');
    }

    public function tampildatakeseluruhan($tglawal, $tglakhir)
    {
        $presensi = Presensi::with('user')->whereBetween('tgl', [$tglawal, $tglakhir])->orderBy('tgl', 'asc')->get();
        return view('rekap', compact('presensi'));
    }

    public function presensipulang()
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['id_user', '=', auth()->user()->id],
            ['tgl', '=', $tanggal],
        ])->first();

        $dt = [
            'jamkeluar' => $localtime,
            'jamkerja' => date('H:i:s', strtotime($localtime) - strtotime($presensi->jamasuk))
        ];

        if ($presensi->jamkeluar == "") {
            $presensi->update($dt);
            return redirect('masuk');
        } else {
            dd(" absen keluar sudah ada");
        }
        return view('Presensi.Rekap-karyawan', compact('presensi'));
    }
    public function pdf(){
    $presensi = Presensi::all();
    
    view()->share('presensi', $presensi);
    $pdf = PDF::loadview('history-pdf');
    return $pdf->download('historyabsensi.pdf');
    
    }
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}