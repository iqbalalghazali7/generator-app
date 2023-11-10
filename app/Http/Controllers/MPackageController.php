<?php

namespace App\Http\Controllers;

use App\Models\MPackage;
use Illuminate\Http\Request;

/**
 * Class MPackageController
 * @package App\Http\Controllers
 */
class MPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mPackages = MPackage::paginate();

        return view('m-package.index', compact('mPackages'))
            ->with('i', (request()->input('page', 1) - 1) * $mPackages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mPackage = new MPackage();
        return view('m-package.create', compact('mPackage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(MPackage::$rules);

        $mPackage = MPackage::create($request->all());

        return redirect()->route('m-package.index')
            ->with('success', 'MPackage created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mPackage = MPackage::find($id);

        return view('m-package.show', compact('mPackage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mPackage = MPackage::find($id);

        return view('m-package.edit', compact('mPackage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MPackage $mPackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MPackage $mPackage)
    {
        // request()->validate(MPackage::$rules);

        $mPackage->update($request->all());

        return redirect()->route('m-packages.index')
            ->with('success', 'MPackage updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mPackage = MPackage::find($id)->delete();

        return redirect()->route('m-package.index')
            ->with('success', 'MPackage deleted successfully');
    }
}
