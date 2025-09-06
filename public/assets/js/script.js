

    


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
   