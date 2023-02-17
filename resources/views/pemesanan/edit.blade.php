@extends('pemesanan.template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit pemesanan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('pemesanan.index') }}"> Back</a>
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

    <form action="{{ route('pemesanan.update',$pemesanan->id_pemesanan) }}" method="POST">
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
                <strong>No polis:</strong>
                <input type="text" name="no_polis" class="form-control" placeholder="no_polis" value="{{ $pemesanan->no_polis }}">
            </div>
        </div>
        </div>
    </div>


    <div class="form-group row">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama customer:</strong>
                    <input type="text" name="nama_customer" class="form-control" placeholder="nama customer" value="{{ $pemesanan->nama_customer }}">
                </div>
            </div>
            </div>

            <div class="form-group row">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No customer:</strong>
                        <input type="text" name="no_customer" class="form-control" value="{{ $pemesanan->no_customer}}" disabled>
                    </div>
                </div>
                </div>

                <div class="form-group row">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>alamat customer:</strong>
                        <input type="textarea" name="alamat_customer" class="form-control" placeholder="alamat_customer" value="{{ $pemesanan->alamat_customer }}">
                    </div>
                </div>
                </div>

                    <div class="form-group row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jenis:</strong>
                          <select class="form-control" name="spare_part_id">
                            <option value="1">Oli</option> 
                            <option value="2">Ban serep</option>
                            <option value="3">kaca spion</option>
                  
                          </select>
                        </div>
                      </div>
                  </div>
                  </div>

               
                       <p>
                       <div class="form-group row">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>merk:</strong>
                                    
                                    <input type="text" name="merk" class="form-control" placeholder="merk" value="{{ $pemesanan->merk}}">
                                </div>
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