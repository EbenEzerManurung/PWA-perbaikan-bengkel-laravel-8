<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon"  href="{{ asset('images/bengkel.jpg') }}"  width="86" height="40">
    <title>Data user</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- MULAI STYLE CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
        integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
      
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


    <!-- AKHIR STYLE CSS -->
@extends('templates/main')
@section('css')
<link rel="stylesheet" href="{{ asset('css/manage_account/account/style.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
@endsection
@section('content')



<div class="row page-title-header">
  <div class="col-12">
    <div class="page-header d-flex justify-content-between align-items-center">
      <h4 class="page-title">Data User</h4>
      <div class="d-flex justify-content-start">
      	<div class="dropdown">
          <button class="btn btn-icons btn-inverse-primary btn-filter shadow-sm" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="mdi mdi-filter-variant"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
            <h6 class="dropdown-header">Urut Berdasarkan :</h6>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item filter-btn" data-filter="nama">Nama</a>
            <a href="#" class="dropdown-item filter-btn" data-filter="email">Email</a>
            <a href="#" class="dropdown-item filter-btn" data-filter="role">Posisi</a>
          </div>
        </div>
        <div class="dropdown dropdown-search">
          <button class="btn btn-icons btn-inverse-primary btn-filter shadow-sm ml-2" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="mdi mdi-magnify"></i>
          </button>
          <div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuIconButton1">
            <div class="row">
              <div class="col-11">
                <input type="text" class="form-control" name="search" placeholder="Cari akun">
              </div>
            </div>
          </div>
        </div>
        <a href="{{ url('/account/new') }}" class="btn btn-primary mdi  btn-new ml-2">
          <span class="mdi mdi-account-plus">Add User</span>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="row modal-group">
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ url('/account/update') }}" method="post" enctype="multipart/form-data" name="update_form">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Akun</h5>
            <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              @csrf
              <div class="row">
                <div class="col-12 text-center">
                  <img src="{{ asset('pictures/default.png') }}" class="img-edit">
                </div>
                <div class="col-12 text-center mt-2">
                  <input type="file" name="foto" hidden="">
                  <input type="text" name="nama_foto" hidden="">
                  <button type="button" class="btn btn-primary font-weight-bold btn-upload">Ubah</button>
                  <button type="button" class="btn btn-delete-img">Hapus</button>
                </div>
                <div class="col-12" hidden="">
                  <input type="text" name="id">
                </div>
              </div>
              <div class="form-group row mt-4">
                <label class="col-3 col-form-label font-weight-bold">Nama</label>
                <div class="col-9">
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="col-9 offset-3 error-notice" id="nama_error"></div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label font-weight-bold">Email</label>
                <div class="col-9">
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="col-9 offset-3 error-notice" id="email_error"></div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label font-weight-bold">Username</label>
                <div class="col-9">
                  <input type="text" class="form-control" name="username">
                </div>
                <div class="col-9 offset-3 error-notice" id="username_error"></div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label font-weight-bold">Role</label>
                <div class="col-9">
                  <select class="form-control" name="role">
                    <option value="admin">Admin</option> 
                    <option value="mekanik">Mekanik</option>
                    <option value="user">user</option>
       
           

                  </select>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-update"><i class="mdi mdi-content-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card card-noborder b-radius">
      <div class="card-body">
        <div class="row">
        	<div class="col-12 table-responsive">
        		<table class="table table-custom">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Posisi</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              	@foreach($users as $user)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>
                  	<img src="{{ asset('pictures/' . $user->foto) }}">
                  	<span class="ml-2">{{ $user->nama }}</span>
                  </td>
                  <td>{{ $user->email }}</td>
                  <td>
                    @if($user->role == 'admin')
                    <span class="btn admin-span">{{ $user->role }}</span>
                    @elseif($user->role == 'mekanik')
                    <span class="btn mekanik-span">{{ $user->role }}</span>
                    @else()
                    <span class="btn user-span">{{ $user->role }}</span>
                    
                    @endif

                  </td>
                  <td>
                  	<button type="button" class="btn btn-edit btn btn-primary mdi " data-toggle="modal" data-target="#editModal" data-edit="{{ $user->id }}">
                      <span class="mdi mdi-account-edit">Edit</span>  
                    </button>
                    <button type="button" data-delete="{{ $user->id }}" class="btn btn-danger mdi  ml-1 btn-delete"> 
              <span class="mdi mdi-delete">Delete</span>
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
             <br>
                <br>
            {!! $users->links() !!}
        	</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script src="{{ asset('plugins/js/quagga.min.js') }}"></script>





<script src="{{ asset('js/manage_account/account/script.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<!-- AKHIR LIBARARY JS -->
<script type="text/javascript">
  @if ($message = Session::get('create_success'))
    swal(
        "Berhasil!",
        "{{ $message }}",
        "success"
    );
  @endif

  @if ($message = Session::get('update_success'))
    swal(
        "Berhasil!",
        "{{ $message }}",
        "success"
    );
  @endif

  @if ($message = Session::get('delete_success'))
    swal(
        "Berhasil!",
        "{{ $message }}",
        "success"
    );
  @endif

  @if ($message = Session::get('both_error'))
    swal(
    "",
    "{{ $message }}",
    "error"
    );
  @endif

  @if ($message = Session::get('email_error'))
    swal(
    "",
    "{{ $message }}",
    "error"
    );
  @endif

  @if ($message = Session::get('username_error'))
    swal(
    "",
    "{{ $message }}",
    "error"
    );
  @endif

  $(document).on('click', '.filter-btn', function(e){
    e.preventDefault();
    var data_filter = $(this).attr('data-filter');
    $.ajax({
      method: "GET",
      url: "{{ url('/account/filter') }}/" + data_filter,
      success:function(data)
      {
        $('tbody').html(data);
      }
    });
  });

  $(document).on('click', '.btn-edit', function(){
    var data_edit = $(this).attr('data-edit');
   $.ajax({
     method: "GET",
     url: "{{ url('/account/edit') }}/" + data_edit,
      success:function(response)
      {
        $('.img-edit').attr("src", "{{ asset('pictures') }}/" + response.user.foto);
        $('input[name=id]').val(response.user.id);
        $('input[name=nama]').val(response.user.nama);
        $('input[name=email]').val(response.user.email);
        $('input[name=username]').val(response.user.username);
        $('select[name=role] option[value="'+ response.user.role +'"]').prop('selected', true);
        validator.resetForm();
      }
    });
  });

  $(document).on('click', '.btn-delete', function(e){
    e.preventDefault();
    var data_delete = $(this).attr('data-delete');
    swal({
      title: "Apa Anda Yakin?",
      text: "Data akun akan terhapus, klik oke untuk melanjutkan",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.open("{{ url('/account/delete') }}/" + data_delete, "_self");
      }
    });
  });

  $(document).on('click', '.btn-delete-img', function(){
    $(".img-edit").attr("src", "{{ asset('pictures') }}/default.png");
    $('input[name=nama_foto]').val('default.png');
  });
</script>

  <!-- LIBARARY JS -->
  <script type="text/javascript">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
    integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
    integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>
      </script>
      
         <!-- AKHIR LIBARARY JS -->
  
      @endsection
      </html>

