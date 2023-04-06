@foreach($access as $user)
<!-- PWA  -->
<meta name="theme-color" content="#55e3e6"/>
<link rel="apple-touch-icon" href="{{ asset('bengkel.jpg') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
<tr>
  <td>
    <span class="d-flex justify-content-start align-items-center">
      <img src="{{ asset('pictures/' . $user->foto) }}">
      <span class="ml-2">
        <span class="d-block mb-1">{{ $user->nama }}</span>
        <span class="txt-user-desc">{{ $user->role }} <i class="mdi mdi-checkbox-blank-circle dot"></i> {{ $user->email }}</span>
      </span>
    </span>
  </td>

  <td class="text-center b-left" data-access="kelola_akun" data-user="{{ $user->user }}" data-role="{{ $user->role }}">
    @if($user->kelola_akun == 1)
    <div class="btn-checkbox btn-access">
        <i class="mdi mdi-checkbox-marked"></i>
    </div>
    @else
    <div class="btn-checkbox btn-non-access">
        <i class="mdi mdi-checkbox-blank-outline"></i>
    </div>
    @endif
  </td>
  <td class="text-center b-left" data-access="spare_part" data-user="{{ $user->user }}" data-role="{{ $user->role }}">
    @if($user->spare_part == 1)
    <div class="btn-checkbox btn-access">
        <i class="mdi mdi-checkbox-marked"></i>
    </div>
    @else
    <div class="btn-checkbox btn-non-access">
        <i class="mdi mdi-checkbox-blank-outline"></i>
    </div>
    @endif
  </td>

  <td class="text-center b-left" data-access="pemesanan" data-user="{{ $user->user }}" data-role="{{ $user->role }}">
    @if($user->pemesanan == 1)
    <div class="btn-checkbox btn-access">
        <i class="mdi mdi-checkbox-marked"></i>
    </div>
    @else
    <div class="btn-checkbox btn-non-access">
        <i class="mdi mdi-checkbox-blank-outline"></i>
    </div>
    @endif
  </td>
  <td class="text-center b-left" data-access="perintah_perbaikan" data-user="{{ $user->user }}" data-role="{{ $user->role }}">
    @if($user->perintah_perbaikan == 1)
    <div class="btn-checkbox btn-access">
        <i class="mdi mdi-checkbox-marked"></i>
    </div>
    @else
    <div class="btn-checkbox btn-non-access">
        <i class="mdi mdi-checkbox-blank-outline"></i>
    </div>
    @endif
  </td>


  <td class="text-center b-left" data-access="perbaikan" data-user="{{ $user->user }}" data-role="{{ $user->role }}">
    @if($user->perbaikan== 1)
    <div class="btn-checkbox btn-access">
        <i class="mdi mdi-checkbox-marked"></i>
    </div>
    @else
    <div class="btn-checkbox btn-non-access">
        <i class="mdi mdi-checkbox-blank-outline"></i>
    </div>
    @endif
  </td>

  <td class="text-center b-left" data-access="survey_layanan" data-user="{{ $user->user }}" data-role="{{ $user->role }}">
    @if($user->suryvey_layanan == 1)
    <div class="btn-checkbox btn-access">
        <i class="mdi mdi-checkbox-marked"></i>
    </div>
    @else
    <div class="btn-checkbox btn-non-access">
        <i class="mdi mdi-checkbox-blank-outline"></i>
    </div>
    @endif
  </td>
</tr>
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
 
@endforeach
