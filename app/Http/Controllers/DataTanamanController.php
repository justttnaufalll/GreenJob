<?php

namespace App\Http\Controllers;

use App\Models\gandusari;

use Illuminate\Http\Request;

class DataTanamanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = gandusari::all();
        return view('datatanaman', compact('data'));
    }
}
