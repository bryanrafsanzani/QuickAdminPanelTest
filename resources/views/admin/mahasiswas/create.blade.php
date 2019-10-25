@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.mahasiswa.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.mahasiswas.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                <label for="nama">{{ trans('cruds.mahasiswa.fields.nama') }}*</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', isset($mahasiswa) ? $mahasiswa->nama : '') }}" required>
                @if($errors->has('nama'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.mahasiswa.fields.nama_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('nim') ? 'has-error' : '' }}">
                <label for="nim">{{ trans('cruds.mahasiswa.fields.nim') }}*</label>
                <input type="text" id="nim" name="nim" class="form-control" value="{{ old('nim', isset($mahasiswa) ? $mahasiswa->nim : '') }}" required>
                @if($errors->has('nim'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nim') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.mahasiswa.fields.nim_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection