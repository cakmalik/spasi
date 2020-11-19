@extends('adminlte::page')

@section('title', 'Setup Manager')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Setup Manager</h1>
        <button class="btn btn-sm btn-danger"><i class="fas fa-plus"></i></button>
    </div>
@stop

@section('content')
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Value</th>
            <th>Action</th>
        </tr>
        @foreach ($setups as $key => $stp)
            <tr>
                <td>{{ $stp->name }}</td>
                <td>{{ $stp->value }}</td>
                <td>
                    <button class="btn btn-sm btn-dark">Edit</button>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
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
