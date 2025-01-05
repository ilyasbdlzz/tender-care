<x-layout-admin>
    <x-slot name="page_name_admin">Halaman Artikel</x-slot>
    <x-slot name="page_title">Berikut adalah Data Artikel :</x-slot>
    <x-slot name="page_content_admin">
  
        @if (session('pesan'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
  
        @if (session('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('update') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
  
        @if (session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
  
        <a href="{{ route('articlemedis.create') }}" class="btn btn-primary">+ Tambah Artikel</a>
        
        <br><br>
        <table class="table table-bordered ">
            <tr class="text-white" style="background: #A375FF;">
                <th>Id</th>
                <th>Judul Artikel</th>
                <th>Konten Artikel</th>
                <th>Pembuat Artikel</th>
                <th>Aksi</th>
            </tr>
            @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->content }}</td>
                <td>{{ $article->user->name }}</td> <!-- Mengambil nama user atau tenaga medis -->
                <td>
                    <a href="{{ url('articlemedis/edit', $article->id) }}" class="btn btn-warning text-dark">
                        <i class="far fa-edit"></i> Edit
                    </a>
                    <form action="{{ secure_url('articlemedis/destroy', $article->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                            <i class="far fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
  </x-layout-admin>
  