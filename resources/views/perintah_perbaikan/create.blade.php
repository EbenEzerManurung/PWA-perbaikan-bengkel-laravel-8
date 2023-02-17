@extends('perintah_perbaikan.template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tambah perintah perbaikan</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('perintah_perbaikan.index') }}"> Kembali</a>
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

<form action="{{ route('perintah_perbaikan.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mekanik:</strong>
                <input type="text" name="nama_mekanik" class="form-control" placeholder="Nama Mekanik">
            </div>
        </div>
        <p>
            <p>
              

            <div class="form-group">
                <label for="">No Customer</label>
                <select name="pemesanan_id" class="form-control">
                    {{-- //jangan sampe salah valuenya --}}
                  @foreach ($pemesanan as $out)
                <option value="{{$out->id_pemesanan}}">{{$out->no_customer}}</option>  
                  @endforeach
                </select>
            </div>

         
        <p>
            
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>qty:</strong>
                <input type="number" name="qty" class="form-control" placeholder="qty">
            </div>
        </div>
       
        <p>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection