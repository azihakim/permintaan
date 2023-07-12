<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardPencatatanController extends Controller
{
    //
    public function getStatusPencatatanAgromet(){
        $jam0701 = DB::select('SELECT * FROM pencatatans WHERE pencatatans.tanggal = CURDATE() AND pencatatans.waktu = "07.01"');
        $jam0731 = DB::select('SELECT * FROM pencatatans WHERE pencatatans.tanggal = CURDATE() AND pencatatans.waktu = "07.31"');
        $jam1001 = DB::select('SELECT * FROM pencatatans WHERE pencatatans.tanggal = CURDATE() AND pencatatans.waktu = "10.01"');
        $jam1301 = DB::select('SELECT * FROM pencatatans WHERE pencatatans.tanggal = CURDATE() AND pencatatans.waktu = "13.01"');
        $jam1331 = DB::select('SELECT * FROM pencatatans WHERE pencatatans.tanggal = CURDATE() AND pencatatans.waktu = "13.31"');
        $jam1401 = DB::select('SELECT * FROM pencatatans WHERE pencatatans.tanggal = CURDATE() AND pencatatans.waktu = "14.01"');
        $jam1601 = DB::select('SELECT * FROM pencatatans WHERE pencatatans.tanggal = CURDATE() AND pencatatans.waktu = "16.01"');
        $jam1731 = DB::select('SELECT * FROM pencatatans WHERE pencatatans.tanggal = CURDATE() AND pencatatans.waktu = "17.31"');
        $jam1801 = DB::select('SELECT * FROM pencatatans WHERE pencatatans.tanggal = CURDATE() AND pencatatans.waktu = "18.01"');
        $jam1901 = DB::select('SELECT * FROM pencatatans WHERE pencatatans.tanggal = CURDATE() AND pencatatans.waktu = "19.01"');

        $totalAgromet = DB::select('SELECT COUNT(*) AS "Total" FROM pencatatans')[0]->Total;
        $totalAngin = DB::select('SELECT COUNT(*) AS "Total" FROM angin_10m_24jams')[0]->Total;
        $totalLamaPenyinaran = DB::select('SELECT COUNT(*) AS "Total" FROM lama_penyinarans')[0]->Total;
        $totalLysimeter = DB::select('SELECT COUNT(*) AS "Total" FROM lysimeters')[0]->Total;

        return view('pencatatan.dashboard',[
            'jam0701' => $jam0701,
            'jam0731' => $jam0731,
            'jam1001' => $jam1001,
            'jam1301' => $jam1301,
            'jam1331' => $jam1331,
            'jam1401' => $jam1401,
            'jam1601' => $jam1601,
            'jam1731' => $jam1731,
            'jam1801' => $jam1801,
            'jam1901' => $jam1901,
            'totalAgromet' => $totalAgromet,
            'totalAngin' => $totalAngin,
            'totalLamaPenyinaran' => $totalLamaPenyinaran,
            'totalLysimeter' => $totalLysimeter,
        ]);

    }
}
