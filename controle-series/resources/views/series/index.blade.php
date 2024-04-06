<x-layout title="series">
    <a href="/series/criar">Adicionar</a>
    <ul>
        @foreach ($series as $serie)
        <li>{{ $serie }}</li>
        @endforeach
    </ul>
    {{-- <script>
        const series = {{ Js::from($series) }};
    </script> --}}
</x-layout>

{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
</head>
<body>
    @foreach ($series as $serie):
    <li>{{ $serie }}</li>
    @endforeach
</body>
</html>
--}}
