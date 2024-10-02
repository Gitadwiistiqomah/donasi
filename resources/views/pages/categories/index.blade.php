@extends('layouts.app')

@section('content')
<div class="py-4">
    <h3 class="fw-bold mb-2 pb-2 border-bottom">Kategori</h3>

    <a href="{{ route('admin.categories.create') }}" class="btn btn-sm  mb-3 btn-primary">Tambah Kategori</a>


    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if(count($categories) == 0)
            <tr>
                <td colspan="5" class="text-center">Tidak ada data</td>
            </tr>
            @else 
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->slug}}</td>
                        <td>
                            <a href="{{ route('admin.categories.show', $item->id) }}" class="btn btn-outline-secondary btn-sm me-1">
                                <span class="bi bi-eye">Show</span>
                            </a>
                            <a href="{{ route('admin.categories.edit', $item->id) }}" class="btn btn-secondary btn-sm me-1">
                                <span class="bi bi-pencil">Edit</span>
                            </a> 
                            <a href="#" class="btn btn-danger btn-sm me-1" onclick="handleDestroy(`{{ route ('admin.categories.destroy', $item->id) }}`)">
                                <span class="bi bi-trash">Hapus</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

    <form action="" id="form-delete" method="POST">
        @csrf
        @method('DELETE')
    </form>
     
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
        function handleDestroy(url) {
            swal({
                title: "Apakah anda yakin?",
                text: "Setelah dihapus, Anda tidak akan dapat mengembalikannya",
                icon: "warning",
                buttons: ['Batal', 'Ya, hapus!'],
                dengerMode: true,
            })
            .then((confirmed) => {
                if (confirmed) {
                    $('#form-delete').attr('action', url);
                    $('#form-delete').submit();
                }
            });
        }
    </script>
@endpush