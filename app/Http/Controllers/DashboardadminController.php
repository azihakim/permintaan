<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;

class DashboardadminController extends Controller
{
    //
    public function index()
    {
        $permintaans = Formulir::all();
        return view('admin.dashboardrespon', compact('permintaans'));
    }
}
