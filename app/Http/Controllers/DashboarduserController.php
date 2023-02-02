<?php

namespace App\Http\Controllers;
use App\Models\Layananbertarif;
use App\Models\Formulir;
use App\Models\Datapermintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboarduserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    public function index()
    {
        $permintaans = Formulir::whereuser_id(Auth::id())->get();
        return view('menu.dashboarduser', compact('permintaans'));
    }
}
