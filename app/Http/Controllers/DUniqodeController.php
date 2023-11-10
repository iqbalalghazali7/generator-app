<?php

namespace App\Http\Controllers;
use App\Models\DQr;

use Illuminate\Http\Request;

class DUniqodeController extends Controller
{
    public function index()
    {
        $dQrs = DQr::paginate();

        return view('d-uniqcode.index', compact('dQrs'))
            ->with('i', (request()->input('page', 1) - 1) * $dQrs->perPage());
    }
}
