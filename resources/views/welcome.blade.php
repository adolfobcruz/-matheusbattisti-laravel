@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    <h1>Germany</h1>
    <img src="img/germany.jpg" alt="Germany">

    @if (10 > 5)
        <p>A condição é true.</p>
    @else
        <p>A condição é false.</p>
    @endif

    @if ($nome == 'Pedro')
        <p>O nome dele é {{ $nome }},
            ele tem {{ $age }} anos
            e trabalha como {{ $job }}.</p>
    @elseif ($nome == 'Adolfo')
        <p>O nome dele é {{ $nome }},
            ele tem {{ $age }} anos
            e trabalha como {{ $job }}.</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if ($i == 2)
            <p>O $i é 2</p>
        @endif
    @endfor

    @php
        $name = 'João';
        echo $name;
    @endphp

    {{-- Este é um comentário do Blade --}}

    @foreach ($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
    @endforeach
@endsection