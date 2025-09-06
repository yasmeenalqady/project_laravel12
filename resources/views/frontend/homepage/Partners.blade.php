<style>
@keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

.animate-scroll {
  animation: scroll 20s linear infinite;
}
</style>

<section class="hidden-section py-20 px-5 md:px-20">
  <div class="text-center mb-12 ">
    <h2 class="text-3xl sm:text-4xl font-bold text-teal-600">
      شركاؤنا
    </h2>
  </div>

  <div class="overflow-hidden relative">
    <div class="slider-track flex w-max gap-12 animate-scroll">
      <!-- مجموعة الصور الأولى -->
      <div class="flex gap-12">
        <img src="{{ asset('assets/image/p1.png') }}" class="h-20 w-auto" alt="الشريك 1" />
        <img src="{{ asset('assets/image/p1.png') }}" class="h-20 w-auto" alt="الشريك 2" />
        <img src="{{ asset('assets/image/p1.png') }}" class="h-20 w-auto" alt="الشريك 3" />
        <img src="{{ asset('assets/image/p1.png') }}" class="h-20 w-auto" alt="الشريك 4" />
        <img src="{{ asset('assets/image/p1.png') }}" class="h-20 w-auto" alt="الشريك 5" />
      </div>
      <!-- مجموعة الصور الثانية -->
      <div class="flex gap-12">
        <img src="{{ asset('assets/image/p1.png') }}" class="h-20 w-auto" alt="الشريك 1" />
        <img src="{{ asset('assets/image/p1.png') }}" class="h-20 w-auto" alt="الشريك 2" />
        <img src="{{ asset('assets/image/p1.png') }}" class="h-20 w-auto" alt="الشريك 3" />
        <img src="{{ asset('assets/image/p1.png') }}" class="h-20 w-auto" alt="الشريك 4" />
        <img src="{{ asset('assets/image/p1.png') }}" class="h-20 w-auto" alt="الشريك 5" />
      </div>
    </div>
  </div>
</section>
