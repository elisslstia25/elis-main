<x-app>

    <div class="container">
        <div class="card mt-3 pt-3">
            <div class="card-body">
                <div class="card">
                     <div class="card-header bg-primary">
                        <div class="card-title">
                            <h4>Data Laporan Pengabdian Selesai</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="container">
                            <table id="table1" class="table table-bordered table-striped">
                                <thead class="btn-primary">
                                    <th width="1%">NO</th>
                                    <th width="20%">AKSI</th>
                                    <th>STATUS</th>
                                    <th>NAMA PENGUSUL</th>
                                    <th>JUDUL PENGUSUL</th>
                                    <th>TANGGAL PENGAJUAN</th>
                                </thead>
                                @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_selesai as $pengabdian)
                                    @if ($pengabdian->status == 2)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/pengabdian/selesai', $pengabdian) }}"
                                                        class="btn btn-info"><i class="fas fa-eye"></i> Lihat
                                                        Pengajuan</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn btn-success" for="">Di danai</div>
                                            </td>
                                            <td>{{ auth()->user()->nama }}</td>
                                            <td>{{ $penelitian_usulanbaru->judul_penelitian }}</td>
                                            <td>{{ $penelitian_usulanbaru->created_at }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app>