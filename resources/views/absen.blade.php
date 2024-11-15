@extends('layouts.app')

@section('content')
    <h1>Absensi</h1>
    <form action="{{ route('absen') }}" method="POST">
        @csrf
        <label for="lokasi">Lokasi:</label>
        <input type="text" name="lokasi" id="lokasi" placeholder="Masukkan lokasi">
        <button type="submit">Absen</button>
    </form>
@endsection
