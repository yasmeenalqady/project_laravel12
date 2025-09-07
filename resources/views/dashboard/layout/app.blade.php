<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

    <!-- Chart.js (إذا أردتي) -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

    <title>@yield('title', 'لوحة التحكم')</title>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#00a0af',
                        secondary: '#F2672A',
                    },
                    fontFamily: {
                        sans: ['Cairo', 'sans-serif'],
                    },
                    transitionProperty: {
                        'width-margin': 'width, margin',
                    },
                },
            },
        };
    </script>

    @stack('head')
</head>
<body dir="rtl"  class="bg-gray-100 dark:bg-gray-900 font-sans transition-colors duration-500">

    {{-- المحتوى الرئيسي --}}
    @yield('content')
   
    {{-- سكريبتات إضافية --}}
    @stack('scripts')
</body>
</html>
