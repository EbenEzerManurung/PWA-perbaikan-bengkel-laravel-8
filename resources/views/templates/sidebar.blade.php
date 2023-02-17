<a href="#" class="nav-link"><br>
  </a>
<ul class="nav">
  <li class="nav-item nav-profile"><a href="#" class="nav-link">
    <div class="profile-image">
      <div class="dot-indicator bg-success"></div>
    </div>
      <br />
    <div class="text-wrapper">
        @php
        $user_name = auth()->user()->nama;
        if(strlen($user_name) > 12){
          $nama = substr($user_name, 0, 12) . '..';
        }else{
          $nama = $user_name;
        }
        @endphp
        <p class="profile-name">{{ $nama }}</p>
        <p class="designation">{{ auth()->user()->role }}</p>
      </div>
    </a>
  </li>
  <li class="nav-item nav-category">Daftar Menu</li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/dashboard') }}">
      <span class="menu-title">Dashboard</span>
    </a>
  </li>


  @php
  $access = \App\Acces::where('user', auth()->user()->id)
  ->first();
  @endphp

  @if($access->kelola_akun == 1)
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#kelola_akun" aria-expanded="false" aria-controls="kelola_akun">
      <span class="menu-title">Kelola Akun</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="kelola_akun">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/account') }}">Daftar Akun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/access') }}">Hak Akses</a>
        </li>
      </ul>
    </div>
  </li>
  @endif
  @if($access->spare_part == 1)
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/spare_part') }}">
      <span class="menu-title">spare_part</span>
    </a>
  </li>
  @endif
  @if($access->pemesanan == 1)
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/pemesanan') }}">
      <span class="menu-title">Pemesanan</span>
    </a>
  </li>
  @endif
  @if($access->perintah_perbaikan == 1)
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/perintah_perbaikan') }}">
                  <span class="menu-title"> Perintah Perbaikan</span>
                </a>
              </li>
           @endif
  @if($access->perbaikan == 1)
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/perbaikan') }}">
      <span class="menu-title"> Perbaikan</span>
    </a>
  </li>
  @endif
  @if($access->survey_layanan == 1)
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/survey') }}">
                    <span class="menu-title">Survey Layanan</span>
                  </a>
                </li>
                @endif
 


