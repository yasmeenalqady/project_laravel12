<!DOCTYPE html>
<html lang="" dir="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'INJAZ Al-Arab')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- ملف CSS مخصص -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="bg-white text-gray-900 font-sans">

    {{-- الهيدر --}}
    @include('frontend.layout.header')

    {{-- المحتوى --}}
    <main>
        @yield('content')
    </main>

    {{-- الفوتر --}}
    @include('frontend.layout.footer')

    <!-- ملف JS مخصص -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
<script>  
const canvas = document.getElementById('canvasPath');
const ctx = canvas.getContext('2d');

// نقاط المسار (زي ما عندك)
const sectionsPoints = [
  [ {x: 0.09, y: 0.7}, {x: 0.09, y:0.92} ],
  [ {x: 0.09, y:0}, {x:0.09, y:0.05}, {x:0.48, y:0.05}, {x:0.48, y:0.35}, {x:0.88, y:0.35} ],
  [ {x:0.88, y:0}, {x:0.88, y:0.35}, {x:0.46, y:0.35}, {x:0.46, y:0.5}, {x:0.05, y:0.5}, {x:0.05, y:1.5}, {x:0.46, y:1.5}, {x:0.46, y:2} ]
];

// ⚡️ دالة تتحقق إذا العرض أكبر من 768px (مو جوال)
function isDesktop() {
  return window.innerWidth >= 768;
}

// باقي الدوال زي ما عندك (getAllPoints, calcLengths, drawPath...)

function getAllPoints() {
  let allPoints = [];
  let cumulativeHeight = 0;
  const vh = window.innerHeight;
  const vw = window.innerWidth;
  for(let i=0; i<sectionsPoints.length; i++) {
    const pts = sectionsPoints[i].map(p => ({
      x: vw - p.x * vw,
      y: p.y * vh + cumulativeHeight
    }));
    allPoints = allPoints.concat(pts);
    cumulativeHeight += vh;
  }
  return allPoints;
}

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

function resize() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  if (isDesktop()) {
    drawPath(ctx, getAllPoints(), calcLengths(getAllPoints()).lengths, 0);
  } else {
    ctx.clearRect(0, 0, canvas.width, canvas.height); // مسح الكانفاس
  }
}

function onScroll() {
  if (!isDesktop()) return; // ما يشتغل على الجوال

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
</script>

</body>
</html>
