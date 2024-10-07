@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Update Campaign</h3>

        <a href="{{ route('admin.campaign.index')}}" class="btn btn-sm btn-primary mb-2">Kembali</a>

        <form action="{{route('admin.campaign.update') }}" method="POST">
            @csrf
            <div class="form-group mb-2">
                <label for="title" class="form-lable"> Title <span class="text-danger">*</span></label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid  @enderror" />

                @error('title') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="short_description" class="form-lable"> Short Description  <span class="text-danger">*</span></label>
                <input type="text" name="short_description" id="short_description" value="{{ old('short_description') }}" class="form-control @error('short_description') is-invalid  @enderror" />

                @error('short_description') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="body" class="form-lable"> Body <span class="text-danger">*</span></label>
                <input type="text" name="body" id="body" value="{{ old('body') }}" class="form-control @error('body') is-invalid  @enderror" />

                @error('body') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="view_count" class="form-lable"> View Count <span class="text-danger">*</span></label>
                <input type="number" name="view_count" id="view_count" value="{{ old('view_count') }}" class="form-control @error('view_count') is-invalid  @enderror" />

                @error('view_count') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            {{-- <div class="form-group mb-2">
                <label for="status" class="form-lable"> Status  <span class="text-danger">*</span></label>
                <input type="text" name="status" id="status" value="{{ old('status') }}" class="form-control @error('status') is-invalid  @enderror" />

                @error('status') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div> --}}
            <div class="form-group mb-2">
                <label for="status" class="form-lable"> Status <span class="text-danger">*</span></label>
            <div class="form-check mb-2">
                <input type="radio" name="status" id="public" value="public" value="{{ old('status') }}" class="form-check-input @error('status') is-invalid  @enderror"/>
                <label for="public" class="form-check-label"> Public <span class="text-danger">*</span></label>
            </div>
            <div class="form-check mb-2">
                <input type="radio" name="status" id="pending" value="pending" value="{{ old('status') }}" class="form-check-input @error('status') is-invalid  @enderror"/>
                <label for="pending" class="form-check-label"> Pending <span class="text-danger">*</span></label>
            </div>
            <div class="form-check mb-2">
                <input type="radio" name="status" id="archived" value="archived" value="{{ old('status') }}" class="form-check-input @error('status') is-invalid  @enderror"/>
                <label for="archived" class="form-check-label"> Archived <span class="text-danger">*</span></label>

                @error('status') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="nominal" class="form-lable"> Nominal  <span class="text-danger">*</span></label>
                <input type="number" name="nominal" id="nominal" value="{{ old('nominal') }}" class="form-control @error('nominal') is-invalid  @enderror" />

                @error('nominal') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="goal" class="form-lable"> Goal <span class="text-danger">*</span></label>
                <input type="number" name="goal" id="goal" value="{{ old('goal') }}" class="form-control @error('goal') is-invalid  @enderror" />

                @error('goal') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="end_date" class="form-lable"> End Date <span class="text-danger">*</span></label>
                <input type="datetime-local" name="end_date" id="end_date" value="{{ old('end_date') }}" class="form-control @error('end_date') is-invalid  @enderror" />

                @error('end_date') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="note" class="form-lable"> Note <span class="text-danger">*</span></label>
                <input type="text" name="note" id="note" value="{{ old('note') }}" class="form-control @error('note') is-invalid  @enderror" />

                @error('note') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="receiver" class="form-lable"> Receiver <span class="text-danger">*</span></label>
                <input type="text" name="receiver" id="receiver" value="{{ old('receiver') }}" class="form-control @error('receiver') is-invalid  @enderror" />

                @error('receiver') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary"> Simpan </button>

            <a href="{{ route('admin.campaign.index') }}" class="btn btn-secondary">Batal</a>

        </form>
    </div>

@endsection