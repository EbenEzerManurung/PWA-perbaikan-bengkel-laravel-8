<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\perbaikan;
use App\perintah_perbaikan;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use DataTables;


class PerbaikanController extends Controller
{


    public function home()
    {
        $perintah = perintah_perbaikan::all();
        return view('perbaikan.create', compact('perintah'));
        
    }

    public function index()
    {
        
        $perbaikan = perbaikan::latest()->paginate(5);
        return view ('perbaikan.index',compact('perbaikan'))->with('i', (request()->input('page', 1) -1) * 5);
    }

   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('perbaikan.create');
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
            'perintah_id' => 'required',
            
        
        

         
        ]);
        perbaikan::create($request->all());

        return redirect()->route('perbaikan.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(perbaikan $perbaikan)
    {
        return view('perbaikan.show',compact('perbaikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(perbaikan $perbaikan)
    {
        return view('perbaikan.edit', compact('perbaikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perbaikan $perbaikan)
    {
        $request->validate([
            'nama_mekanik' => 'required',
          
            'status' => 'required',
            
        ]);

        $perbaikan->update($request->all());

        return redirect()->route('perbaikan.index')->with('succes','perbaikan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(perbaikan $perbaikan)
    {
        $perbaikan->delete();

        return redirect()->route('perbaikan.index')->with('succes','perbaikan Berhasil di Hapus');
    }
}