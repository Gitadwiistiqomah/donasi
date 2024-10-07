@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Tambah Kategori</h3>

        <a href="{{ route('settings.index')}}" class="btn btn-sm btn-primary mb-2">Kembali</a>

        <form action="{{route('settings.store') }}" method="POST">
            @csrf

            <div class="form-group mb-2">
                <label for="name" class="form-lable"> Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid  @enderror" />

                @error('name') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="email" class="form-lable"> Email  <span class="text-danger">*</span></label>
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid  @enderror" />

                @error('email') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="phone" class="form-lable"> Phone  <span class="text-danger">*</span></label>
                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid  @enderror" />

                @error('phone') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="about" class="form-lable"> About  <span class="text-danger">*</span></label>
                <input type="text" name="about" id="about" value="{{ old('about') }}" class="form-control @error('about') is-invalid  @enderror" />

                @error('about') 
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary"> Simpan </button>

            <a href="{{ route('settings.index') }}" class="btn btn-secondary">Batal</a>

        </form>
    </div>

@endsection