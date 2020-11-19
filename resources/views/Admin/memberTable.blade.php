@extends('adminlte::page')
@section('title', 'Data anggota')
@section('content_header')
    {{-- <h1>Data anggota</h1> --}}
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data anggota</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Cabang</th>
                                <th>Hp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $key => $mem)
                                <tr>
                                    <td>{{ $members->firstItem() + $key }}</td>
                                    <td>{{ $mem->nama_lengkap }}</td>
                                    <td>{{ $mem->cabang }}</td>
                                    <td>{{ $mem->hp }}</td>
                                    <td>
                                        <a href="{{ route('member.show', $mem->id) }}" class="btn btn-sm btn-secondary"><i
                                                class="fas fa-search-plus"></i></a>
                                        <button class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            {{ $members->links('vendor.pagination.bootstrap-4') }}
            <!-- /.card -->
        </div>
    </div>
@endsection
@section('js')

@endsection
