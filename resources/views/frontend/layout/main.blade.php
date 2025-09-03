<!DOCTYPE html>
<html lang="" dir="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'INJAZ Al-Arab')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- ملف CSS مخصص -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="bg-white text-gray-900 font-sans">

    {{-- الهيدر --}}
    @include('frontend.layout.header')

    {{-- المحتوى --}}
    <main>
        @yield('content')
    </main>

    {{-- الفوتر --}}
    @include('frontend.layout.footer')

    <!-- ملف JS مخصص -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
