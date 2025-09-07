<!-- resources/views/components/projects-chart.blade.php -->

<div class="w-full h-80">
  <canvas id="projectsChart" class="w-full h-full"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // دالة لجلب المشاريع من localStorage مع معالجة الأخطاء
  function getProjectsFromLocalStorage() {
    const stored = localStorage.getItem('projects');
    if (!stored) return [];
    try {
      return JSON.parse(stored);
    } catch (e) {
      console.error('خطأ في قراءة بيانات المشاريع من التخزين المحلي:', e);
      return [];
    }
  }

  // دالة لحساب عدد المشاريع التي تبدأ في كل شهر
  function countProjectsByMonth(projects) {
    const monthLabels = [
      'يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو',
      'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'
    ];
    const counts = new Array(12).fill(0);

    projects.forEach(p => {
      if (p.startDate) {
        const month = new Date(p.startDate).getMonth();
        counts[month]++;
      }
    });

    return { monthLabels, counts };
  }

  document.addEventListener('DOMContentLoaded', function() {
    const projects = getProjectsFromLocalStorage();
    const { monthLabels, counts } = countProjectsByMonth(projects);

    const ctx = document.getElementById('projectsChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: monthLabels,
        datasets: [{
          label: 'عدد المشاريع حسب شهر البداية',
          data: counts,
          borderColor: '#00a0af',
          backgroundColor: 'rgba(0, 160, 175, 0.2)',
          fill: true,
          tension: 0.3
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true,
            stepSize: 1,
            title: {
              display: true,
              text: 'عدد المشاريع'
            }
          },
          x: {
            title: {
              display: true,
              text: 'الشهر'
            }
          }
        }
      }
    });
  });
</script>
