@extends('perbaikan.template')

@section('content')
<!-- PWA  -->
<meta name="theme-color" content="#55e3e6"/>
<link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit perbaikan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('perbaikan.index') }}"> Back</a>
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

    <form action="{{ route('perbaikan.update',$perbaikan->id_perbaikan) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mekanik:</strong>
                <input type="text" name="nama_mekanik" class="form-control" placeholder="nama mekanik" value="{{ $perbaikan->nama_mekanik }}">
            </div>
        </div> -->

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mekanik:</strong>
                <input type="text" name="nama_mekanik" value="{{ $perbaikan->perintah->nama_mekanik}}" class="form-control" placeholder="Nama Mekanik">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>status:</strong>
              <select class="form-control" name="status">
                <option value="process">process</option> 
                <option value="finished">finished</option>
               
      
              </select>
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