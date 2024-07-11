@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.experience.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="">Pekerjaaan</label>
                    <input value="{{ $edit->job_title }}" type="text" name="job_title"
                        placeholder="Masukkan Nama Pekerjaan " class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Perusahaan</label>
                    <input value="{{ $edit->company_name }}" type="text" name="company_name"
                        placeholder="Masukkan Nama Perusahaan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Mulai</label>
                    <input value="{{ $edit->date_start }}" type="date" name="date_start"
                        placeholder="Masukkan No Tlp Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Selesai</label>
                    <input value="{{ $edit->date_finish }}" type="date" name="date_finish"
                        placeholder="Masukkan No Tlp Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi Pekerjaan</label>
                    <textarea name="job_description" id="" cols="30" rows="10" class="form-control">{{ $edit->job_description }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>


            </form>
        </div>
    </div>
@endsection
