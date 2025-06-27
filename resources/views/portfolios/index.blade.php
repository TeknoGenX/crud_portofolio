@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Portofolio</h1>
    <a href="{{ route('portofolios.create') }}" class="btn btn-primary mb-3">Tambah</a>
    @foreach ($portofolios as $item)
        <div class="card mb-2">
            <div class="card-body">
                <h5>{{ $item->nama }}</h5>
                <p>{{ $item->deskripsi }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
