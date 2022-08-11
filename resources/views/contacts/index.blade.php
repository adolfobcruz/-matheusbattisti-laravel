@extends('layouts.main')

@section('title', 'Index - HDC Contact')

@section('content')
  <h1>Lista um contato</h1>

  @if ($nome == 'Pedro')
    <p>O nome dele é {{ $nome }},
        ele tem {{ $age }} anos
        e trabalha como {{ $job }}.</p>
  @elseif ($nome == 'Adolfo')
    <p>O nome dele é {{ $nome }},
        ele tem {{ $age }} anos
        e trabalha como {{ $job }}.</p>
  @endif
@endsection