@extends('layouts.app')
@section('judulpage','Data Teman')

@section('konten')
<div class="container">

    <div class="konten">
    <h3>Data Teman</h3>
    
    @if(empty($data))
        <p>Tidak ada Data</p>
    @else
    <table class="table table-hover">
    <thead>    
        <tr>
            <th>ID Buku</th>
            <th>Nama Teman</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
    <tr>
        <td>{{ $d['idbuku'] }}</td>
        <td>{{ $d['namateman'] }}</td>
        <td><a class="btn btn-warning btn-sm" href="{{ route('detailteman', $d['idbuku'] ) }}"> Detail </a></td>
    </tr>
    @endforeach
    </tbody>
    </table>
    @endif
    </div>


</div>
@endsection