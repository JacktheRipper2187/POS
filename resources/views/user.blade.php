@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1>Profil Pengguna</h1>
    <p>ID: {{ $id }}</p>
    <p>Nama: {{ $name }}</p>
</div>
@endsection
