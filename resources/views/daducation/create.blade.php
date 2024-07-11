@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.daducation.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Nama:</label>
                    <input type="text" name="nama" placeholder="Masukkan Email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Kejuruan:</label>
                    <input name="kejuruan" placeholder="Masukkan Kejuruan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Masuk:</label>
                    <input type="date" name="masuk" placeholder="Masukkan Email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Kelulusan:</label>
                    <input type="date" name="kelulusan" placeholder="Masukkan Gender" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>


            </form>
        </div>
    </div>
@endsection
