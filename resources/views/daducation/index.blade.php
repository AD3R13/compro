@extends('layouts.app')
@section('title', 'Data Education')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.daducation.create') }}" class="btn btn-primary">Tambah </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kejuruan</th>
                            <th>Masuk</th>
                            <th>Kelulusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->kejuruan }}</td>
                                <td>{{ $data->masuk }}</td>
                                <td>{{ $data->kelulusan }}</td>
                                <td>
                                    <a href="{{ route('admin.daducation.edit', $data->id) }}"
                                        class="btn btn-success btn-sm">Edit</a> |

                                    <form method="POST" action="{{ route('admin.daducation.destroy', $data->id) }}"
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
