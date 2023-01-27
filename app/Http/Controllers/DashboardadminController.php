<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use FFI;
use Illuminate\Http\Request;

class DashboardadminController extends Controller
{
    //
    public function index()
    {
        $no = 1;
        $pBaru = Formulir::where('status_form','1')->count();
        $pProses = Formulir::where('status_form','2')->count();
        $pTerima = Formulir::where('status_form','3')->count();
        $pSelesai = Formulir::where('status_form','4')->count();
        $pPembayaran = Formulir::where('status_form','5')->count();
        $pUlang = Formulir::where('status_form','6')->count();
        $pBatal = Formulir::where('status_form','7')->count();
        $permintaans = Formulir::all();
        return view('admin.dashboardrespon', compact('permintaans', 'no',
        'pBaru','pSelesai','pPembayaran','pTerima','pUlang','pBatal','pProses'));
    }
}
