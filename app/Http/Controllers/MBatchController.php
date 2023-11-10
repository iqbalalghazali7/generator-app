<?php

namespace App\Http\Controllers;

use App\Models\MBatch;
use App\Models\MFlavor;
use App\Models\MPackage;
use App\Models\MProduct;
use App\Models\MProductGrammage;
use Illuminate\Http\Request;

/**
 * Class MBatchController
 * @package App\Http\Controllers
 */
class MBatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mBatches = MBatch::paginate();
        $mproducts = MProduct::all();
        $mpackages = MPackage::all();
        $mflavors = MFlavor::all();
        $mProductGrammages = MProductGrammage::all();

        return view('m-batch.index', compact('mBatches', 'mproducts', 'mpackages', 'mflavors', 'mProductGrammages'))
            ->with('i', (request()->input('page', 1) - 1) * $mBatches->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getData($grammid)
     {
         $batchData = MBatch::getDataByGrammid($grammid);

         return response()->json($batchData);
     }

    public function create()
    {
        $mproducts = MProduct::all();
        $mpackages = MPackage::all();
        $mflavors = MFlavor::all();
        $mProductGrammages = MProductGrammage::all();
        $mBatch = new MBatch();

        return view('m-batch.create', compact('mBatch','mproducts','mpackages','mflavors','mProductGrammages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(MBatch::$rules);

        $mBatch = MBatch::create($request->all());

        return redirect()->route('m-batch.index')
            ->with('success', 'MBatch created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mBatch = MBatch::find($id);

        return view('m-batch.show', compact('mBatch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mBatch = MBatch::find($id);

        return view('m-batch.edit', compact('mBatch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MBatch $mBatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MBatch $mBatch)
    {
        request()->validate(MBatch::$rules);

        $mBatch->update($request->all());

        return redirect()->route('m-batch.index')
            ->with('success', 'MBatch updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($batchid)
    {
        $mBatch = MBatch::find($batchid);
        if ($mBatch) {
            $mBatch->delete();
            return redirect()->route('m-batch.index')->with('success', 'MBatch deleted successfully');
        }

        return redirect()->route('m-batch.index')->with('error', 'Failed to delete MBatch');
    }
}
