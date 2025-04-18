@php
    $locale = app()->getLocale();
 
@endphp
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
           
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about', ['locale' => $locale]) }}">About</a>

            </li>
           
          </ul>
        </div>
      </nav>
    <h1>{{ __('messages.welcome') }}</h1>

    <a href="{{ url('en') }}">English</a> |
    <a href="{{ url('hi') }}">हिंदी</a> |
    <a href="{{ url('ar') }}">عربى</a>
</body>
</html>