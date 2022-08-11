@extends('layouts.main')

@section('title', 'Product')

@section('content')
  @if ($id != null)
    <p>Exibindo produto id: {{ $id }}</p>
  @endif
@endsection