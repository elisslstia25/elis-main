<x-app>
    <x-template.button.back-button url="admin/pegawai" />
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pegawai</h4>
                    </div>
                    <div class="card-body">
                        <dl>
                            <dt>Nama</dt>
                            <dd>{{ $pegawai->nama }}</dd>
                            <dt>NIDN</dt>
                            <dd>{{ $pegawai->nidn }}</dd>
                            <dt>Email</dt>
                            <dd>{{ $pegawai->email }}</dd>
                            <dt>Username</dt>
                            <dd>{{ $pegawai->username }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</x-app>