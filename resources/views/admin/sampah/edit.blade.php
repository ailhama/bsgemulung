@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Edit Sampah</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('sampah.update', $sampah->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Warga</label>
                            <input type="text" class="form-control" name="nama" value="{{ $sampah->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Sampah</label>
                            <select name="jenis_sampah" id="jenis_sampah" class="form-control">
                                <option value="Botol" {{ $sampah->jenis_sampah == 'Botol' ? 'selected' : '' }}>Botol</option>
                                <option value="Gelas" {{ $sampah->jenis_sampah == 'Gelas' ? 'selected' : '' }}>Gelas</option>
                                <option value="Kardus" {{ $sampah->jenis_sampah == 'Kardus' ? 'selected' : '' }}>Kardus</option>
                                <option value="Kaleng/Besi" {{ $sampah->jenis_sampah == 'Kaleng/Besi' ? 'selected' : '' }}>Kaleng/Besi
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Berat</label>
                            <input type="number" class="form-control" name="berat" value="{{ $sampah->berat }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $sampah->deskripsi }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
