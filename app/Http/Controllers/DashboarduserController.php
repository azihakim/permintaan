<?php

namespace App\Http\Controllers;
use App\Models\Layananbertarif;
use App\Models\Formulir;
use App\Models\Datapermintaan;
use Illuminate\Http\Request;

class DashboarduserController extends Controller
{
    //
    public function index()
    {
        $permintaans = Formulir::all();
        return view('menu.dashboarduser', compact('permintaans'));
    }
}
