<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sewol Ferry</title>

{{-- Favicon --}}

<!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>

<div class="container">
    <header class="group nav-container">
        <div class="nav">
            <a href="{{ route('timeline') }}"
               class="nav-link {{ Route::currentRouteName() == 'timeline' ? 'active' : '' }}">Timeline</a>
            <a href="{{ route('messages') }}"
               class="nav-link {{ Route::currentRouteName() == 'messages' ? 'active' : '' }}">Messages</a>
            <a href="{{ route('sources') }}" class="nav-link" {{ Route::currentRouteName() == 'sources' ? 'active' : '' }}>Sources</a>
        </div>
    </header>

    <div class="body">
        @yield('content')
    </div>
</div>

{{-- Javascript Libraries --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

@yield('scripts')

</body>
</html>
