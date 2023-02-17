@extends('spare_part.template')


@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tambah Spare part</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('spare_part.index') }}"> Kembali</a>
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

<form action="{{ route('spare_part.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>jenis:</strong>
                <input type="text" name="jenis" class="form-control" placeholder="jenis spare part">
            </div>
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