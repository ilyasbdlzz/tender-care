<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Kelola Pengajuan Konseling / Edit</x-slot>
    <x-slot name="page_title">Silakan Perbarui Data Pengajuan Konseling dengan Teliti :</x-slot>

    <x-slot name="page_content_admin">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card">
            <div class="card-header text-white" style="background: #A375FF;">
                <h4>Edit Kelola Pengajuan Konseling Anda</h4>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ url('/conseling/update', $conseling->id) }}" method="post">
                    @csrf
                    @method('put')

                    <!-- ID -->
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $conseling->id ?? '' }}">

                    <!-- Nama Pasien -->
                    <div class="form-group row">
                        <label for="iduser" class="col-sm-4 col-form-label">Nama Pasien</label>
                        <div class="col-sm-8">
                            <select id="iduser" name="iduser" class="form-control">
                                <option value="">Pilih Nama Pasien</option>
                                @if($parents->isEmpty())
                                    <option value="">Tidak ada data</option>
                                @else
                                    @foreach($parents as $parent)
                                        <option value="{{ $parent->id }}" {{ $parent->id == $conseling->iduser ? 'selected' : '' }}>
                                            {{ $parent->name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <!-- Nama Tenaga Medis -->
                    <div class="form-group row">
                        <label for="medis_id" class="col-sm-4 col-form-label">Nama Tenaga Medis</label>
                        <div class="col-sm-8">
                            <select id="medis_id" name="medis_id" class="form-control">
                                <option value="">Pilih Nama Tenaga Medis</option>
                                @if($conselings->isEmpty())
                                    <option value="">Tidak ada data</option>
                                @else
                                    @foreach($conselings as $medis)
                                        <option value="{{ $medis->idmedis }}" {{ $medis->idmedis == $conseling->medis_id ? 'selected' : '' }}>
                                            {{ $medis->name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <!-- Tanggal Konseling -->
                    <div class="form-group row">
                        <label for="date" class="col-sm-4 col-form-label">Tanggal Konseling</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="date" name="date" value="{{ $conseling->date ?? '' }}">
                        </div>
                    </div>

                    <!-- Jam Konseling -->
                    <div class="form-group row">
                        <label for="clock" class="col-sm-4 col-form-label">Jam Konseling</label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control" id="clock" name="clock" value="{{ $conseling->clock ?? '' }}">
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <select id="status" name="status" class="form-control">
                                <option value="">Pilih Status</option>
                                <option value="Pending" {{ $conseling->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Approved" {{ $conseling->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                <option value="Rejected" {{ $conseling->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="form-group row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </x-slot>
</x-layout-admin>
