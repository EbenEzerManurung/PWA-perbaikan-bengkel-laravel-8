<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\kategori;
use App\Exports\Exportkategori;
use Yajra\DataTables\Datatables;
use PDF;

class controllerKategori extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::all();
        return view('kategori.index');
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
        $this->validate($request, [
            'name'   => 'required|string|min:2',
            'no_hp'   => 'required|string|min:2'
         ]);
 
        kategori::create($request->all());
 
         return response()->json([
            'success'    => true,
            'message'    => 'kategori Created'
         ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategori::find($id);
        return $kategori;
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
        $this->validate($request, [
            'name'   => 'required|string|min:2',
            'no_hp'   => 'required|string|min:2'
        ]);

        $kategori = kategori::findOrFail($id);

        $kategori->update($request->all());

        return response()->json([
            'success'    => true,
            'message'    => 'kategori Update'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori::destroy($id);

        return response()->json([
            'success'    => true,
            'message'    => 'kategori Delete'
        ]);
    }

    public function apikategori()
    {
        $kategori = kategori::all();

        return Datatables::of($kategori)
            ->addColumn('action', function($kategori){
                return '<a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Show</a> ' .
                    '<a onclick="editForm('. $kategori->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                    '<a onclick="deleteData('. $kategori->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function exportkategoriAll()
    {
        $kategori = kategori::all();
        $pdf = PDF::loadView('kategori.kategoriAllPDF',compact('kategori'));
        return $pdf->download('kategori.pdf');
    }

    public function exportExcel()
    {
        return (new Exportkategori())->download('kategori.xlsx');
    }
}
