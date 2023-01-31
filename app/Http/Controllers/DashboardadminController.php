<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use FFI;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardadminController extends Controller
{
    //
    public function index(user $user)
    {   
        $no = 1;
        $pBaru = Formulir::where('status_form','1')->count();
        $pProses = Formulir::where('status_form','2')->count();
        $pTerima = Formulir::where('status_form','3')->count();
        $pSelesai = Formulir::where('status_form','4')->count();
        $pPembayaran = Formulir::where('status_form','5')->count();
        $pUlang = Formulir::where('status_form','6')->count();
        $pBatal = Formulir::where('status_form','7')->count();
        $formulir = Formulir::all();

        // $data = DB::table('formulirs')->select('user_id');
        // // $user_id = $data['user_id'];

        // $user = User::whereIn('id', $data)->first();
        $data = User::select('*')->join('formulirs', 'formulirs.user_id','=', 'users.id')->get();
        // dd($data);
        

        return view('admin.dashboardrespon', compact('data', 'no',
        'pBaru','pSelesai','pPembayaran','pTerima','pUlang','pBatal','pProses','user'));
    }
}
