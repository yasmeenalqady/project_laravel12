<section id="network-section" class=" hidden-section bg-cover bg-center min-h-screen flex items-center justify-center relative transition-background duration-500" 
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
<script>
  const data = {
    "Algeria": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/uae_Edited.jpg",
      cards: {
        studentReach: "105,000",
        volunteers: "1,550",
        schools: "-",
        universities: "70",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "Bahrain": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/bahrain_Edited.jpg",
      cards: {
        studentReach: "50,000",
        volunteers: "900",
        schools: "120",
        universities: "15",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "Egypt": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/Egypt_Edited.jpg",
      cards: {
        studentReach: "250,000",
        volunteers: "3,000",
        schools: "300",
        universities: "40",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "Kuwait": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/kuwait_Edited.jpg",
      cards: {
        studentReach: "40,000",
        volunteers: "1,200",
        schools: "80",
        universities: "20",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "Lebanon": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/lebanon_Edited.jpg",
      cards: {
        studentReach: "35,000",
        volunteers: "800",
        schools: "60",
        universities: "18",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "Morocco": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/morocco_Edited.jpg",
      cards: {
        studentReach: "45,000",
        volunteers: "1,000",
        schools: "75",
        universities: "22",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "Oman": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/oman_Edited.jpg",
      cards: {
        studentReach: "28,000",
        volunteers: "600",
        schools: "50",
        universities: "12",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "Palestine": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/palestine_Edited.jpg",
      cards: {
        studentReach: "15,000",
        volunteers: "300",
        schools: "40",
        universities: "10",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "Qatar": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/qatar_Edited.jpg",
      cards: {
        studentReach: "22,000",
        volunteers: "450",
        schools: "35",
        universities: "8",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "Saudi Arabia": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/saudi_Edited.jpg",
      cards: {
        studentReach: "500,000",
        volunteers: "5,000",
        schools: "700",
        universities: "120",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "Tunisia": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/tunsia_Edited.jpg",
      cards: {
        studentReach: "38,000",
        volunteers: "850",
        schools: "90",
        universities: "25",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "United Arab Emirates": {
      background: "https://injazalarab.org/cms/sites/default/files/2023-02/uae_Edited.jpg",
      cards: {
        studentReach: "80,000",
        volunteers: "1,200",
        schools: "110",
        universities: "30",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    },
    "Yemen": {
      background: "https://injazalarab.org/cms/sites/default/files/2019-11/Yemen.jpg",
      cards: {
        studentReach: "12,000",
        volunteers: "250",
        schools: "30",
        universities: "8",
        profileLink: "#",
        links: {
          main: "#",
          facebook: "#",
          instagram: "#",
          twitter: "#",
          linkedin: "#"
        }
      }
    }
  };

  // اختيار العناصر من DOM
  const section = document.getElementById('network-section');
  const select = document.getElementById('country-select');
  const cards = {
    studentReach: document.getElementById('student-reach'),
    volunteers: document.getElementById('volunteers'),
    schools: document.getElementById('schools'),
    universities: document.getElementById('universities'),
    profileLink: document.getElementById('profile-link'),
    links: {
      main: document.getElementById('link-main'),
      facebook: document.getElementById('link-facebook'),
      instagram: document.getElementById('link-instagram'),
      twitter: document.getElementById('link-twitter'),
      linkedin: document.getElementById('link-linkedin'),
    }
  };

  // تحديث البيانات في الكروت وخلفية القسم
function updateContent(country) {
  if (!data[country]) return;

  const countryData = data[country];
  // تغيير الخلفية
  section.style.backgroundImage = `url('${countryData.background}')`;

  // انزلاق من اليمين على الكروت
  const cardsContainer = document.getElementById('cards-container');
  cardsContainer.classList.remove('slide-in-right');
  void cardsContainer.offsetWidth; // force reflow
  cardsContainer.classList.add('slide-in-right');

  // انزلاق من اليسار على قائمة الدول (للشاشات الكبيرة فقط)
  const countryList = document.getElementById('country-list');
  countryList.classList.remove('slide-in-left');
  void countryList.offsetWidth; // force reflow
  countryList.classList.add('slide-in-left');

  // تحديث البيانات في الكروت
  cards.studentReach.textContent = countryData.cards.studentReach;
  cards.volunteers.textContent = countryData.cards.volunteers;
  cards.schools.textContent = countryData.cards.schools;
  cards.universities.textContent = countryData.cards.universities;
  cards.profileLink.href = countryData.cards.profileLink;

  // تحديث روابط التواصل
  cards.links.main.href = countryData.cards.links.main;
  cards.links.facebook.href = countryData.cards.links.facebook;
  cards.links.instagram.href = countryData.cards.links.instagram;
  cards.links.twitter.href = countryData.cards.links.twitter;
  cards.links.linkedin.href = countryData.cards.links.linkedin;
}


  // تمييز العنصر المختار في القائمة الكبيرة
  function highlightSelectedCountry(selectedCountry) {
    countryItems.forEach(item => {
      if (item.getAttribute('data-country') === selectedCountry) {
        item.classList.add('bg-cyan-600', 'text-white', 'font-semibold', 'w-40', 'rounded-full', 'inline-block', 'text-left');
        item.classList.remove('hover:bg-cyan-500', 'hover:text-white');
      } else {
        item.classList.remove('bg-cyan-600', 'text-white', 'font-semibold', 'w-40', 'rounded-full', 'inline-block', 'text-center');
        item.classList.add('hover:bg-cyan-500', 'hover:text-white');
      }
    });
  }

  // دعم اختيار الدول من القائمة الكبيرة (الشاشات الكبيرة)
  const countryItems = document.querySelectorAll('.country-item');
  countryItems.forEach(item => {
    item.addEventListener('click', () => {
      const country = item.getAttribute('data-country');
      updateContent(country);
      highlightSelectedCountry(country);
      select.value = country; // تزامن القائمة المنسدلة مع التحديد
    });
  });

  // عند تغيير اختيار القائمة المنسدلة (الجوال)
  select.addEventListener('change', (e) => {
    const selectedCountry = e.target.value;
    updateContent(selectedCountry);
    highlightSelectedCountry(selectedCountry);
  });

  // تعيين بيانات أول دولة عند التحميل مع تمييز العنصر المناسب
  document.addEventListener('DOMContentLoaded', () => {
    // بداية مع الدولة الأولى بالقائمة المنسدلة (أو الجزائر)
    const initialCountry = select.value || "Algeria";
    updateContent(initialCountry);
    highlightSelectedCountry(initialCountry);
  });

  //////////////////////////////////////////////////



/////////////////////////////


</script>