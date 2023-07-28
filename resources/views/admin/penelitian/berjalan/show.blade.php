<x-app>


    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-edit"></i>
                        Form Penelitian Aktif
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-12 col-sm-12">
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        {{-- <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Bagian I</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Bagian
                                                    II</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Bagian
                                                    III</a>
                                            </li>
                                             <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                                href="#custom-tabs-one-settings" role="tab"
                                                aria-controls="custom-tabs-one-settings" aria-selected="false">Bagian
                                                IV</a>
                                        </li> --}}
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                            <div class="card-body">
                                                <input type="text" name="id_pegawai" class="form-control" value="{{ Auth::guard('dosen')->user()->id }}" hidden>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Judul Penelitian</label>
                                                            <div class="col-sm-9">
                                                                {{ $penelitian->judul_penelitian }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Skema Penelitian</label>
                                                            <div class="col-sm-9">
                                                                {{ $penelitian->skema_penelitian }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Tema Penelitian</label>
                                                            <div class="col-sm-9">
                                                                {{ $penelitian->tema_penelitian }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Topik Penelitian</label>
                                                            <div class="col-sm-9">
                                                                {{ $penelitian->topik_penelitian }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label> Nama</label>
                                                            <div class="col-sm-9">
                                                            {{ $penelitian->pegawai->nama }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>NIDN</label>
                                                            <div class="col-sm-9">
                                                            {{ $penelitian->pegawai->nidn }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <div class="col-sm-9">
                                                            {{ $penelitian->pegawai->email }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <div class="col-sm-9">
                                                            {{ $penelitian->pegawai->alamat }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nama Anggota 1</label>
                                                            <div class="col-sm-9">
                                                                {{ $penelitian->nama_gelar1 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Bidang Keahlian 1</label>
                                                            <div class="col-sm-9">
                                                                {{ $penelitian->bidang_keahlian1 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Peran 1</label>
                                                            <div class="col-sm-9">
                                                                {{ $penelitian->peran1 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nama Anggota 2</label>
                                                            <div class="col-sm-9">
                                                                {{ $penelitian->nama_gelar2 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Bidang Keahlian 2</label>
                                                            <div class="col-sm-9">
                                                                {{ $penelitian->bidang_keahlian2 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Peran 2</label>
                                                            <div class="col-sm-9">
                                                                {{ $penelitian->peran2 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group row" style="margin-bottom: 0px;">
                                                            <div class="col-lg-12">
                                                                <label>Dokumen Kemajuan Proposal</label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <a href="path_ke_file/dokumen_proposal.pdf" download>
                                                                    <button type="button" class="btn btn-primary" href="{{ url("$penelitian->dokumen") }}" target="_blank"> Download</button>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <form class="form-horizontal" action="{{ url('admin/penelitian-berjalan/update-status', $penelitian->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group row">
                                                                <label class="col-sm-5 col-form-label">Status</label>
                                                                <div class="col-sm-8">
                                                                    <select name="status" class="form-control">
                                                                        <option value="">-- Pilih Status Pengajuan --</option>

                                                                        <option value="2">Di Danai</option>

                                                                        <option value="3">Tidak Di Danai</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-success float-right mb-3"><i class="fa fa-save"></i>
                                                                Simpan </button>
                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app>