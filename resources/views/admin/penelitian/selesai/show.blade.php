<x-app>

    <div class="container">
        <div class="card-header">
            <h1>Data Penelitian Selesai</h1>
        </div>
        <div class="card">
        <div class="card-body">
            <div class="card bg-primary text-white">
                <div class="card-header">
                    <h2 class="card-title">Usulan Penelitian</h2>
                </div>
            </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Judul
                        Penelitian</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="judul_penelitian" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Skema
                        Penelitian</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tkt_new" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tema
                        Penelitian</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="end_tkt" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Topik
                        Penelitian</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="end_tkt" value="">
                    </div>
                </div>
            </form>
        </div>

        <!-- Identitas -->
        <div class="card-body">
            <div class="card bg-primary text-white">
                <div class="card-header">
                    <h2 class="card-title">Identitas Pengusul</h2>
                </div>
            </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">NIDN</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nidn" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea style="height: 50px" name="alamat" id="" class="form-control"></textarea>
                    </div>
                </div>
            </form>
        </div>

        <!-- Identitas Anggota -->
        <div class="card-body">
            <div class="card bg-primary text-white">
                <div class="card-header">
                    <h2 class="card-title">Anggota Penelitian</h2>
                </div>
            </div>
            <label class="col-sm-5 col-form-label"><b style="color: red">Anggota 1</b></label>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Anggota</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_gelar1" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Bidang Keahlian</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="bidang_keahlian" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tugas</label>
                    <div class="col-sm-9">
                        <textarea style="height: 50px" name="tugas_penelitian1" id="" class="form-control"></textarea>
                    </div>
                </div>

                <hr>

                <label class="col-sm-5 col-form-label"><b style="color: red">Anggota 1</b></label>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Anggota</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_gelar1" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Bidang
                        Keahlian</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="bidang_keahlian" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tugas</label>
                    <div class="col-sm-9">
                        <textarea style="height: 50px" name="tugas_penelitian1" id="" class="form-control"></textarea>
                    </div>
                </div>
            </form>
        </div>

        <!-- Proposal -->
        <div class="card-body">
            <div class="card bg-primary text-white">
                <div class="card-header">
                    <h2 class="card-title">Proposal Usulan</h2>
                </div>
            </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Proposal</label>
                    <div class="col-sm-9">
                        <img src="{{ url('public/template') }}/dist/img/pdf.png" alt="User Avatar"
                            style="width: 5%" class="img-box">
                        <button class="btn btn-primary"> Download</button>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Unggah</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="peran2" value="">
                    </div>
                </div>
            </form>
        </div>
        <!-- RAB -->
        <div class="card-body">
            <div class="card bg-primary text-white">
                <div class="card-header">
                    <h2 class="card-title">Rencana Anggaran Biaya</h2>
                </div>
            </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jumlah Pendanaan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="peran2" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">File RAB</label>
                    <div class="col-sm-9">
                        <img src="{{ url('public/template') }}/dist/img/exel.png" alt="User Avatar"
                            style="width: 5%" class="img-box">
                        <button class="btn btn-primary"> Download</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

</x-app>