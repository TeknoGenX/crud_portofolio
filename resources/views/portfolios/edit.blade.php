@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Portofolio</h2>

    @if($errors->any())
        <div style="color:red;">
            @foreach($errors->all() as $err)
                <div>{{ $err }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('portofolios.update', $portfolio->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nama:</label><br>
            <input type="text" name="nama" value="{{ old('nama', $portfolio->nama) }}">
        </div>
        <div>
            <label>Deskripsi:</label><br>
            <textarea name="deskripsi">{{ old('deskripsi', $portfolio->deskripsi) }}</textarea>
        </div>
        <button type="submit">Update</button>
        <a href="{{ route('portofolios.index') }}">Batal</a>
    </form>
</div>
@endsection
