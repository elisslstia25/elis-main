<x-dosen>

    <div class="container">
        <div class="card mt-3 pt-3">
            <div class="card-body">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-title">
                            <h4>Data Penelitan Berjalan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <table id="table1" class="table table-bordered table-striped">
                                <thead class="btn-primary">
                                    <th width="1%">NO</th>
                                    <th width="20%x">AKSI</th>
                                    <th>STATUS</th>
                                    <th>NAMA PENGUSUL</th>
                                    <th>JUDUL PENGUSUL</th>
                                    <th>TANGGAL PENGAJUAN</th>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($list_penelitian as $penelitian)
                                        
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/penelitian/berjalan', $penelitian->id) }}"
                                                            class="btn btn-info"><i class="fas fa-eye"></i> Lihat</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn btn-success" for="">Didanai</div>
                                                </td>
                                                <td>{{ $penelitian->pegawai->nama }}</td>
                                                <td>{{ $penelitian->judul_penelitian }}</td>
                                                <td>{{ $penelitian->created_at }}</td>
                                            </tr>
                                        
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dosen>
