@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Portofolio</h2>

    @if($errors->any())
        <div style="color:red;">
            @foreach($errors->all() as $err)
                <div>{{ $err }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('portofolios.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama:</label><br>
            <input type="text" name="nama" value="{{ old('nama') }}">
        </div>
        <div>
            <label>Deskripsi:</label><br>
            <textarea name="deskripsi">{{ old('deskripsi') }}</textarea>
        </div>
        <button type="submit">Simpan</button>
        <a href="{{ route('portofolios.index') }}">Batal</a>
    </form>
</div>
@endsection
