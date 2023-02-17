@extends('survey.template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tambah survey</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('survey.index') }}"> Kembali</a>
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

<form action="{{ route('survey.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for=""> No Customer</label>
        <select name="pemesanan_id" class="form-control">
            {{-- //jangan sampe salah valuenya --}}
          @foreach ($data_pemesanan as $k)
        <option value="{{$k->id_pemesanan}}">{{$k->no_customer}}</option>  
          @endforeach
        </select>
    </div>

    <p>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama customer:</strong>
                <input type="text" name="nama_customer" class="form-control" placeholder="Nama customer">
            </div>
        </div>

        <p>
            <div class="form-group row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>tingkat kepuasan:</strong>
                        <select class="form-control" name="tingkat_kepuasan">
                        <option value="">-- Pilih tingkat kepuasan --</option>
                        <option value="sangatpuas">sangat puas</option> 
                        <option value="puas">puas</option>
                        <option value="cukuppuas">cukup puas</option>
                        <option value="kurangpuas">kurang puas</option>
                       
             
                    </select>
                </div>
                   
          
                  </select>
                </div>
              </div>
          </div>
  
        <p>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Komentar:</strong>
                    <textarea class="form-control" name="komentar"  rows="5" placeholder="komentar"></textarea>
                
                </div>
            </div>

      <p>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection