@extends('pemesanan.template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tambah pemesanan</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('pemesanan.index') }}"> Kembali</a>
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

<form action="{{ route('pemesanan.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Polis:</strong>
                <input type="text" name="no_polis" class="form-control" placeholder="no polis">
            </div>
        </div>
    
            <p>
                <div class="form-group">
                    <strong for="">spare part</strong>
                    <select name="spare_part_id" class="form-control">
                        {{-- //jangan sampe salah valuenya --}}
                      @foreach ($data_spare_part as $k)
                    <option value="{{$k->id_spare_part}}">{{$k->jenis}}</option>  
                      @endforeach
                    </select>
                </div>

                <p>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Customer:</strong>
                <input type="text" name="nama_customer" class="form-control" placeholder="nama customer">
            </div>
        </div>

    
        <p>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Customer:</strong>
                <input type="textarea" name="alamat_customer" class="form-control" placeholder="Alamat Customer">
            </div>
        </div>
        <p>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Merk:</strong>
                <input type="text" name="merk" class="form-control" placeholder="Merk">
            </div>
        </div>

<p>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection

