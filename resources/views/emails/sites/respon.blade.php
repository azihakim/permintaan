@component('mail::message')


# Permintaan data BMKG

Data permintaan anda berhasil di proses
<a href="{{ 'store/documen/' . $user->respon_data }}" target="_blank">Download data</a><br>
<p>Permintaan anda: </p><strong>{{ $user->respon_desk }}</strong>
@component('mail::button', ['url' => 'http://127.0.0.1:8000/dashboard'])
Buka data
@endcomponent

Terima kasih,<br>
SIPACAK-Staklim SUMSEL 
Sistem Pelayanan Cepat dan Akurat
@endcomponent
