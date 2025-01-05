<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Kelola Artikel / Edit</x-slot>
    <x-slot name="page_title">Silakan Perbarui Data Artikel dengan Teliti :</x-slot>

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
                <h4>Edit Artikel Anda</h4>
            </div>
            <div class="card-body">

                <form class="forms-sample" action="{{ route('/articleadmin/update', $article->id) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label">Judul Artikel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul Artikel" value="{{ $article->title ?? '' }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="content" class="col-sm-4 col-form-label">Konten</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="content" name="content" placeholder="Masukkan Konten Artikel">{{ $article->content ?? '' }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="iduser" class="col-sm-4 col-form-label">Penulis</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="iduser" name="iduser">
                                @foreach ($parents as $parent)
                                    <option value="{{ $parent->id }}" {{ $article->iduser == $parent->id ? 'selected' : '' }}>
                                        {{ $parent->name }} ({{ $parent->role }})
                                    </option>
                                @endforeach
                            </select>
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
