@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.dabout.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="">Birthday:</label>
                    <input type="date" name="lahir" placeholder="Masukkan Lahir" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="">Place of birth:</label>
                    <input value="{{ $edit->tempat_lahir }}" type="text" name="tempat_lahir" placeholder="Masukkan Email"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Age:</label>
                    <input value="{{ $edit->umur }}" type="text" name="umur" placeholder="Masukan Umur"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">City:</label>
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control">{{ $edit->alamat }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Phone:</label>
                    <input value="{{ $edit->phone }}" name="phone" id="" placeholder="Masukkan No Tlp"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email:</label>
                    <input value="{{ $edit->email }}" type="email" name="email" placeholder="Masukkan Email"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Gender:</label>
                    <input type="text" name="gender" placeholder="Masukkan Gender" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Religion</label>
                    <input value="{{ $edit->agama }}" type="text" name="agama" placeholder="Masukkan Agama"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>


            </form>
        </div>
    </div>
@endsection
