<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\pemesanan;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use DataTables;
  
class ChartController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function index()
    {
        $pemesanan = pemesanan::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('tgl', date('Y'))
                    ->groupBy(\DB::raw("Month(tgl)"))
                    ->pluck('count');
          
        return view('chart', compact('pemesanan'));
    }
}
