<?php

namespace App\Http\Controllers;

use App\Models\MProductGrammage;
use Illuminate\Http\Request;
use App\Models\MProduct;
use App\Models\MPackage;
use App\Models\MFlavor;

/**
 * Class MProductGrammageController
 * @package App\Http\Controllers
 */
class MProductGrammageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mProductGrammages = MProductGrammage::paginate();
        $mproducts = MProduct::all();
        $mpackages = MPackage::all();
        $mflavors = MFlavor::all();

        return view('m-product-grammage.index', compact('mProductGrammages','mproducts','mpackages','mflavors'))
            ->with('i', (request()->input('page', 1) - 1) * $mProductGrammages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mProductGrammage = new MProductGrammage();
        $mproducts = MProduct::all();
        $mpackages = MPackage::all();
        $mflavors = MFlavor::all();

        return view('m-product-grammage.create', compact('mProductGrammage','mproducts','mpackages','mflavors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(MProductGrammage::$rules);

        // $mProductGrammage = MProductGrammage::create($request->all());

        $validatedData = $request->validate([
            'prodid' => 'required',
            'fl_id' => 'required',
            'packid' => 'required',
            'gram' => 'required'
        ]);

        $productGrammage = MProductGrammage::create($validatedData);

        if ($productGrammage) {
            return redirect()->route('m-product-grammage.index')
                ->with('success', 'Product Grammage created successfully.');
        } else {
            return redirect()->back()
                ->with('error', 'Failed to create Product Grammage.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mProductGrammage = MProductGrammage::find($id);

        return view('m-product-grammage.show', compact('mProductGrammage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mProductGrammage = MProductGrammage::find($id);

        return view('m-product-grammage.edit', compact('mProductGrammage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MProductGrammage $mProductGrammage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MProductGrammage $mProductGrammage)
    {
        // request()->validate(MProductGrammage::$rules);

        $mProductGrammage->update($request->all());

        return redirect()->route('m-product-grammages.index')
            ->with('success', 'MProductGrammage updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mProductGrammage = MProductGrammage::find($id)->delete();

        return redirect()->route('m-product-grammage.index')
            ->with('success', 'MProductGrammage deleted successfully');
    }
}
