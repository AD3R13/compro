@extends('layouts.app')
@section('title', 'Data Pengalaman')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.skill.create') }}" class="btn btn-primary">Tambah </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Skill</th>
                            <th>Level Skill</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($skill as $skill)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $skill->nama_skill }}</td>
                                <td>{{ $skill->level_skill }}</td>
                                <td>
                                    <a href="{{ route('admin.skill.edit', $skill->id) }}"
                                        class="btn btn-success btn-sm">Edit</a> |

                                    <form method="POST" action="{{ route('admin.skill.destroy', $skill->id) }}"
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
