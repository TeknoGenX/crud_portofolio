@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Portofolio</h2>

    <p><strong>Nama:</strong> {{ $portfolio->nama }}</p>
    <p><strong>Deskripsi:</strong> {{ $portfolio->deskripsi }}</p>

    <a href="{{ route('portofolios.edit', $portfolio->id) }}">Edit</a> |
    <a href="{{ route('portofolios.index') }}">Kembali</a>
</div>
@endsection
