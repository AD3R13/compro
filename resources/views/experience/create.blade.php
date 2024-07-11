@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <form action="{{route('admin.experience.store')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="">Pekerjaaan</label>
                <input type="text" name="job_title" placeholder="Masukkan Nama Pekerjaan " class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Perusahaan</label>
                <input type="text" name="company_name" placeholder="Masukkan Nama Perusahaan" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Mulai</label>
                <input type="date" name="date_start" placeholder="Masukkan No Tlp Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Selesai</label>
                <input type="date" name="date_finish" placeholder="Masukkan No Tlp Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Deskripsi Pekerjaan</label>
                <textarea name="job_description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group mb-3">
                <input type="submit"  class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>


        </form>
    </div>
</div>
@endsection
