<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\spare_part;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use DataTables;

class spare_partController extends Controller
{
    public function home()
    {
        $spare_part= spare_part::all();
        return view('spare_part.create', compact('spare_part'));
        
    }


    public function index()
    {
        $spare_part = spare_part::latest()->paginate(5);
        return view ('spare_part.index',compact('spare_part'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('spare_part.create');
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
            'jenis' => 'required',
            'qty' => 'required'
         
        ]);
        spare_part::create($request->all());

        return redirect()->route('spare_part.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(spare_part $spare_part)
    {
        return view('spare_part.show',compact('spare_part'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(spare_part $spare_part)
    {
        return view('spare_part.edit', compact('spare_part'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spare_part $spare_part)
    {
        $request->validate([
            'jenis' => 'required',
            'qty' => 'required'
            
        ]);

        $spare_part->update($request->all());

        return redirect()->route('spare_part.index')->with('succes','spare_part Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(spare_part $spare_part)
    {
        $spare_part->delete();

        return redirect()->route('spare_part.index')->with('succes','spare part Berhasil di Hapus');
    }
}
