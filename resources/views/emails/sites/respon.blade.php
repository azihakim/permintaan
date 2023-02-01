@component('mail::message')


# Permintaan data BMKG

Data permintaan anda berhasil di proses
<a href="{{ 'store/documen/' . $user->respon_data }}" target="_blank">Download data</a>
<strong>Deskripsi :</strong>{{ $user->respon_desk }}
@component('mail::button', ['url' => 'google.com'])
Button Text
@endcomponent

Terima kasih,<br>
SIPACAK-Staklim SUMSEL 
Sistem Pelayanan Cepat dan Akurat
@endcomponent
