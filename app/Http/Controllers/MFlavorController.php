<?php

namespace App\Http\Controllers;

use App\Models\MFlavor;
use Illuminate\Http\Request;

/**
 * Class MFlavorController
 * @package App\Http\Controllers
 */
class MFlavorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mFlavors = MFlavor::paginate();

        return view('m-flavor.index', compact('mFlavors'))
            ->with('i', (request()->input('page', 1) - 1) * $mFlavors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mFlavor = new MFlavor();
        return view('m-flavor.create', compact('mFlavor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(MFlavor::$rules);

        $mFlavor = MFlavor::create($request->all());

        return redirect()->route('m-flavor.index')
            ->with('success', 'MFlavor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mFlavor = MFlavor::find($id);

        return view('m-flavor.show', compact('mFlavor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mFlavor = MFlavor::find($id);

        return view('m-flavor.edit', compact('mFlavor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MFlavor $mFlavor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MFlavor $mFlavor)
    {
        request()->validate(MFlavor::$rules);

        $mFlavor->update($request->all());

        return redirect()->route('m-flavors.index')
            ->with('success', 'MFlavor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mFlavor = MFlavor::find($id)->delete();

        return redirect()->route('m-flavor.index')
            ->with('success', 'MFlavor deleted successfully');
    }
}
