@extends('perbaikan.template')

@section('content')
<!-- PWA  -->
<meta name="theme-color" content="#55e3e6"/>
<link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tambah perbaikan</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('perbaikan.index') }}"> Kembali</a>
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

<form action="{{ route('perbaikan.store') }}" method="POST">
    @csrf

     <!-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama mekanik:</strong>
                <input type="text" name="nama_mekanik" class="form-control" placeholder="nama mekanik">
            </div>
        </div> -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <p>
                <div class="form-group">
                    <label for=""> Nama Mekanik:</label>
                    <select name="perintah_id" class="form-control">
                        {{-- //jangan sampe salah valuenya --}}
                      @foreach ($perintah as $k)
                    <option value="{{$k->id_perintah}}">{{$k->nama_mekanik}}</option>  
                      @endforeach
                    </select>
                </div>


       <p>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
@endsection