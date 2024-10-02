@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-people"></span>
            Show New - Categories
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                    
                <table class="table table-striped table-bordered"> 
                 <tr>
                    <td>ID</td>
                    <td>{{ $categories->id }}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{ $categories->name }}</td>
                </tr>
                <tr>
                    <td>Slug</td>
                    <td>{{ $categories->slug }}</td>
                </tr>
                <tr>
                    <td>Created At</td>
                    <td>{{ Carbon\Carbon::parse($categories->created_at )->isoFormat('DD MMM Y HH:mm')}}</td>
                </tr>
                <tr>
                    <td>Update At</td>
                    <td>{{ Carbon\Carbon::parse( $categories->update_at)->isoFormat('DD MMM Y HH:mm') }}</td>
                </tr>

                <td>
                <a href="{{ route('admin.categories.index')}}" class="btn btn-sm btn-primary mb-2">
                    <span class="bi bi-arrow-left"></span>
                Kembali</a>
                </td>

                </table>

            </div>
        </div>  
    </section>

</div>
@endsection