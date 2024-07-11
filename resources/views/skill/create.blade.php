@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.skill.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Nama Skill:</label>
                    <input type="text" name="nama_skill" placeholder="Masukkan Nama Skill " class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Level Skill:</label>
                    <input type="text" name="level_skill" placeholder="Masukkan Level Skill" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>


            </form>
        </div>
    </div>
@endsection
