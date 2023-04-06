@extends('antrean.template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit antrean</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('antrean.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('antrean.update',$antrean->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="quick-link-wrapper d-md-flex flex-md-wrap">
        <div class="table-responsive">
        <div class="row">
	   <div class="col-12">
		<!-- <div class="card card-noborder b-radius">
			<div class="card-body"> -->

       
        <div class="row">
        <div class="form-group row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Antrean:</strong>
                <input type="text" name="kode_antrean" class="form-control"  value="{{ $antrean->kode_antrean }}" disabled>
            </div>
        </div>
        </div>
    </div>

        <div class="form-group row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No polis:</strong>
                <input type="text" name="no_polis" class="form-control" placeholder="no_polis" value="{{ $antrean->no_polis }}">
            </div>
        </div>
        </div>
    </div>


    <div class="form-group row">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pemilik:</strong>
                    <input type="text" name="nama_pemilik" class="form-control" placeholder="isi nama pemilik" value="{{ $antrean->nama_pemilik }}">
                </div>
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="tgl"><strong>Tanggal antrean:</strong></label>
                        <input type="date" id="tgl" name="tgl" class="form-control @error('tgl') is-invalid @enderror" value="{{ $antrean->tgl }}">
                    </div>
                    </div>


                   
        <p>
            <br>
            <div class="form-group row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    

    </form>
@endsection