<?php

namespace App\Http\Controllers;

use App\Models\DOutletGroup;
use Illuminate\Http\Request;

/**
 * Class DOutletGroupController
 * @package App\Http\Controllers
 */
class DOutletGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dOutletGroups = DOutletGroup::paginate();

        return view('d-outlet-group.index', compact('dOutletGroups'))
            ->with('i', (request()->input('page', 1) - 1) * $dOutletGroups->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dOutletGroup = new DOutletGroup();
        return view('d-outlet-group.create', compact('dOutletGroup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(DOutletGroup::$rules);

        $dOutletGroup = DOutletGroup::create($request->all());

        return redirect()->route('outletgroup.index')
            ->with('success', 'DOutletGroup created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dOutletGroup = DOutletGroup::find($id);

        return view('d-outlet-group.show', compact('dOutletGroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dOutletGroup = DOutletGroup::find($id);

        return view('d-outlet-group.edit', compact('dOutletGroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DOutletGroup $dOutletGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DOutletGroup $dOutletGroup)
    {
        // request()->validate(DOutletGroup::$rules);

        $dOutletGroup->update($request->all());

        return redirect()->route('d-outlet-groups.index')
            ->with('success', 'DOutletGroup updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dOutletGroup = DOutletGroup::find($id)->delete();

        return redirect()->route('outletgroup.index')
            ->with('success', 'DOutletGroup deleted successfully');
    }
}
