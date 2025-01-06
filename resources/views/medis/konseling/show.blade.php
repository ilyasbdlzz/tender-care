<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Pengajuan Konseling / Show</x-slot>
    <x-slot name="page_title">Detail Pengajuan Konseling</x-slot>
    
    <x-slot name="page_content_admin">
        @if($conseling !== null)
        <div class="card mx-2 mb-4">
            <div class="card-header text-white" style="background: #A375FF;">
                <h4>View Kelola Pengajuan Konseling</h4>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4 fw-bold">Nama Pasien</div>
                    <div class="col-sm-8">: {{ $conseling->users->name ?? 'Pasien tidak ditemukan' }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 fw-bold">Nama Tenaga Medis</div>
                    <div class="col-sm-8">: {{ $conseling->medic->users->name ?? 'Psikolog tidak ditemukan' }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 fw-bold">Nomor Handphone</div>
                    <div class="col-sm-8">: {{ $conseling->medic->users->contact }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 fw-bold">Tanggal Konseling</div>
                    <div class="col-sm-8">: {{ $conseling->date }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 fw-bold">Jam Konseling</div>
                    <div class="col-sm-8">: {{ $conseling->clock }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-4 fw-bold">Status</div>
                    <div class="col-sm-8">: {{ $conseling->status }}</div>
                </div>
            </div>

            <div class="mx-5">

            <div class="table-responsive">
                <h5 class="text-center">Riwayat Pertumbuhan</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-white" style="background: #A375FF;">
                            <th>Id</th>
                            <th>Nama Pasien</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th>Lingkar Kepala</th>
                            <th>Tanggal Input</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($growths as $growth)
                        <tr>
                            <td>{{ $growth->id }}</td>
                            <td>{{ $growth->users->name ?? 'Pasien tidak ditemukan' }}</td>
                            <td>{{ $growth->weight }} kg</td>
                            <td>{{ $growth->height }} cm</td>
                            <td>{{ $growth->head }} cm</td>
                            <td>{{ $growth->date }} cm</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="table-responsive my-3">
                <h5 class="text-center">Riwayat Kesehatan</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-white" style="background: #A375FF;">
                            <th>Id</th>
                            <th>Nama Pasien</th>
                            <th>Obat-Obatan</th>
                            <th>Alergi</th>
                            <th>Tanggal Berobat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($healths as $health)
                        <tr>
                            <td>{{ $health->id }}</td>
                            <td>{{ $health->users->name ?? 'Pasien tidak ditemukan' }}</td>
                            <td>{{ $health->drug }}</td>
                            <td>{{ $health->allergy }}</td>
                            <td>{{ $health->date }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        </div>
        @else 
            <p class="text-danger">Task not found.</p>
        @endif
    </x-slot>
</x-layout-admin>