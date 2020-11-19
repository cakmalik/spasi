@extends('adminlte::page')
@section('title', 'Data anggota')
@section('content_header')
    {{-- <h1>Data anggota</h1> --}}
@endsection
@section('content')
    @php
    echo $member->nama_lengkap;
    @endphp
@stop
