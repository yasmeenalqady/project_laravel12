<section class=" hidden-section relative bg-white py-16 px-4 sm:px-6 lg:px-8" dir="rtl">
  <div class="max-w-7xl mx-auto">

    <!-- العنوان الرئيسي -->
    <div class="text-center mb-12  z-[9999]">
      <h2 class="text-3xl sm:text-4xl font-bold text-teal-600">
        20 عاماً من إنجاز
      </h2>
    </div>

    <!-- شبكة الإحصائيات -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6" id="stats-container">

      <!-- عنصر إحصائي -->
      <div class="bg-gray-50 rounded-xl shadow-sm p-4 text-center ">
        <div class="text-2xl sm:text-3xl font-bold text-teal-600 counter" data-target="4000">0</div>
        <div class="text-xs sm:text-sm text-gray-600 mt-1 font-bold">المدارس</div>
      </div>

      <div class="bg-gray-50 rounded-xl shadow-sm p-4 text-center ">
        <div class="text-2xl sm:text-3xl font-bold text-teal-600 counter" data-target="426">0</div>
        <div class="text-xs sm:text-sm text-gray-600 mt-1 font-bold">الجامعات</div>
      </div>

      <div class="bg-gray-50 rounded-xl shadow-sm p-4 text-center ">
        <div class="text-2xl sm:text-3xl font-bold text-teal-600 counter" data-target="100000">0</div>
        <div class="text-xs sm:text-sm text-gray-600 mt-1 font-bold">المتطوعون</div>
      </div>

      <div class="bg-gray-50 rounded-xl shadow-sm p-4 text-center ">
        <div class="text-2xl sm:text-3xl font-bold text-teal-600">+400</div>
        <div class="text-xs sm:text-sm text-gray-600 mt-1 leading-tight font-bold">
          شركاء<br>القطاع الخاص
        </div>
      </div>

      <div class="bg-gray-50 rounded-xl shadow-sm p-4 text-center ">
        <div class="text-2xl sm:text-3xl font-bold text-teal-600">12</div>
        <div class="text-xs sm:text-sm text-gray-600 mt-1 leading-tight font-bold">
          شراكات<br>وزارة التعليم
        </div>
      </div>

      <div class="bg-gray-50 rounded-xl shadow-sm p-4 text-center ">
        <div class="text-2xl sm:text-3xl font-bold text-teal-600 counter" data-target="7000000">0</div>
        <div class="text-xs sm:text-sm text-gray-600 mt-1 font-bold">الطلاب</div>
      </div>

    </div>
  </div>
</section>
<script>
  // العداد
    const counters = document.querySelectorAll('.counter');

    const animateCounter = (el, target) => {
      let current = 0;
      const increment = target / 100;
      const interval = setInterval(() => {
        current += increment;
        if (current >= target) {
          el.textContent = target.toLocaleString();
          clearInterval(interval);
        } else {
          el.textContent = Math.floor(current).toLocaleString();
        }
      }, 20);
    };

    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseInt(el.getAttribute('data-target'));
          animateCounter(el, target);
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => counterObserver.observe(counter));

</script>