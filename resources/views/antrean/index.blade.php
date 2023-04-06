<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon"  href="{{ asset('images/bengkel.jpg') }}"  width="86" height="40">
<title>antrean</title>

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- MULAI STYLE CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
    integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />

  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


<!-- AKHIR STYLE CSS -->

@extends('templates/main')
@section('css')
<link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
@endsection
@section('content')

</head>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>

    @endif
    
     <!-- MULAI CONTAINER -->
 <div class="container">

    <div class="card">
        
        <div class="card-body">
            <!-- MULAI TOMBOL TAMBAH -->
           
            <a class="btn btn-dark" href='/antrean_create'> Input antrean</a>
            <br><br>
            <!-- AKHIR TOMBOL -->
            <!-- MULAI TABLE -->
            <div class="table-responsive">
                <table class="table table-silver">
                <thead>
          
                <tr>
                 <th>No</th>
                 <th>Kode Antrean</th>
                 <th>No Polis</th>
                <th>Nama Pemilik</th>
                <th>Tanggal antrean</th>
            <th>Action</th>
        </tr>
        
       

        @foreach ($antrean as $p)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $p->kode_antrean }}</td>
            <td>{{ $p->no_polis }}</td>
            <td>{{ $p->nama_pemilik }}</td>
           <td> {{ \Carbon\Carbon::createFromTimestamp(strtotime($p->tgl))->format('d-m-Y')}}</td>
       
       
            <td>
                <form action="{{ route('antrean.destroy',$p->id) }}" method="POST">

                   
                    <a class="btn btn-primary btn-sm" href="{{ route('antrean.edit',$p->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
        
        @endforeach

            </thead>
        </table>
        
            </div>
       </div>
       
    </div>
</div>



        <!-- AKHIR TABLE -->

</table>
<br>
{!! $antrean->links() !!}

@endsection 


</html>

