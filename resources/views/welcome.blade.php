<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
<head>
    <meta charset="UTF-8">
    <title>{{ __('messages.welcome') }}</title>
</head>
<body>
    <h1>{{ __('messages.welcome') }}</h1>

    <a href="{{ url('lang/en') }}">English</a> |
    <a href="{{ url('lang/hi') }}">हिंदी</a> |
    <a href="{{ url('lang/ar') }}">عربى</a>
</body>
</html>