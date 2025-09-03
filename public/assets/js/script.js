    // حركة الظهور
    const fadeElements = document.querySelectorAll('.fade-up');

    const fadeObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, { threshold: 0.2 });

    fadeElements.forEach(el => fadeObserver.observe(el));

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


/// زر القائمة ------------------------------------------------------------------------------------

 // في السكريبت
const menuBtn = document.getElementById('menuBtn');
const overlayMenu = document.getElementById('overlayMenu');
const closeBtn = document.getElementById('closeBtn');

menuBtn.addEventListener('click', () => {
  overlayMenu.classList.remove('hidden');
  requestAnimationFrame(() => {
    overlayMenu.classList.add('show');
  });
  // فقط دوران زر الفتح (menuBtn)
  menuBtn.style.transform = 'rotate(180deg)';
});

closeBtn.addEventListener('click', () => {
  overlayMenu.classList.remove('show');
  // دوران زر الفتح إلى الأصل
  menuBtn.style.transform = 'rotate(0deg)';
  closeBtn.style.transform = 'rotate(0deg)';

  overlayMenu.addEventListener('transitionend', () => {
    if (!overlayMenu.classList.contains('show')) {
      overlayMenu.classList.add('hidden');
    }
  }, { once: true });
  
  // دوران زر الإغلاق (closeBtn) عند الضغط عليه
  closeBtn.style.transform = 'rotate(180deg)';
});

//---------------------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", () => {
  const leftText = document.getElementById("left-text");
  const rightText = document.getElementById("right-text");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.remove("opacity-0", "-translate-y-12", "translate-x-12");
          entry.target.classList.add("opacity-100", "translate-y-0", "translate-x-0");
        }
      });
    },
    { threshold: 0.3 }
  );

  observer.observe(leftText);
  observer.observe(rightText);
});



//---------------------------------------------- circle--------------------------------------------

  document.addEventListener("DOMContentLoaded", function () {
    const circles = document.querySelectorAll(".circle");

    let observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            circles.forEach((circle, i) => {
              if (circle === entry.target) {
                setTimeout(() => {
                  circle.classList.add("visible");
                }, i * 300);
              }
            });
          } else {
            entry.target.classList.remove("visible");
          }
        });
      },
      { threshold: 0.5 }
    );

    circles.forEach((circle) => observer.observe(circle));
  });
//-------------------------------------------------------------------------

  document.addEventListener("DOMContentLoaded", () => {
    const section = document.getElementById("history-section");
    const title = document.getElementById("history-title");
    const line = document.getElementById("history-line");
    const timelinePoints = document.querySelectorAll(".timeline-point");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // إظهار القسم والعنوان
            section.classList.remove("opacity-0", "translate-y-6");
            section.classList.add("opacity-100", "translate-y-0");

            title.classList.remove("opacity-0", "translate-y-6");
            title.classList.add("opacity-100", "translate-y-0");

            // إظهار الخط الأفقي
            line.classList.remove("opacity-0");
            line.classList.add("opacity-100");

            // إظهار نقاط التايملاين بحركة متتابعة
            timelinePoints.forEach((point, index) => {
              setTimeout(() => {
                point.classList.remove("opacity-0", "translate-y-6");
                point.classList.add("opacity-100", "translate-y-0");
              }, index * 200); // تأخير 200ms بين كل نقطة والتي تليها
            });
          }
        });
      },
      { threshold: 0.3 }
    );

    observer.observe(section);
  });
  ///////////////////////////////////counrty
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
  
const canvas = document.getElementById('canvasPath');
const ctx = canvas.getContext('2d');

// نقاط كل قسم (إحداثيات نسبية بالنسبة للشاشة، مع إزاحة لليسار)
const sectionsPoints = [
  [ {x: 0.09, y: 0.7}, {x: 0.09, y:0.92} ], // القسم الأول
  [ {x: 0.09, y:0}, {x:0.09, y:0.05}, {x:0.48, y:0.05}, {x:0.48, y:0.35}, {x:0.88, y:0.35} ],
  [ {x:0.88, y:0}, {x:0.88, y:0.35}, {x:0.46, y:0.35}, {x:0.46, y:0.5}, {x:0.05, y:0.5}, {x:0.05, y:1.5}, {x:0.46, y:1.5}, {x:0.46, y:2} ]
];

// تحويل النقاط إلى إحداثيات فعلية على الكانفاس
function getAllPoints() {
  let allPoints = [];
  let cumulativeHeight = 0;
  const vh = window.innerHeight;
  const vw = window.innerWidth;
  for(let i=0; i<sectionsPoints.length; i++) {
    const pts = sectionsPoints[i].map(p => ({
      x: vw - p.x * vw, // RTL مع الإزاحة
      y: p.y * vh + cumulativeHeight
    }));
    allPoints = allPoints.concat(pts);
    cumulativeHeight += vh;
  }
  return allPoints;
}

// حساب أطوال المقاطع
function calcLengths(points) {
  const lengths = [];
  let totalLength = 0;
  for (let i = 1; i < points.length; i++) {
    const dx = points[i].x - points[i - 1].x;
    const dy = points[i].y - points[i - 1].y;
    const len = Math.sqrt(dx * dx + dy * dy);
    lengths.push(len);
    totalLength += len;
  }
  return { lengths, totalLength };
}

// رسم المسار
function drawPath(ctx, points, lengths, lengthToDraw) {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.beginPath();

  const adjustedPoints = points.map(p => ({ x: p.x, y: p.y - window.scrollY }));
  if (adjustedPoints.length < 2) return;

  const radius = 60;
  let currentLen = 0;
  ctx.moveTo(adjustedPoints[0].x, adjustedPoints[0].y);

  for (let i = 1; i < adjustedPoints.length; i++) {
    const p0 = adjustedPoints[i - 1];
    const p1 = adjustedPoints[i];
    const segLen = lengths[i - 1];

    if (currentLen + segLen < lengthToDraw) {
      if (i < adjustedPoints.length - 1) {
        const p2 = adjustedPoints[i + 1];
        ctx.arcTo(p1.x, p1.y, p2.x, p2.y, radius);
      } else {
        ctx.lineTo(p1.x, p1.y);
      }
      currentLen += segLen;
    } else {
      const remain = lengthToDraw - currentLen;
      const ratio = remain / segLen;
      const x = p0.x + (p1.x - p0.x) * ratio;
      const y = p0.y + (p1.y - p0.y) * ratio;
      ctx.lineTo(x, y);
      break;
    }
  }

  ctx.lineJoin = 'round';
  ctx.lineCap = 'round';
  ctx.lineWidth = 10;
  ctx.strokeStyle = "#00a0af";
  ctx.stroke();
}

// إعادة ضبط حجم الكانفاس
function resize() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  // يبدأ مخفي عند كل تغيير حجم
  drawPath(ctx, getAllPoints(), calcLengths(getAllPoints()).lengths, 0);
}

// التمرير
function onScroll() {
  const points = getAllPoints();
  const { lengths, totalLength } = calcLengths(points);

  let lengthToDraw = 0;
  if(window.scrollY > 0){
    const scrollPos = window.scrollY + window.innerHeight;
    lengthToDraw = Math.min(totalLength, scrollPos * 1.5);
  }

  drawPath(ctx, points, lengths, lengthToDraw);
}

// الأحداث
window.addEventListener('resize', () => {
  resize();
  onScroll();
});
window.addEventListener('scroll', onScroll);

// التنفيذ الأولي
resize();