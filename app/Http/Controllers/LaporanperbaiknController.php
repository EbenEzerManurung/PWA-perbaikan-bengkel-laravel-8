<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\perbaikan;
use App\pemesanan;
use PDF;


class LaporanperbaiknController extends Controller
{
    public function index()
    {
        
        $pemesanan = pemesanan::latest()->paginate(5);
        return view ('laporan_perbaikan.index',compact('pemesanan'))->with('i', (request()->input('page', 1) -1) * 5);
    }


        public function PrintAll(Request $request)
        { 
            $pemesanan = array();
            
            $pemesanan = pemesanan::all();
                $pdf = PDF::loadView('laporan_perbaikan.cetak', compact('pemesanan'))->setPaper('a4', 'portrait');
            return $pdf->stream('laporan_perbaikan.pdf');
        }


    
}
