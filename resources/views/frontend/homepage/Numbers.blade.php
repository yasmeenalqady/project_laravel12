<section class="py-16 bg-white">
  <div class="container mx-auto px-6">
    <div
      class="flex flex-col md:flex-row justify-center items-center max-w-6xl mx-auto gap-0 relative"
      dir="rtl"
    >
      <!-- الدوائر -->
      <div class="circle opacity-0 translate-y-10 relative w-48 h-48 rounded-full bg-gradient-to-br from-cyan-400 to-teal-600 flex flex-col items-center justify-center text-white border-8 border-white shadow-xl transition-all duration-700 z-40">
        <div class="mb-4">
          <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
        </div>
        <div class="text-4xl font-bold mb-2">125,765</div>
        <div class="text-center text-sm font-bold">
          <div>طالب</div>
          <div>مستفيد</div>
        </div>
      </div>

      <!-- إضافة بقية الدوائر بنفس الطريقة -->
      <div class="circle opacity-0 translate-y-10 relative w-48 h-48 rounded-full bg-gradient-to-br from-cyan-400 to-teal-600 flex flex-col items-center justify-center text-white border-8 border-white shadow-xl transition-all duration-700 md:-ml-6 z-30 -mt-6 md:mt-0">
        <div class="mb-4">
          <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
          </svg>
        </div>
        <div class="text-4xl font-bold mb-2">7,283</div>
        <div class="text-center text-sm font-bold">
          <div>متطوع</div>
          <div>مشارك</div>
        </div>
      </div>
      
      <!-- كرري البقية بنفس التنسيق -->
    </div>
  </div>
</section>

<script>
  const circles = document.querySelectorAll('.circle');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.style.opacity = 1;
        entry.target.style.transform = "translateY(0)";
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  circles.forEach(circle => observer.observe(circle));
</script>
