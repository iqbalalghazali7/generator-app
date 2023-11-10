<?php

namespace App\Http\Controllers;

use App\Models\DQr;
use App\Models\DQrCode;
use App\Models\MBatch;
use Illuminate\Http\Request;

/**
 * Class DQrController
 * @package App\Http\Controllers
 */
class DQrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dQrs = DQr::paginate();

        return view('d-qr.index', compact('dQrs'))
            ->with('i', (request()->input('page', 1) - 1) * $dQrs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generate(Request $request){
        $total = $request->total;
        $batchId = $request->batchid;

        // ... Logic untuk generate kode unik (campuran angka dan huruf) sebanyak $total

        // Misal kode unik sementara di-generate secara acak sebagai contoh
        $codes = [];
        for ($i = 0; $i < $total; $i++) {
            $code = substr(md5(uniqid(mt_rand(), true)), 0, 10); // Contoh generate kode unik acak (panjang 10 karakter)
            $codes[] = $code;

            // Simpan ke tabel d_qr
            $qr = new DQr();
            $qr->batchid = $batchId;
            $qr->total = $total;
            $qr->ua = $request->userAgent(); // atau informasi user agent lainnya
            $qr->date = now();
            $qr->ip = $request->ip();
            $qr->kode_unik = $code;
            $qr->save();

            // Simpan ke tabel d_qr_code
            $qrCode = new DQrCode();
            $qrCode->qrid = $qr->qrid;
            $qrCode->qrcode_name = $code; // Atau sesuaikan dengan data QR code yang sebenarnya
            $qrCode->save();
        }
        $dQr = new DQr();
        $mBatches = MBatch::all();
        // Tampilkan view dengan daftar kode unik yang telah di-generate
        return view('d-qr.create', compact('codes','mBatches','dQr'))->with('success', 'UniqueCode Generate successfully.');
    }

    public function create()
    {
        $dQr = new DQr();
        $mBatches = MBatch::all();
        return view('d-qr.create', compact('dQr','mBatches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DQr::$rules);

        $dQr = DQr::create($request->all());

        return redirect()->route('d-qrs.index')
            ->with('success', 'DQr created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dQr = DQr::find($id);

        return view('d-qr.show', compact('dQr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dQr = DQr::find($id);

        return view('d-qr.edit', compact('dQr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DQr $dQr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DQr $dQr)
    {
        request()->validate(DQr::$rules);

        $dQr->update($request->all());

        return redirect()->route('d-qrs.index')
            ->with('success', 'DQr updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dQr = DQr::find($id)->delete();

        return redirect()->route('d-qrs.index')
            ->with('success', 'DQr deleted successfully');
    }
}
