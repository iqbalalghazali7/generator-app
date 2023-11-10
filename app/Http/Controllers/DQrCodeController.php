<?php

namespace App\Http\Controllers;

use App\Models\DQrCode;
use Illuminate\Http\Request;

/**
 * Class DQrCodeController
 * @package App\Http\Controllers
 */
class DQrCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dQrCodes = DQrCode::paginate();

        return view('d-qr-code.index', compact('dQrCodes'))
            ->with('i', (request()->input('page', 1) - 1) * $dQrCodes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dQrCode = new DQrCode();
        return view('d-qr-code.create', compact('dQrCode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DQrCode::$rules);

        $dQrCode = DQrCode::create($request->all());

        return redirect()->route('d-qr-codes.index')
            ->with('success', 'DQrCode created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dQrCode = DQrCode::find($id);

        return view('d-qr-code.show', compact('dQrCode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dQrCode = DQrCode::find($id);

        return view('d-qr-code.edit', compact('dQrCode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DQrCode $dQrCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DQrCode $dQrCode)
    {
        request()->validate(DQrCode::$rules);

        $dQrCode->update($request->all());

        return redirect()->route('d-qr-codes.index')
            ->with('success', 'DQrCode updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dQrCode = DQrCode::find($id)->delete();

        return redirect()->route('d-qr-codes.index')
            ->with('success', 'DQrCode deleted successfully');
    }
}
