<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    @livewireStyles
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><u>Livewire 2.0</u></h1>
                {{-- @livewire('counter') --}}
                {{-- <livewire:counter />
                <livewire:databind></livewire:databind> --}}
                {{-- @livewire('parentcomponent') --}}
                @livewire('count')
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    @livewireScripts
    <x-livewire-alert::scripts />
</body>

</html>
