@extends('layouts.app')
@section('title', 'Data About')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.dabout.create') }}" class="btn btn-primary">Tambah </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Umur</th>
                            <th>Agama</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->lahir }}</td>
                                <td>{{ $data->tempat_lahir }}</td>
                                <td>{{ $data->umur }}</td>
                                <td>{{ $data->agama }}</td>
                                <td>{{ $data->gender }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->email }}</td>
                                <td>
                                    <a href="{{ route('admin.dabout.edit', $data->id) }}"
                                        class="btn btn-success btn-sm">Edit</a> |

                                    <form method="POST" action="{{ route('admin.dabout.destroy', $data->id) }}"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
