@component('mail::message')


# Permohonan data BMKG

Data permohonan anda berhasil di proses
{{-- @if ($user->respon_data != null)
    <p>Anda dapat mengunduh data yang telah diproses dengan mengklik tombol dibawah ini</p>
<a href="{{ 'store/documen/' . $user->respon_data }}" target="_blank">Download data</a><br>
@endif --}}
<p>Permintaan anda: </p>
<strong>
    @if($user->status_form == 1)
    Permintaan Baru                              
    @elseif($user->status_form == 2)
    Diproses
    @elseif($user->status_form == 3)
    Diterima
    @elseif($user->status_form == 4)
    Selesai
    @elseif($user->status_form == 5)
    Menunggu Pembayaran
    @elseif($user->status_form == 6)
    Menunggu Pembayaran Ulang
    @elseif($user->status_form == 7)
    Ditolak
    @endif
</strong>
@component('mail::button', ['url' => 'http://127.0.0.1:8000/dashboard'])
Buka permohonan
@endcomponent

Terima kasih,<br>
SIPACAK-Staklim SUMSEL 
Sistem Pelayanan Cepat dan Akurat
@endcomponent
