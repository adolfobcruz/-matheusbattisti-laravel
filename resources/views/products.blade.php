@extends('layouts.main')

@section('title', 'Products')

@section('content')
  <h1>This is the Product page.</h1>

  @if ($search != '')
    <p>O usuário está buscando por: {{ $search }}</p>
  @endif
@endsection