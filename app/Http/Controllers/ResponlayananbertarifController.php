<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layananbertarif;
use App\Models\Formulir;
use App\Models\Datapermintaan;
use App\Models\Responlayananbertarif;

class ResponlayananbertarifController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formulir = Formulir::find($id);
        $datapermintaan = Datapermintaan::where("formulir_id", $id)->get();
        return view('admin.respon', compact('formulir', 'datapermintaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        // dd($data);
        $respon = Formulir::find($id);
        $respon->status_form = $data['status_form'];
        // $respon->respon_desk = $data['respon_desk'];
        // if ($request->)

        if($request->hasFile('respon_bill')){
            $f = $request->file('respon_bill');
            $file_ext_bill = $f->getClientOriginalExtension();
            $file_name_bill = "Bill-".time().".". $file_ext_bill;
            $file_path_bill = public_path('store/documen');
            $f->move($file_path_bill, $file_name_bill);
            $respon->respon_bill = $file_name_bill;
        }
        else{
            // $ext_bill = $request->respon_bill->getClientOriginalExtension();
            // $file_name_bill = "Bill-".time()."." . $ext_bill;
            // $request->respon_bill->storeAs('public/documen', $file_name_bill);
            // $respon->respon_bill = $file_name_bill;
            $respon->respon_bill = $request->old_bill;
            

        }

        

        $respon->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
