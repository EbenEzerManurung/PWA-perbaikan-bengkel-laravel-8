@extends('templates/main')
@section('css')
<link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
@endsection
@section('content')


    
    <style>
      div.b {
          text-align: right;
    
      }
      </style>
      
    
      
      <div class="b">
      <script type='text/javascript'>
        <!--
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth();
        var thisDay = date.getDay(),
            thisDay = myDays[thisDay];
        var yy = date.getYear();
        var year = (yy < 1000) ? yy + 1900 : yy;
        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
        //-->
      </script>   
      
      <div id="clock"></div>
      <script type="text/javascript">
      <!--
      function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "W.I.B";
        } else {
            a_p = "W.I.B";
        }
        if (curr_hour == 0) {
            curr_hour = 0;
        }
        if (curr_hour > 24) {
            curr_hour = curr_hour - 24;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
      document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }
      
      function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
      }
      setInterval(showTime, 500);
      //-->
      </script>
    
       
       <div class="row page-title-header">
  
        <h4 class="page-title">Dashboard </h4>
     <div class="col-12">
      
      <div class="page-header d-flex justify-content-between align-items-center">
     
   </div>
    
  </div>
  
</div>
</div>
 <!-- Menampilkan Hari, Bulan dan Tahun -->
   
     


<style>
  div.a {
      text-align: center;

  }
  </style>
  
  
  <div class="a">
      
     <h2 text-align: center >Selamat Datang</h2> 
     


     
  </div>
<div class="row">
  <div>
    <div class="row">
      <div>
        <div>
          <div>
            <div class="row">
              <div>

            
        
            
              </div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row page-middle-header">
      <div class="col-35">
        <div class="page-header d-flex justify-content-between align-items-center">
        
        </div>
      </div>
    </div>


  </div>
 


  <div class="row">
  <div class="col-xl-3  col-sm-20 grid-margin stretch-card">
      <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <i class="mdi mdi-account-box text-primary icon-lg"></i>
              </div>
              <div class="float-right">
                <p class="mb-0 text-right">users</p>
                <div class="fluid-container">
                  <h3 class="font-weight-medium text-right mb-0">{{\App\user::count()}}</h3>
                
                </div>
              </div>
            </div>
            <p class="text-muted mt-3 mb-0">
              <i class="mdi mdi-account-box" aria-hidden="true"></i> Total user
            </p>
          </div>
        </div>
      </div>
  
      <div class="col-xl-3  col-sm-20 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-poll-box text-warning icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">Pemesanan</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">{{\App\pemesanan::count()}}</h3>
                  
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-poll-box " aria-hidden="true"></i> Total pemesanan
              </p>
            </div>
          </div>
        </div>
<!---kk-->
<div class="col-xl-3  col-sm-20 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-cube-outline text-primary icon-lg"></i>
                </div>
                <div class="float-right">
                  <p class="mb-0 text-right">spare_part</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">{{\App\spare_part::count()}}</h3>
                   
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class=" mdi mdi-cube-outline " aria-hidden="true"></i> Total spare_part
              </p> 
            </div>
          </div>
        </div>


   
            
        <div class="col-xl-3  col-sm-20 grid-margin stretch-card">
          <div class="card card-statistics">
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-left">
                    <i class="mdi mdi-cube-outline text-black icon-lg"></i>
                  </div>

                  
                  <div class="float-right">
                    <p class="mb-0 text-right">perbaikan</p>
                    <div class="fluid-container">
                      <h3 class="font-weight-medium text-right mb-0">{{\App\perbaikan::count()}}</h3>
                    
                    </div>
                  </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                  <i class="mdi mdi-cube-outline" aria-hidden="true"></i> Total perbaikan
                </p>
              </div>
            </div>
          </div>

          
  </div>

 
 
  
   
@endsection



</div>
