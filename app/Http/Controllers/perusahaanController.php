<?php

namespace App\Http\Controllers;
use App\Perusahaan;
use App\Setting;
use Illuminate\Http\Request;
use PDF;

class perusahaanController extends Controller
{
    public function index()
    {
        return view('perusahaan.index');
    }

    public function data()
    {
        $perusahaan = Perusahaan::orderBy('kode_perusahaan')->get();

        return datatables()
            ->of($perusahaan)
            ->addIndexColumn()
            ->addColumn('select_all', function ($produk) {
                return '
                    <input type="checkbox" name="id_perusahaan[]" value="'. $produk->id_perusahaan .'">
                ';
            })
            ->addColumn('kode_perusahaan', function ($perusahaan) {
                return '<span class="label label-success">'. $perusahaan->kode_perusahaan .'<span>';
            })
            ->addColumn('aksi', function ($perusahaan) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('perusahaan.update', $perusahaan->id_perusahaan) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button type="button" onclick="deleteData(`'. route('perusahaan.destroy', $perusahaan->id_perusahaan) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi', 'select_all', 'kode_perusahaan'])
            ->make(true);
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
    public function store(Request $request)
    {
        $perusahaan = Perusahaan::latest()->first() ?? new Perusahaan();
        $kode_perusahaan = (int) $perusahaan->kode_perusahaan +1;

        $perusahaan = new Perusahaan();
        // $perusahaan->kode_perusahaan = tambah_nol_didepan($kode_perusahaan, 5);
        $perusahaan->nama = $request->nama;
        $perusahaan->email = $request->email;
        
        $perusahaan->save();

        return response()->json('Data berhasil disimpan', 200);


        
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perusahaan = Perusahaan::find($id);

        return response()->json($perusahaan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $perusahaan = Perusahaan::find($id)->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perusahaan = Perusahaan::find($id);
        $perusahaan->delete();

        return response(null, 204);
    }

    public function cetakperusahaan(Request $request)
    {
        $dataperusahaan = collect(array());
        foreach ($request->id_perusahaan as $id) {
            $perusahaan = Perusahaan::find($id);
            $dataperusahaan[] = $perusahaan;
        }

        $dataperusahaan = $dataperusahaan->chunk(2);
        $setting    = Setting::first();

        $no  = 1;
        $pdf = PDF::loadView('perusahaan.cetak', compact('dataperusahaan', 'no', 'setting'));
        $pdf->setPaper(array(0, 0, 566.93, 850.39), 'potrait');
        return $pdf->stream('perusahaan.pdf');
    }
}
