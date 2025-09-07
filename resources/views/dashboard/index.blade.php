{{-- resources/views/dashboard.blade.php --}}
@extends('dashboard.layout.app')

@section('content')
<div class="flex min-h-screen relative">

    {{-- Mobile Header --}}
    @include('dashboard.layout.MobileHeader')

    {{-- Mobile Menu --}}
    <div id="mobileMenu"
         class="fixed inset-0 z-50 bg-white dark:bg-gray-800 transition-transform transform -translate-x-full md:hidden">
        @include('dashboard.layout.mobilemenu')
    </div>

    {{-- Sidebar --}}
    <aside
        id="sidebar"
        class=" dark:bg-gray-800 h-screen transition-all duration-500 overflow-hidden hidden md:block"
        onmouseover="this.style.width='12rem'"
        onmouseleave="this.style.width='5rem'"
        style="width: 5rem;"
    >
        @include('dashboard.layout.sidebar')
    </aside>

    {{-- Main Content --}}
    <main
        id="mainContent"
        class="flex-1 pt-24 md:pt-2 px-4 relative transition-all duration-500 overflow-auto text-gray-900 dark:text-gray-100"
    >
        {{-- Header --}}
        @include('dashboard.mainpage.headermain')

        {{-- Stats Cards --}}
        @include('dashboard.mainpage.statscards')

        {{-- Dashboard Charts --}}
        @include('dashboard.mainpage.dashboardcharts')
    </main>

    {{-- Dark Mode Toggle --}}
     @include('dashboard.layout.DarkModeToggle')
</div>

{{-- Toggle Mobile Menu Script --}}
<script>
    const mobileMenu = document.getElementById('mobileMenu');
    const toggleMenuButtons = document.querySelectorAll('[data-toggle-menu]');

    toggleMenuButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            mobileMenu.classList.toggle('-translate-x-full');
        });
    });
</script>
@endsection
