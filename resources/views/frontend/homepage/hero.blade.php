

<!-- Hero Section -------------------------------------------1---------------------------------->
<section class="relative h-screen text-white overflow-hidden" dir="rtl">
  <!-- Video Background -->
  <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
    <source src="https://injazalarab.org/_nuxt/videos/video.2eb28ff.mp4" type="video/mp4" />
    متصفحك لا يدعم الفيديو.
  </video>

  <!-- Dark overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>

  <!-- Logo -->
  <div class="absolute top-4 right-4 z-[9999] mr-1 sm:mr-4 mt-1">
    <img
      src="https://injazalarab.org/_nuxt/img/logo.a19ce7d.png"
      alt="شعار INJAZ"
      class="h-10 w-25 sm:h-[60px] sm:w-[250px]"
    />
  </div>

  <!-- Hero Content -->
  <div class="absolute inset-0 z-20 flex flex-col sm:flex-row sm:items-start sm:justify-start px-4 gap-4 items-center justify-center text-center sm:text-right sm:bottom-20 sm:right-20 sm:inset-auto">

    <div class="pt-2 hidden md:block">
      <button id="btn" class="relative w-12 h-12 md:mt-20 rounded-full bg-[#00a0af] flex items-center justify-center text-white hover:bg-[#008d9a] transition">
        <img 
          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAWCAYAAAAmaHdCAAABGklEQVQ4jdWUMU4CURRFz4AJWrmDKUApKOxoZgduwC24Dk0s2IAFCZ2VnVPQGFsLZQnWlAQKE4LBY+HTkEmGGShMvM3Lf+/e839+fj4AaqreqXPraR7+FCBRT4Fn4Bi4B96o1glwASyADDVXP9SsRvhXaha5HHWp5rsANkC5umwALWBWYmqrY7VdwpkBrUbFZmfAedRSVUFq6U8gn4W6F+QJuIxaqoNtwyRJ3oFhxUb/6GJrQ9Z8v9p91ALWDWAKdPeEdIEp6ij+iM4uabUTuRFqPxYPalITkIRftf/THEZjUAUKwCD8w83BkfoYg7HaKwH0Ym74D4uGpnqjrsI0UW/Vq6iT6K/C19x23FS9Vl/VRQQX6kv002LmC1STO77xU5VDAAAAAElFTkSuQmCC" 
          alt="أيقونة الفأرة" 
          class="w-4 h-8 object-contain z-20"
        />
      </button>
    </div>

    <!-- Text block -->
    <div class="-md:mt-2 mt-20 flex flex-col gap-4 items-center sm:items-start">
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-3xl leading-tight">
        تمكين عقول الشباب في منطقة الشرق الأوسط وشمال أفريقيا
      </h1>

      <a
        href="#"
        class="bg-[#00a0af] text-white font-bold h-12 w-[180px] rounded-full md:mt-2 mt-20
               flex items-center justify-center gap-2 hover:bg-[#008d9a] transition text-center text-lg font-sans"
        style="font-family: 'Inter', sans-serif;"
      >
        اكتشف المزيد &gt;
      </a>
    </div>
  </div>  

  <!-- Top-Right Buttons -->
  <div class="absolute top-4 left-4 flex flex-row items-center gap-3 md:gap-6 sm:gap-4 z-20 ml-1 sm:ml-4 md:mt-4">
    <a
      href="#"
      class="bg-[#00a0af] text-white font-bold h-12 w-[110px] sm:w-[180px] md:w-[200px] max-w-[210px] rounded-full flex items-center justify-center gap-1 sm:gap-2 hover:bg-[#008d9a] transition text-center text-sm sm:text-lg font-sans"
      style="font-family: 'Inter', sans-serif;"
    >
      <img
        src="https://injazalarab.org/_nuxt/img/compus-arrow.7f03aae.svg"
        alt="سهم"
        class="w-5 h-5 sm:w-7 sm:h-7"
      />
      <span class="leading-tight sm:leading-normal block sm:inline">
        اكتشف<br class="sm:hidden" /> المزيد
      </span>
    </a>

    <button
      id="menuBtn"
      class="w-12 h-12 bg-white text-[#00a0af] text-2xl font-bold rounded-full flex items-center justify-center shadow hover:bg-gray-100 transition"
      aria-label="فتح القائمة"
    >
      &#9776;
    </button>
  </div>
</section>

<!-- Overlay Menu -------------------------------------------2---------------------------------------->
<div
  id="overlayMenu"
  class="fixed inset-0 bg-black bg-opacity-90 z-50 flex flex-col justify-center items-center text-white text-2xl space-y-6 hidden"
  dir="rtl"
>
  <!-- Close Button -->
  <button
    id="closeBtn"
    class="fixed top-4 left-4 w-12 h-12 bg-transparent border border-white text-white text-2xl font-bold rounded-full flex items-center justify-center hover:bg-white hover:text-[#00a0af] z-50 ml-1 sm:ml-4 md:mt-4"
    aria-label="إغلاق القائمة"
  >
    &times;
  </button>

  <!-- Menu Items -->
  <div class="flex flex-col text-center space-y-2 mt-20 text-xl max-w-xs sm:max-w-md">
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">قصتنا</p>
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">نموذجنا</p>
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">التأثير</p>
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">مبادرات الشركاء</p>
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">الشراكات والقيادة</p>
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">احتفال رواد الأعمال الشباب</p>
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">شبكتنا</p>
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">التقديرات الإقليمية والعالمية</p>
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">متابعة الشباب</p>
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">النشرة</p>
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">مكتبتنا</p>
    <p class="hover:text-teal-400 hover:text-2xl transition-all duration-300 cursor-pointer">حرم إنجاز</p>
  </div>

  <!-- Social Icons -->
  <div class="flex flex-wrap justify-center gap-1 mt-8 text-3xl">
    <a href="#" title="Facebook" class="hover-animated rounded-full text-[#00a9b7] w-12 h-12 flex items-center justify-center transition-all duration-300 ease-in-out">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a href="#" title="Twitter" class="hover-animated rounded-full text-[#00a9b7] w-12 h-12 flex items-center justify-center transition-all duration-300 ease-in-out">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="#" title="LinkedIn" class="hover-animated rounded-full text-[#00a9b7] w-12 h-12 flex items-center justify-center transition-all duration-300 ease-in-out">
      <i class="fab fa-linkedin-in"></i>
    </a>
    <a href="#" title="Instagram" class="hover-animated rounded-full text-[#00a9b7] w-12 h-12 flex items-center justify-center transition-all duration-300 ease-in-out">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="#" title="YouTube" class="hover-animated rounded-full text-[#00a9b7] w-12 h-12 flex items-center justify-center transition-all duration-300 ease-in-out">
      <i class="fab fa-youtube"></i>
    </a>
  </div>
</div>
