@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-people"></span>
            Show New - Campaign
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                    
                <table class="table table-striped table-bordered"> 
                 <tr>
                    <td>ID</td>
                    <td>{{ $settings->id }}</td>
                </tr>
                {{-- <tr>
                    <td>Id User</td>
                    <td>{{ $campaign->user_id }}</td>
                </tr> --}}
                <tr>
                    <td>Title</td>
                    <td>{{ $settings->title }}</td>
                </tr>
                <tr>
                    <td>Short Description</td>
                    <td>{{ $settings->short_description }}</td>
                </tr>
                <tr>
                    <td>Body</td>
                    <td>{{ $settings->body }}</td>
                </tr>
               
                
                
                
                <tr>
                    <td>Created At</td>
                    <td>{{ Carbon\Carbon::parse($settings->created_at )->isoFormat('DD MMM Y HH:mm')}}</td>
                </tr>
                <tr>
                    <td>Update At</td>
                    <td>{{ Carbon\Carbon::parse( $settings->update_at)->isoFormat('DD MMM Y HH:mm') }}</td>
                </tr>

                <td>
                <a href="{{ route('admin.settings.index')}}" class="btn btn-sm btn-primary mb-2">
                    <span class="bi bi-arrow-left"></span>
                Kembali</a>
                </td>

                </table>

            </div>
        </div>  
    </section>

</div>
@endsection