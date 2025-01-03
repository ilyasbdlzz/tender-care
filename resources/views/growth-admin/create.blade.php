<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Tambah Growth Record</x-slot>
    <x-slot name="page_title"></x-slot>
    <x-slot name="page_content_admin">
        <div class="card">
            <div class="card-header text-white" style="background: #A375FF;">
                <h4>Form Tambah Growth Record</h4>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('growth.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="iduser" class="col-sm-4 col-form-label">Nama Pasien</label>
                        <div class="col-sm-8">
                            <select id="iduser" name="iduser" class="form-control">
                                <option value="">Pilih Nama Pasien</option>
                                @if($parents->isEmpty())
                                    <option value="">Tidak ada data</option>
                                @else
                                    @foreach($parents as $parent)
                                        <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="weight" class="col-sm-4 col-form-label">Berat Badan</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="weight" name="weight" placeholder="Masukkan Berat Badan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="height" class="col-sm-4 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="height" name="height" placeholder="Masukkan Tinggi Badan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="head" class="col-sm-4 col-form-label">Lingkar Kepala</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="head" name="head" placeholder="Masukkan Lingkar Kepala">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-sm-4 col-form-label">Tanggal Input</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="date" name="date" placeholder="Masukkan Tanggal Input">
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