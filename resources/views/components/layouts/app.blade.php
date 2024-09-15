<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body>
<div class="min-h-screen min-w-screen bg-gray-50">
    <div class="max-w-md mx-auto pt-10 ">
        <div class="bg-white p-4 rounded-xl shadow-md">
            {{ $slot }}
        </div>

    </div>
</div>
</body>
</html>
