<?php

namespace App\Http\Controllers;

use App\Models\gandusari;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function about()
    {
        return view('about');
    }
    public function login()
    {
        return view('login');
    }

    public function create()
    {
        return view('tambah');
    }
    public function home()
    {
        $datas = gandusari::paginate(10);
        return view('index', compact('datas'));
    }
    public function detail()
    {
        $datas = gandusari::all();
        return view('details', compact('datas'));
    }
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $datas = gandusari::all();
        return view('datatanaman', compact('datas'));
    }

    public function insertdata(Request $request)
    {
        //dd($request->all());
        $datas = gandusari::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fototanaman/', $request->file('foto')->getClientOriginalName());
            $datas->foto = $request->file('foto')->getClientOriginalName();
            $datas->save();
        }
        return redirect()->route('datatanaman')->with('success', 'Data Berhasil Di Simpan');
    }

    public function editdata($id)
    {
        $datas = gandusari::find($id);
        //dd($data);
        return view('editdata', compact('datas'));
    }
    public function updatedata(Request $request, $id)
    {
        $data = gandusari::find($id);
        $data->update($request->all());
        return redirect()->route('datatanaman')->with('success', 'Data Berhasil Di Update');
    }
    public function delete($id)
    {
        $data = gandusari::find($id);
        $data->delete();
        return redirect()->route('datatanaman')->with('success', 'Data Berhasil Di Hapus');
    }
}
