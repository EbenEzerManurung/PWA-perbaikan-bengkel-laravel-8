@extends('survey.template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit survey</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('survey.index') }}"> Back</a>
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

    <form action="{{ route('survey.update',$survey->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
           

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama customer:</strong>
                <input type="text" name="nama_customer" class="form-control" placeholder="nama customer" value="{{ $survey->nama_customer }}">
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
            <strong>komentar :</strong>
            <input type="text" name="komentar" value="{{ $survey->komentar}}" class="form-control" placeholder="komentar">
        </div>
    </div>

        <p>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

    </form>
@endsection