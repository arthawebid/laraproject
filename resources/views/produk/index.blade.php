@extends('layouts.app') 

@section('judulpage','Daftar Produk')

@section('konten')
<h3>Daftar Produk</h3>
<ul>
    @foreach($produk as $item)
    <li>{{ $item['nama'] }}- Rp. {{ number_format($item['harga'],0,",",".") }}</li>
    @endforeach
</ul>
@endsection