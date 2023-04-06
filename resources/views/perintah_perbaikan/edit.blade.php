@extends('perintah_perbaikan.template')

@section('content')
<!-- PWA  -->
<meta name="theme-color" content="#55e3e6"/>
<link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit perintah perbaikan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('perintah_perbaikan.index') }}"> Back</a>
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

    <form action="{{ route('perintah_perbaikan.update',$perintah_perbaikan->id_perintah) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama mekanik:</strong>
                <input type="text" name="nama_mekanik" class="form-control" placeholder="Nama mekanik" value="{{ $perintah_perbaikan->nama_mekanik }}">
            </div>
        </div>
        

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>status:</strong>
                <input type="text" name="status" class="form-control" placeholder="status" value="{{ $perintah_perbaikan->status }}">
            </div>
        </div>
        
        </div>
        <p>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
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