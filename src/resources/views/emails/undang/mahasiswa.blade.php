@component('mail::message')

Silakan Bergabung ke kelas ini

@component('mail::button', ['url' => route("kelas.join.mahasiswa",["kode" => $kodekelas])])
Gabung Kelas
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
