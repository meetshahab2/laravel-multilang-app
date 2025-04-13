@php
    $locale = app()->getLocale();
 
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
<head>
    <title>about</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
           
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about', ['locale' => $locale]) }}">about</a>

            </li>
           
          </ul>
        </div>
      </nav>
    <h1>{{ __('about.title') }}</h1>

    <h5>{{ __('about.heading') }}</h5>
</body>
</html>