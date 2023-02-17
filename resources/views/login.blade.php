<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>sistem perbaikan bengkel jangga toruan</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ionicons/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/typicons/src/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/bengkel.jpg') }}" type="image/x-icon"/>
    <!-- End-CSS -->

  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex justify-content-center align-items-center auth login-page theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                @if($users != 0)
                <form action="{{ url('/verify_login') }}" method="post" name="login_form">
                  <p>@csrf </p>
                  <div class="form-group">

                        <p>
                          <figure><img src="{{ asset('images/bengkel.jpg')}}" width="337" height="150"></figure>


                        <label>   
                        <script>

                          
              
    now = new Date();
      if (now.getTimezoneOffset() == 0) (a=now.getTime() + (7*60*60*1000))
      else (a=now.getTime());
      now.setTime(a);
      var tahun=now.getFullYear()
      var hari=now.getDay()
      var bulan=now.getMonth()
      var tanggal=now.getDate()
      var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,")
      var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")
      document.write(hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun)


                            
                        </script>
                     
                
                        <label>   <br>
                          
                      
                          <script>
  
                            
                              function greetings() {
                                  let asiaTime = new Date().toLocaleString('en-US', {
                                      timeZone: 'Asia/Jakarta'
                                  });
                                  asiaTime = new Date(asiaTime);
                                  let hours = asiaTime.getHours();
                              
  
                                  // <middle>   return msg</middle>;
                              }
  
                             
  
  
                              
                          </script>


</label>

                        <br>
                        <h1 class="mb-2 display-4 font-weight-bold" id="greetings"></h1>
                        </label>
               
                        <div class="form-group">
                        <label class="label">Username</label>
                       <div class="input-group">
                         <input type="text" class="form-control" name="username" placeholder="Username">
                         <div class="input-group-append">
                           <span class="input-group-text check-value" id="username_error"></span>
                         </div>
                       </div>
                     </div>
                     
   
   
                     <div class="form-group">
                       <label class="label">Password</label>
                       <div class="input-group">
                         <input type="password" id="password" class="form-control" name="password" placeholder="*********" >
                         <div class="input-group-append">
                           <span class="input-group-text check-value" id="password_error"></span>
                          
                         </div>
                          <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                          <span id="mybutton" onclick="change()" class="input-group-text">
       
                           <!-- icon mata bawaan bootstrap  -->
                           <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                               xmlns="http://www.w3.org/2000/svg">
                               <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                               <path fill-rule="evenodd"
                                   d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                           </svg>
                          </span>
                       </div>
                      
                     </div>
                     <div class="form-group">
                       <button class="btn btn-primary submit-btn btn-block">Masuk</button>
                     </div>
                   </form>
                   @else
                   <form action="{{ url('/first_account') }}" method="post" name="create_form">
                     @csrf
                     <div class="form-group">
                       <label class="label">Nama</label>
                       <div class="input-group">
                         <input type="text" class="form-control" name="nama" placeholder="Nama">
                         <div class="input-group-append">
                           <span class="input-group-text check-value" id="nama_error"></span>
                         </div>
                       </div>
                     </div>
                     <div class="form-group">
                       <label class="label">Email</label>
                       <div class="input-group">
                         <input type="email" class="form-control" name="email" placeholder="Email">
                         <div class="input-group-append">
                           <span class="input-group-text check-value" id="email_error"></span>
                         </div>
                       </div>
                     </div>
                     <div class="form-group">
                       <label class="label">Username</label>
                       <div class="input-group">
                         <input type="text" class="form-control" name="username_2" placeholder="Username">
                         <div class="input-group-append">
                           <span class="input-group-text check-value" id="username_2_error"></span>
                         </div>
                       </div>
                     </div>
                     <div class="form-group">
                       <label class="label">Password</label>
                       <div class="input-group">
                         <input type="password" class="form-control" Id= "password" name="password_2" placeholder="*********">
                         <div class="input-group-append">
                           <span class="input-group-text check-value" id="password_2_error"></span>
                         </div>
                        <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                        <span id="mybutton" onclick="change()" class="input-group-text">
       
                         <!-- icon mata bawaan bootstrap  -->
                         <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                             <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                             <path fill-rule="evenodd"
                                 d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                         </svg>
                        </span>
                     </div>
                     </div>
   
                     <div class="form-group">
                       <button class="btn btn-primary submit-btn btn-block">Buat Akun</button>
                     </div>
                   </form>
                   @endif
                 </div>
                 <p class="mt-3 footer-text text-center">copyright Bengkel Jangga toruan © {{date('Y')}} </p>
               </div>
             </div>
           </div>
         </div>
     
   
       <!-- Javascript -->
       <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
       <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script>
       <script src="{{ asset('assets/js/shared/off-canvas.js') }}"></script>
       <script src="{{ asset('assets/js/shared/misc.js') }}"></script>
       <script src="{{ asset('plugins/js/jquery.form-validator.min.js') }}"></script>
       <script src="{{ asset('plugins/js/sweetalert.min.js') }}"></script>
       <script src="{{ asset('js/login/script.js') }}"></script>
       <script type="text/javascript">
         @if ($message = Session::get('create_success'))
           swal(
               "Berhasil!",
               "{{ $message }}",
               "success"
           );
         @endif
   
         @if ($message = Session::get('login_failed'))
           swal(
               "Gagal!",
               "{{ $message }}",
               "error"
           );
         @endif
       </script>
       <!-- End-Javascript -->
       @include('greetings')
   
       <script>
           $(document).ready(function() {
               $("#greetings").html(greetings());
           });
       </script>
   
   <script>
     // membuat fungsi change
     function change() {
   
         // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
         var x = document.getElementById('password').type;
   
         //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
         if (x == 'password') {
   
             //ubah form input password menjadi text
             document.getElementById('password').type = 'text';
             
             //ubah icon mata terbuka menjadi tertutup
             document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                             <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                             <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                             <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                             </svg>`;
         }
         else {
   
             //ubah form input password menjadi text
             document.getElementById('password').type = 'password';
   
             //ubah icon mata terbuka menjadi tertutup
             document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                             <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                             <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                             </svg>`;
         }
     }
   </script>
   
     </body>
   </html>
