<div class="kop_surat">
    <div class="gambar">
        @if ($user->logo_url)
            <img src="{{ asset('storage/' . $user->logo_url) }}" alt="Logo perusahaan">
        @else
            <img src="{{ asset('assets/img/profil2.png') }}" alt="Logo perusahaan">
        @endif
    </div>
    <div class="text-center">
        <h1 class="text-dark text-8">
            <strong>{{ strtoupper($user->name) }}</strong>
        </h1>
        <p class="mt-n7">
            {{ $user->street }}, Kelurahan {{ $user->urbanVillage->name }}, Kecamatan {{ $user->district->name }}
        </p>
        <p>
            Kota {{ $user->region->name }}, Provinsi {{ $user->province->name }}
        </p>
        <p>
            <span>Telp : {{ $user->phone_number }}</span>
            <span>Email : <span class="text-primary"><u>{{ $user->email }}</u></span></span>

            @if ($user->web_url)
                <span>Website :<span class="text-primary"><u>{{ $user->web_url }}</u></span></span>
            @endif
        </p>
    </div>
</div>
<hr>
