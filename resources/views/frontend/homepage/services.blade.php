<section id="network-section" class="bg-cover bg-center min-h-screen flex items-center justify-center relative transition-background duration-500" 
    style="background-image: url('https://images.unsplash.com/photo-1496307653780-42ee777d4833?auto=format&fit=crop&w=1470&q=80');">
    
    <!-- خلفية شفافة -->
    <div class="absolute inset-0 bg-black bg-opacity-60 z-0"></div>

    <!-- المحتوى -->
    <div class="relative z-10 container mx-auto px-4 md:px-12 py-16 grid grid-cols-1 md:grid-cols-2 gap-10 items-start" dir="rtl">

      <!-- اليسار: قائمة الدول -->
      <div class="text-white flex flex-col">

        <h2 class="text-4xl md:text-4xl font-bold mb-6 leading-tight">
          عبر شبكة<br />
          آخذة في النمو
        </h2>

        <!-- قائمة الدول للشاشات المتوسطة فما فوق -->
        <ul id="country-list" class="hidden md:block space-y-[.5px] text-lg md:text-[16px] font-medium max-w-xs">
          <li data-country="Algeria" class="country-item cursor-pointer rounded-full px-4 py-1 text-white font-semibold inline-block w-[160px] text-center bg-cyan-600">الجزائر</li>
          <li data-country="Bahrain" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">البحرين</li>
          <li data-country="Egypt" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">مصر</li>
          <li data-country="Kuwait" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">الكويت</li>
          <li data-country="Lebanon" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">لبنان</li>
          <li data-country="Morocco" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">المغرب</li>
          <li data-country="Oman" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">عُمان</li>
          <li data-country="Palestine" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">فلسطين</li>
          <li data-country="Qatar" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">قطر</li>
          <li data-country="Saudi Arabia" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">السعودية</li>
          <li data-country="Tunisia" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">تونس</li>
          <li data-country="United Arab Emirates" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">الإمارات</li>
          <li data-country="Yemen" class="country-item cursor-pointer rounded-full px-4 py-1 inline-block w-[160px] text-center transition-all duration-300 hover:bg-cyan-600">اليمن</li>
        </ul>

        <!-- قائمة منسدلة للجوال -->
        <select id="country-select" class="block md:hidden bg-cyan-600 text-white rounded-full px-4 py-2 text-lg font-semibold" aria-label="اختر الدولة">
          <option>الجزائر</option>
          <option>البحرين</option>
          <option>مصر</option>
          <option>الكويت</option>
          <option>لبنان</option>
          <option>المغرب</option>
          <option>عُمان</option>
          <option>فلسطين</option>
          <option>قطر</option>
          <option>السعودية</option>
          <option>تونس</option>
          <option>الإمارات</option>
          <option>اليمن</option>
        </select>

      </div>

      <!-- اليمين: الكروت -->
      <div id="cards-container" class="flex flex-col mt-4 md:mt-20 space-y-2 md:pt-2">
        <div class="flex h-20">
          <div style="background: linear-gradient(90deg, #1a7588, #00a0af)" class="text-white px-6 py-4 rounded-l-lg w-1/2 md:w-1/3 text-xl flex items-center">الطلاب المستفيدون</div>
          <div id="student-reach" class="bg-white text-cyan-800 px-6 py-4 rounded-r-lg w-1/2 text-left font-bold text-2xl flex items-center justify-end">105,000</div>
        </div>
        <div class="flex h-20">
          <div style="background: linear-gradient(90deg, #1a7588, #00a0af)" class="text-white px-6 py-4 rounded-l-lg w-1/2 md:w-1/3 text-xl flex items-center">المتطوعون</div>
          <div id="volunteers" class="bg-white text-cyan-800 px-6 py-4 rounded-r-lg w-1/2 text-left font-bold text-2xl flex items-center justify-end">1,550</div>
        </div>
        <div class="flex h-20">
          <div style="background: linear-gradient(90deg, #1a7588, #00a0af)" class="text-white px-6 py-4 rounded-l-lg w-1/2 md:w-1/3 text-xl flex items-center">المدارس</div>
          <div id="schools" class="bg-white text-cyan-800 px-6 py-4 rounded-r-lg w-1/2 text-left font-bold text-2xl flex items-center justify-end">-</div>
        </div>
        <div class="flex h-20">
          <div style="background: linear-gradient(90deg, #1a7588, #00a0af)" class="text-white px-6 py-4 rounded-l-lg w-1/2 md:w-1/3 text-xl flex items-center">الجامعات</div>
          <div id="universities" class="bg-white text-cyan-800 px-6 py-4 rounded-r-lg w-1/2 text-left font-bold text-2xl flex items-center justify-end">70</div>
        </div>
        <div class="flex h-20">
          <div style="background: linear-gradient(90deg, #1a7588, #00a0af)" class="text-white px-6 py-4 rounded-l-lg w-1/2 md:w-1/3 text-xl flex items-center">الملف التعريفي</div>
          <div id="profile" class="bg-white text-cyan-800 px-6 py-4 rounded-r-lg w-1/2 text-left font-bold text-2xl flex items-center justify-end underline">
            <a href="#" id="profile-link" target="_blank" rel="noopener noreferrer">عرض الملف</a>
          </div>
        </div>
        <div class="flex h-20">
          <div style="background: linear-gradient(90deg, #1a7588, #00a0af)" class="text-white px-6 py-4 rounded-l-lg w-1/2 md:w-1/3 font-bold text-2xl flex items-center">روابط</div>
          <div id="links" class="bg-white text-cyan-800 px-6 py-4 rounded-r-lg w-1/2 flex items-center justify-end gap-5">
            <a href="#" id="link-main" target="_blank" rel="noopener noreferrer"><img src="https://img.icons8.com/ios-filled/24/000000/link--v1.png" alt="الرابط"/></a>
            <a href="#" id="link-facebook" target="_blank" rel="noopener noreferrer"><img src="https://img.icons8.com/ios-filled/24/000000/facebook-new.png" alt="فيسبوك"/></a>
            <a href="#" id="link-instagram" target="_blank" rel="noopener noreferrer"><img src="https://img.icons8.com/ios-filled/24/000000/instagram-new.png" alt="إنستغرام"/></a>
            <a href="#" id="link-twitter" target="_blank" rel="noopener noreferrer"><img src="https://img.icons8.com/ios-filled/24/000000/twitter--v1.png" alt="تويتر"/></a>
            <a href="#" id="link-linkedin" target="_blank" rel="noopener noreferrer"><img src="https://img.icons8.com/ios-filled/24/000000/linkedin.png" alt="لينكدإن"/></a>
          </div>
        </div>
      </div>

    </div>
  </section>
