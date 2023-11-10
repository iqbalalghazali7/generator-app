<?php

namespace App\Http\Controllers;

use App\Models\DOutletGroup;
use App\Models\DOutletLocation;
use Illuminate\Http\Request;

/**
 * Class DOutletLocationController
 * @package App\Http\Controllers
 */
class DOutletLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dOutletLocations = DOutletLocation::paginate();
        $dOutletGroups = DOutletGroup::all();

        return view('d-outlet-location.index', compact('dOutletLocations','dOutletGroups'))
            ->with('i', (request()->input('page', 1) - 1) * $dOutletLocations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dOutletLocation = new DOutletLocation();
        $dOutletGroups = DOutletGroup::all();

        return view('d-outlet-location.create', compact('dOutletLocation','dOutletGroups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(DOutletLocation::$rules);

        $dOutletLocation = DOutletLocation::create($request->all());

        return redirect()->route('outletloc.index')
            ->with('success', 'DOutletLocation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dOutletLocation = DOutletLocation::find($id);

        return view('d-outlet-location.show', compact('dOutletLocation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dOutletLocation = DOutletLocation::find($id);

        return view('d-outlet-location.edit', compact('dOutletLocation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DOutletLocation $dOutletLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DOutletLocation $dOutletLocation)
    {
        // request()->validate(DOutletLocation::$rules);

        $dOutletLocation->update($request->all());

        return redirect()->route('d-outlet-locations.index')
            ->with('success', 'DOutletLocation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dOutletLocation = DOutletLocation::find($id)->delete();

        return redirect()->route('outletloc.index')
            ->with('success', 'DOutletLocation deleted successfully');
    }
}
