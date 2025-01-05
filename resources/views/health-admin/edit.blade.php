<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Kelola Health Record / Edit</x-slot>
    <x-slot name="page_title">Silakan Perbarui Data Health Record dengan Teliti :</x-slot>

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
                <h4>Edit Kelola Health Record Anda</h4>
            </div>
            <div class="card-body">

                <form class="forms-sample" action="{{ secure_url('/health/update', $health->id) }}" method="post">
                    @csrf
                    @method('put')

                    <!-- ID -->
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $health->id ?? '' }}">

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
                                        <option value="{{ $parent->id }}" {{ $parent->id == $health->iduser ? 'selected' : '' }}>
                                            {{ $parent->name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                            <div class="form-group row">
                                <label for="drug" class="col-sm-4 col-form-label">Obat-Obatan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="drug" name="drug" placeholder="Masukkan Nama Obat" Badan value="{{ $health->drug ?? '' }}">
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="allergy" class="col-sm-4 col-form-label">Alergi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="allergy" name="allergy" placeholder="Masukkan Nama Alergi" value="{{ $health->allergy ?? '' }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-sm-4 col-form-label">Tanggal Berobat</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="date" name="date" placeholder="Masukkan Tanggal Input" value="{{ $health->date ?? '' }}">
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
