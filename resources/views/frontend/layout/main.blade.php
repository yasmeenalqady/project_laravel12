<!DOCTYPE html>
<html lang="" dir="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'الصفحة الرئيسية')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Cairo -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- ملف CSS مخصص -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="bg-white text-gray-900 font-sans">
<canvas id="canvasPath" style="position:fixed; top:0; left:0; z-index:10; pointer-events:none;"></canvas>

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
