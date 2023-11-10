<?php

namespace App\Http\Controllers;

use App\Models\MProduct;
use Illuminate\Http\Request;

/**
 * Class MProductController
 * @package App\Http\Controllers
 */
class MProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mProducts = MProduct::paginate();

        return view('m-product.index', compact('mProducts'))
            ->with('i', (request()->input('page', 1) - 1) * $mProducts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mProduct = new MProduct();
        return view('m-product.create', compact('mProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(MProduct::$rules);

        $mProduct = MProduct::create($request->all());

        return redirect()->route('m-product.index')
            ->with('success', 'MProduct created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mProduct = MProduct::find($id);

        return view('m-product.show', compact('mProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mProduct = MProduct::find($id);

        return view('m-product.edit', compact('mProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MProduct $mProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MProduct $mProduct)
    {
        // request()->validate(MProduct::$rules);

        $mProduct->update($request->all());

        return redirect()->route('m-product.index')
            ->with('success', 'MProduct updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mProduct = MProduct::find($id)->delete();

        return redirect()->route('m-product.index')
            ->with('success', 'MProduct deleted successfully');
    }
}
