@extends('adminlte::page')

@section('title', 'Menu Manager')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Menu Manager</h1>
        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"><i
                class="fas fa-plus"></i></button>
    </div>
@stop

@section('content')
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Url</th>
                <th>Role</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
            @foreach ($menus as $key => $menu)
                <tr>
                    <td>{{ $menus->firstItem() + $key }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->url }}</td>
                    <td>{{ $menu->role_id }}</td>
                    <td>{{ $menu->is_active ? 'Y' : 'N' }}</td>
                    <td>
                        <button class="btn btn-sm btn-dark">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $menus->links('vendor.pagination.bootstrap-4') }}
    </div>

    <!-- Modal -->

    <form action="{{ route('menu.store') }}" method="POST">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <select name="role_id" id="role" class="form-control">
                                <option disabled selected>Pilih role</option>
                                @foreach ($roles as $r)
                                    <option value="{{ $r->id }}">{{ $r->name }}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nama menu">
                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" name="order" class="form-control" placeholder="Posisi menu">
                            @error('order')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="icon" class="form-control" placeholder="Icon">
                            @error('icon')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="url" class="form-control" placeholder="URL">
                            @error('url')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select name="is_active" id="active" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">No</option>
                            </select>
                            @error('is_active')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


@stop

@section('css')
    {{--
    <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
