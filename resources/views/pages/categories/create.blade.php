@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Tambah Kategori</h3>

        <a href="{{ route('admin.categories.index')}}" class="btn btn-sm btn-primary mb-2">Kembali</a>

        <form action="{{route('admin.categories.store') }}" method="POST">
            @csrf

            <div class="form-group mb-2">
                <label for="name" class="form-lable"> Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid  @enderror" />

                @error('name') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="slug" class="form-lable"> Slug  <span class="text-danger">*</span></label>
                <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="form-control @error('slug') is-invalid  @enderror" />

                @error('slug') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary"> Simpan </button>

            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Batal</a>

        </form>
    </div>

@endsection