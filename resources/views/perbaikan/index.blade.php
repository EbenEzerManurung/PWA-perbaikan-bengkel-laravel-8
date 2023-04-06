<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon"  href="{{ asset('images/bengkel.jpg') }}"  width="86" height="40">
<title>perbaikan</title>

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- MULAI STYLE CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
    integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('bengkel.PNG') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

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
            <a class="btn btn-dark" href='/perbaikan_create'> Input perbaikan</a>
            <br><br>
            <!-- AKHIR TOMBOL -->

            <!-- MULAI TABLE -->
            <div class="table-responsive">
                <table class="table table-silver">
                <thead>
        
                <tr>
                 <th>No</th>
                 <th>Nama Mekanik</th>
                <th>status</th>
               
            <th>Action</th>
        </tr>
        @foreach ($perbaikan as $k)
        <tr>
            <td>{{ ++$i }}</td>
           

            <td>{{ $k->perintah->nama_mekanik }}</td>
            <td>
                @if($k->status == 'waiting')
                <i class="bi btn-warning bi-exclamation-circle-fill">Process</i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill " viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>
                @else
                <i class="bi btn-success position-relative bi-check-circle primary">Finished</i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg>
                          @endif
                        </td>		
       
            <td>
                <form action="{{ route('perbaikan.destroy',$k->id_perbaikan) }}" method="POST">

                   
                    <a class="btn btn-primary btn-sm" href="{{ route('perbaikan.edit',$k->id_perbaikan) }}">Edit</a>

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
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
<br>
{!! $perbaikan->links() !!}


  

@endsection 


</html>

</html>

