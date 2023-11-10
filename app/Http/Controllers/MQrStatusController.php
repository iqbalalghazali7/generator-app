<?php

namespace App\Http\Controllers;

use App\Models\MQrStatus;
use Illuminate\Http\Request;

/**
 * Class MQrStatusController
 * @package App\Http\Controllers
 */
class MQrStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mQrStatuses = MQrStatus::paginate();

        return view('m-qr-status.index', compact('mQrStatuses'))
            ->with('i', (request()->input('page', 1) - 1) * $mQrStatuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mQrStatus = new MQrStatus();
        return view('m-qr-status.create', compact('mQrStatus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(MQrStatus::$rules);

        $mQrStatus = MQrStatus::create($request->all());

        return redirect()->route('m-qr-status.index')
            ->with('success', 'MQrStatus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mQrStatus = MQrStatus::find($id);

        return view('m-qr-status.show', compact('mQrStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mQrStatus = MQrStatus::find($id);

        return view('m-qr-status.edit', compact('mQrStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MQrStatus $mQrStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MQrStatus $mQrStatus)
    {
        // request()->validate(MQrStatus::$rules);

        $mQrStatus->update($request->all());

        return redirect()->route('m-qr-statuses.index')
            ->with('success', 'MQrStatus updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mQrStatus = MQrStatus::find($id)->delete();

        return redirect()->route('m-qr-status.index')
            ->with('success', 'MQrStatus deleted successfully');
    }
}
