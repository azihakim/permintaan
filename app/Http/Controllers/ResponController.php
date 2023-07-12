<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
use App\Models\Datapermintaan;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\KirimRespon;

class ResponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $formulir = Formulir::find($id);
        $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
        return view('admin.respon', compact('formulir', 'datapermintaan'));
    }

    public function show($id)
    {
        $formulir = Formulir::find($id);
        $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
        
        // $user_id = $formulir['user_id'];
        // $user = User::whereid($user_id)->first();
        $user = User::select('*')->join('formulirs', 'formulirs.user_id','=', 'users.id')->first();
        // dd($user);
        return view('admin.respon', compact('formulir', 'datapermintaan', 'user'));
    }

    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        // dd($data);
        $respon = Formulir::find($id);
        $respon->status_form = $data['status_form'];
        $respon->respon_desk = $data['respon_desk'];
        $respon->respon = $request->user()->name;
        
        if($request->status_form == "6"){
            $respon->respon_struk = "";
        }

        if($request->hasFile('respon_bill')){
            $f = $request->file('respon_bill');
            $file_ext_bill = $f->getClientOriginalExtension();
            $file_name_bill = "Bill-".time().".". $file_ext_bill;
            $file_path_bill = public_path('store/documen');
            $f->move($file_path_bill, $file_name_bill);
            $respon->respon_bill = $file_name_bill;
        }
        else{
            $respon->respon_bill = $request->old_bill;
        }
        
        if($request->hasFile('respon_data')){
            $f = $request->file('respon_data');
            $file_ext_data = $f->getClientOriginalExtension();
            $file_name_data = "data-".time().".". $file_ext_data;
            $file_path_data = public_path('store/documen');
            $f->move($file_path_data, $file_name_data);
            $respon->respon_data = $file_name_data;
        }
        else{
            $respon->respon_data = $request->old_data;
        }
        $respon->save();


        $formulir = Formulir::find($id);
        $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
        $user = User::select('*')->join('formulirs', 'formulirs.user_id','=', 'users.id')->first();
        $date = $user->created_at->format('d/m/Y');
        // dd($user);
        Mail::to($user)->send(new kirimRespon($user));

        return redirect('dashboard-admin')->with('status', "Data $user->name, $user->jenis_permintaan tanggal $date berhasil ditanggapi");
    }
}
