<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\pemesanan;
use App\spare_part;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use DataTables;


class PemesananController extends Controller
{
    public function home()
    {
        $data_spare_part= spare_part::all();
        return view('pemesanan.create', compact('data_spare_part'));
        
    }

    public function index()
    {
        
        $pemesanan = pemesanan::latest()->paginate(5);
        return view ('pemesanan.index',compact('pemesanan'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pemesanan.create');
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
            'no_polis' => 'required',
            // 'spare_part_id' => 'required',
            'nama_customer' => 'required',
            // 'no_customer' => 'required',
            'alamat_customer' => 'required',
            'merk' => 'required',

         
        ]);
        // pemesanan::create($request->all());
        // Produk_keluar::create([
        //     'status' => 'confirmed',
        //     'dataproduk_id' => $produk_masuk->dataproduk_id,
        //     'qty' => (int) $permintaan->qty,
        //     'kode_produkkeluar' => 'keluar'.sprintf('%04u', Produk_keluar::count()+1)
            
           
      
        // ]);  

        pemesanan::create([
            'no_polis' => $request->no_polis, 
             'qty' => $request->qty, 
             'spare_part_id' => $request->spare_part_id, 
             'nama_customer' => $request->nama_customer, 
        'no_customer' => 'NO'.sprintf('%04u', pemesanan::count()+1),
        'alamat_customer' => $request->alamat_customer,
        'merk' => $request->merk, 

    ]);  

        return redirect()->route('pemesanan.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pemesanan $pemesanan)
    {
        return view('pemesanan.show',compact('pemesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pemesanan $pemesanan)
    {
        return view('pemesanan.edit', compact('pemesanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pemesanan $pemesanan)
    {
        $request->validate([
            'no_polis' => 'required',
            'spare_part_id' => 'required',
            'nama_customer' => 'required',
            'alamat_customer' => 'required',
            'merk' => 'required',
            
        ]);

        $pemesanan->update($request->all());

        return redirect()->route('pemesanan.index')->with('succes','pemesanan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pemesanan $pemesanan)
    {
        $pemesanan->delete();

        return redirect()->route('pemesanan.index')->with('succes','pemesanan Berhasil di Hapus');
    }
}