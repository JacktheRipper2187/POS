@extends('layouts.app')

@section('content')
@php
    $categories = [
        'food-beverage' => 'Food & Beverage',
        'beauty-health' => 'Beauty & Health',
        'home-care' => 'Home Care',
        'baby-kid' => 'Baby & Kid'
    ];
    $categoryName = $categories[$slug] ?? 'Unknown Category';
@endphp

<div class="container text-center mt-5">
    <h1>Products - {{ $categoryName }}</h1>
    <p>Menampilkan daftar produk untuk kategori <b>{{ $categoryName }}</b>.</p>
</div>
@endsection
