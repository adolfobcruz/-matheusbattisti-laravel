<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link
            href="{{ asset('/css/styles.css') }}"
            rel="stylesheet">
        <script
            src="{{ asset('/js/scripts.js') }}"
            type="text/javascript">
        </script>
    </head>
    <body>
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
    </body>
</html>
