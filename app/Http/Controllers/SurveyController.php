<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\survey_layanan;
use App\pemesanan;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use DataTables;

class SurveyController extends Controller
{
    
    public function home()
    {
        $data_pemesanan = pemesanan::all();
        return view('survey.create', compact('data_pemesanan'));
        
    }

    public function index()
    {
        
        $survey = survey_layanan::latest()->paginate(5);
        return view ('survey.index',compact('survey'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('survey.create');
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
            
            'nama_customer' => 'required',
            'tingkat_kepuasan' => 'required',
            'komentar' => 'required'
         
        ]);
        survey_layanan::create($request->all());

        return redirect()->route('survey.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(survey $survey)
    {
        return view('survey.show',compact('survey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(survey_layanan $survey)
    {
        return view('survey.edit', compact('survey'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, survey_layanan $survey)
    {
        $request->validate([
            'nama_customer' => 'required',
            'tingkat_kepuasan' => 'required',
            'komentar' => 'required'
            
        ]);

        $survey->update($request->all());

        return redirect()->route('survey.index')->with('succes','survey Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(survey_layanan $survey)
    {
        $survey->delete();

        return redirect()->route('survey.index')->with('succes','survey Berhasil di Hapus');
    }
}