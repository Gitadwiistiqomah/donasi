@extends('layouts.app')

@section('content')
<div class="py-4">
    <h3 class="fw-bold mb-2 pb-2 border-bottom">Kategori</h3>

    <a href="{{ route('admin.campaign.create') }}" class="btn btn-sm  mb-3 btn-primary">Tambah Kategori</a>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                {{-- <th>User ID</th> --}}
                <th>Title</th>
                <th>Short Description </th>
                <th>Body </th>
                <th>Nominal </th>
                <th>Goal </th>
                <th>End date</th>
                <th>Status</th>
                <th>Aksi</th>
                
            </tr>
        </thead>
        <tbody>
            @if(count($campaign) == 0)
            <tr>
                <td colspan="5" class="text-center">Tidak ada data</td>
            </tr>
            @else 
                @foreach ($campaign as $item)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        {{-- <td>{{ $item->user_id}}</td> --}}
                        <td>{{ $item->title}}</td>
                        <td>{{ $item->short_description}}</td>
                        <td>{{ $item->body}}</td>
                        <td>{{ $item->nominal}}</td>
                        <td>{{ $item->goal}}</td>
                        <td>{{ Carbon\carbon::parse($item->end_date)->isoFormat('DD MMMM Y') }}</td>
                        <td>{{ $item->status}}</td>
                    
                        <td>
                            <a href="{{ route('admin.campaign.show', $item->id) }}" class="btn btn-outline-secondary btn-sm me-1">
                                <span class="bi bi-eye">Show</span>
                            </a>
                            <a href="{{ route('admin.campaign.edit', $item->id) }}" class="btn btn-secondary btn-sm me-1">
                                <span class="bi bi-pencil">Edit</span>
                            </a> 
                            <a href="#" class="btn btn-danger btn-sm me-1" onclick="handleDestroy(`{{ route ('admin.campaign.destroy', $item->id) }}`)">
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


@push('styles')
    <link rel="stylesheet" href="{{ asset('/vendors/simple-datatables/style.css')}}">
@endpush

@push('scripts')
    <script src="{{ asset('/vendors/simple-datatables/simple-datatables.js')}}"></script>
        <script>
        // Simple Datatable
        let datatable = document.querySelector('#datatable');
        new simpleDatatables.DataTable(datatable);
    </script>
@endpush

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