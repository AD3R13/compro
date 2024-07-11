@extends('layouts.app')
@section('title', 'Data Pengalaman')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.experience.create') }}" class="btn btn-primary">Tambah </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pekerjaan</th>
                            <th>Perusahaan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($experience as $experience)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $experience->job_title }}</td>
                                <td>{{ $experience->company_name }}</td>
                                <td>{{ $experience->date_start }}</td>
                                <td>{{ $experience->date_finish }}</td>
                                <td>{{ $experience->job_description }}</td>
                                <td>
                                    <a href="{{ route('admin.experience.edit', $experience->id) }}"
                                        class="btn btn-success btn-sm">Edit</a> |

                                    <form method="POST" action="{{ route('admin.experience.destroy', $experience->id) }}"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm confirm" type="submit">Hapus</button>
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
