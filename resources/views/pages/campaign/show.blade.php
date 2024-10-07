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
                    <td>{{ $campaign->id }}</td>
                </tr>
                {{-- <tr>
                    <td>Id User</td>
                    <td>{{ $campaign->user_id }}</td>
                </tr> --}}
                <tr>
                    <td>Title</td>
                    <td>{{ $campaign->title }}</td>
                </tr>
                <tr>
                    <td>Short Description</td>
                    <td>{{ $campaign->short_description }}</td>
                </tr>
                <tr>
                    <td>Body</td>
                    <td>{{ $campaign->body }}</td>
                </tr>
                <tr>
                    <td>View Count</td>
                    <td>{{ $campaign->view_count }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{ $campaign->status }}</td>
                </tr>
                <tr>
                    <td>Nominal</td>
                    <td>{{ $campaign->nominal }}</td>
                </tr>
                <tr>
                    <td>Goal</td>
                    <td>{{ $campaign->goal }}</td>
                </tr>
                <tr>
                    <td>End Date</td>
                    <td>{{ $campaign->end_date }}</td>
                </tr>
                <tr>
                    <td>Note</td>
                    <td>{{ $campaign->note }}</td>
                </tr>
                <tr>
                    <td>Receiver</td>
                    <td>{{ $campaign->receiver }}</td>
                </tr>
                <tr>
                    <td>Created At</td>
                    <td>{{ Carbon\Carbon::parse($campaign->created_at )->isoFormat('DD MMM Y HH:mm')}}</td>
                </tr>
                <tr>
                    <td>Update At</td>
                    <td>{{ Carbon\Carbon::parse( $campaign->update_at)->isoFormat('DD MMM Y HH:mm') }}</td>
                </tr>

                <td>
                <a href="{{ route('admin.campaign.index')}}" class="btn btn-sm btn-primary mb-2">
                    <span class="bi bi-arrow-left"></span>
                Kembali</a>
                </td>

                </table>

            </div>
        </div>  
    </section>

</div>
@endsection