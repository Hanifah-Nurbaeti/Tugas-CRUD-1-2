@extends('master')

@section('content')
		<div class="ml-3 mt-3">
		<h3>Detail Pertanyaan</h3>
		<p> Judul : {{$pertanyaan->judul}} </p>
		<p> Isi : {{$pertanyaan->isi}} </p>
		<p> Tanggal : {{$pertanyaan->tanggal_dibuat}} </p>
		<p> Update : {{$pertanyaan->tanggal_diperbaharui}} </p>
		<a href="/pertanyaan" class="btn btn-primary">
Kembali
</a>
		</div>
@endsection