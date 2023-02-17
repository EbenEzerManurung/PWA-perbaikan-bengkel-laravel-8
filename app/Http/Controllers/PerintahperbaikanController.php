<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\perintah_perbaikan;
use App\pemesanan;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use DataTables;




class PerintahperbaikanController extends Controller
{
    public function home()
    {
        $pemesanan= pemesanan::all();
        return view('perintah_perbaikan.create', compact('pemesanan'));
        
    }

    public function index()
    {
        
        $perintah_perbaikan = perintah_perbaikan::latest()->paginate(5);
        return view ('perintah_perbaikan.index',compact('perintah_perbaikan'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('perintah_perbaikan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'nama_mekanik' => 'required',
            'pemesanan_id' => 'required',
            'qty' => 'required',
        
        

         
        ]);
        perintah_perbaikan::create($request->all());

        return redirect()->route('perintah_perbaikan.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(perintah_perbaikan $perintah_perbaikan)
    {
        return view('perintah_perbaikan.show',compact('perintah_perbaikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(perintah_perbaikan $perintah_perbaikan)
    {
        return view('perintah_perbaikan.edit', compact('perintah_perbaikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perintah_perbaikan $perintah_perbaikan)
    {
        $request->validate([
            'nama_mekanik' => 'required',
            // 'pemesanan_id' => 'required',
            'qty' => 'required',
            'status' => 'required'
            
        ]);

        $perintah_perbaikan->update($request->all());

        return redirect()->route('perintah_perbaikan.index')->with('succes','perintah perbaikan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(perintah_perbaikan $perintah_perbaikan)
    {
        $perintah_perbaikan->delete();

        return redirect()->route('perintah_perbaikan.index')->with('succes','perintah_perbaikan Berhasil di Hapus');
    }
}