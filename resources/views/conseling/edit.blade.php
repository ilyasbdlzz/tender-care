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

                                    <input type="hidden" class="form-control" id="id" name="id" placeholder="Masukkan Id" value="{{ $conseling->id ?? '' }}">

                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Nama Pasien</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Pasien" value="{{ $conseling->iduser ?? '' }}">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="medis_id" class="col-sm-4 col-form-label">Nama Tenaga Medis</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="medis_id" name="medis_id" placeholder="Masukkan Nama Tenaga Medis" value="{{ $conseling->medis_id ?? '' }}">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="contact" class="col-sm-4 col-form-label">Tanggal Konseling</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="contact" name="contact" placeholder="Masukkan Tanggal Konseling" value="{{ $conseling->date ?? '' }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact" class="col-sm-4 col-form-label">Jam Konseling</label>
                                <div class="col-sm-8">
                                    <input type="time" class="form-control" id="contact" name="contact" placeholder="Masukkan Jam Konseling" value="{{ $conseling->clock ?? '' }}">
                                </div>
                            </div>
        
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
