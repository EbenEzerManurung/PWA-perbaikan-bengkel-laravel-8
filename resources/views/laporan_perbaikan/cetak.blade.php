<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="shortcut icon"  href="{{ asset('images/bengkel.jpg') }}"  width="86" height="40">
    <title>Cetak Laporan data perbaikan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- PWA  -->
<meta name="theme-color" content="#56e890"/>
<link rel="apple-touch-icon" href="{{ asset('bengkel.jpg') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>
<body>
  

    <style>
        div.a {
            text-align: center;

        }
        </style>
        
        
        <div class="a">
            <img src="{{ base_path() }}/public/bengkel.jpg" type="image/x-icon" align="right" alt="logo" width="180" height="100"/>
           <h2 text-align: center ><u>Laporan Data perbaikan</u></h2> 
      
        
        <p>Daftar Laporan perbaikan</p>
       

  </div>
        </div>
      
        <br>
        <br>
    <table id="laporan_perbaikan" width="100%">
    <thead>
        <tr>
            
            <td>No</td>
            <td>No polis</td>
            <td>Nama mekanik</td>
            <td>Nama customer</td>
            <td>merk</td>
            <td>alamat</td>
            <td>Tanggal</td>
        </tr>
        </thead>
        @foreach ($pemesanan as $k)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $k->no_polis }}</td>
        <td>{{ $k->data_perintahperbaikan->nama_mekanik }}</td>
            <td>{{ $k->nama_customer }}</td>
            <td>{{ $k->merk }}</td>
            <td>{{ $k->alamat_customer }}</td>
            <td>{{ $k->created_at }}</td>
            </tr>
            </tbody>

            
        @endforeach
    
    </table>


    <style>
         #laporan_perbaikan {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #laporan_perbaikan td, #laporan_perbaikan th {
        border: 1px solid rgb(85, 78, 78);
        padding: 8px;
    }

    #laporan_perbaikan tr:nth-child(even){background-color: #79cce0;}

    #laporan_perbaikan tr:hover {background-color: rgb(191, 255, 255);}

    #laporan_perbaikan th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #79e0ad;
        color: rgb(191, 255, 255);
    }
    </style>


  
    

</div>
</div>
</div>
        <!--section end-->
        <script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
    </body>
    </html>