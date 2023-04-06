@extends('antrean.template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tambah Antrean</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('antrean.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Input gagal.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('antrean.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Polis:</strong>
                <input type="text" name="no_polis" class="form-control" placeholder="isi no polis">
            </div>
        </div>
    
            <p>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama pemilik:</strong>
                <input type="text" name="nama_pemilik" class="form-control" placeholder="isi nama pemilik">
            </div>
        </div>
    
    
       
        <p>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                        <label for="tgl"><strong>Tanggal antrean:</strong></label>
                        <input type="date" id="tgl" name="tgl" class="form-control @error('tgl') is-invalid @enderror">
                    </div>
                    </div>


<p>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection

