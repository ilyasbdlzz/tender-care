<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Tambah Artikel</x-slot>
    <x-slot name="page_title"></x-slot>
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
                <h4>Form Tambah Artikel</h4>
            </div>
            <div class="card-body">
                <form action="{{ secure_url('articleadmin.store') }}" method="post">
                    @csrf
                <div class="form-group row">
                    <label for="iduser" class="col-sm-4 col-form-label">Nama Pembuat Artikel</label>
                    <div class="col-sm-8">
                    <select id="iduser" name="iduser" class="form-control">
                        <option value="">Pilih Nama Pembuat Artikel</option>
                        @foreach($parents as $parent)
                            <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
                    
                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label">Judul Artikel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul Artikel">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-sm-4 col-form-label">Konten Artikel</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="content" name="content" placeholder="Masukkan Konten Artikel" rows="4"></textarea>
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
