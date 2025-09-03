<footer class="bg-gray-900 text-gray-300 py-16" dir="rtl">
  <div class="container mx-auto px-6 md:px-12 lg:px-24 max-w-7xl">

    <!-- Newsletter -->
    <div class="mb-16 max-w-2xl mx-auto text-center border-b border-gray-700 pb-8">
      <h3 class="text-white text-4xl font-bold mb-5">النشرة الإخبارية</h3>
      <p class="text-gray-400 mb-6 text-sm md:text-base">اشترك للحصول على آخر الأخبار والتحديثات</p>
      <form class="flex flex-col sm:flex-row gap-4 justify-center items-center" onsubmit="event.preventDefault(); alert('Thank you for subscribing!');">
        <input 
          type="email" 
          placeholder="بريدك الإلكتروني" 
          required
          class="rounded-full px-5 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#00a9b7] w-full sm:w-[400px]"
        />
        <button type="submit"
          class="bg-[#00a0af] text-white font-bold h-12 rounded-full flex items-center justify-center hover:bg-[#008d9a] transition text-center text-sm sm:text-lg font-sans w-full sm:w-[180px] md:w-[200px]"
          style="font-family: 'Inter', sans-serif;">
          <span class="leading-tight sm:leading-normal block w-full text-center">
            اشترك الآن
          </span>
        </button>
      </form>
    </div>

    <!-- Footer Columns -->
    <div class="flex flex-col md:flex-row-reverse justify-between gap-12 md:gap-0 text-right">
      
      <!-- About -->
      <div class="md:w-1/4">
        <h3 class="text-white text-2xl font-extrabold mb-6">INJAZ</h3>
        <p class="text-gray-400 leading-relaxed text-sm md:text-base">
          تمكين الشباب في منطقة الشرق الأوسط وشمال أفريقيا من خلال التعليم وريادة الأعمال وتطوير المهارات لبناء مستقبل أكثر إشراقًا.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="md:w-1/5">
        <h3 class="text-white text-xl font-semibold mb-5">روابط سريعة</h3>
        <ul class="space-y-3 text-gray-400 text-sm md:text-base">
          <li><a href="#" class="hover:text-[#00a9b7] transition">الرئيسية</a></li>
          <li><a href="#" class="hover:text-[#00a9b7] transition">البرامج</a></li>
          <li><a href="#" class="hover:text-[#00a9b7] transition">الفعاليات</a></li>
          <li><a href="#" class="hover:text-[#00a9b7] transition">من نحن</a></li>
          <li><a href="#" class="hover:text-[#00a9b7] transition">اتصل بنا</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="md:w-1/4">
        <h3 class="text-white text-xl font-semibold mb-5">تواصل معنا</h3>
        <ul class="space-y-5 text-gray-400 text-sm md:text-base">
          <li class="flex items-center gap-4 justify-end">
            <a href="mailto:info@injaz.org" class="hover:text-[#00a9b7] transition flex items-center gap-4 justify-end">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#00a9b7]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 0v8a2 2 0 002 2h14a2 2 0 002-2V8" />
              </svg>
              info@injaz.org
            </a>
          </li>
          <li class="flex items-center gap-4 justify-end">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#00a9b7]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l3 7-2 2-4 3h6" />
            </svg>
            <span>+123 456 7890</span>
          </li>
          <li class="flex items-center gap-4 justify-end">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#00a9b7]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 16v-4a2 2 0 012-2h3a2 2 0 012 2v4" />
            </svg>
            <span>123 شارع إنجاز، المدينة، الدولة</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Social Icons -->
    <div class="flex flex-wrap justify-center gap-2 mt-16 text-3xl">
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

    <!-- Bottom Note -->
    <div class="mt-5 border-t border-gray-800 pt-8 text-center text-gray-500 text-sm select-none">
      &copy; 2025 INJAZ. جميع الحقوق محفوظة.
    </div>
  </div>
</footer>
