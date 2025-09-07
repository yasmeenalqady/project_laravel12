{{-- resources/views/dashboard/layout/darkmodetoggle.blade.php --}}
<button
    id="darkModeToggle"
    class="fixed bottom-4 left-4 z-50 w-10 h-10 flex items-center justify-center
           rounded-full border border-gray-300 dark:border-gray-600
           bg-gray-800 text-white shadow hover:shadow-lg
           transition-all duration-300 hover:scale-110"
    aria-label="تبديل الوضع الداكن"
    title="تبديل الوضع الداكن"
>
    <i id="darkModeIcon" class="fa-solid fa-moon text-2xl"></i>
</button>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleBtn = document.getElementById("darkModeToggle");
        const icon = document.getElementById("darkModeIcon");
        const html = document.documentElement;

        // تحميل الوضع المخزن
        if (localStorage.getItem("darkMode") === "enabled") {
            html.classList.add("dark");
            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");
        }

        toggleBtn.addEventListener("click", function () {
            if (html.classList.contains("dark")) {
                html.classList.remove("dark");
                localStorage.setItem("darkMode", "disabled");
                icon.classList.remove("fa-sun");
                icon.classList.add("fa-moon");
            } else {
                html.classList.add("dark");
                localStorage.setItem("darkMode", "enabled");
                icon.classList.remove("fa-moon");
                icon.classList.add("fa-sun");
            }
        });
    });
</script>

{{-- حمّل مكتبة Font Awesome لو مش موجودة --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
