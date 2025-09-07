<div class="p-6">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- مخطط نشاط المستخدمين (وهمي) -->
    <div class="bg-white dark:bg-gray-800 p-4 rounded shadow h-96">
      <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-200">
        نشاط المستخدمين الشهري (وهمي)
      </h2>
      <canvas id="userActivityChart"></canvas>
    </div>

    <!-- مخطط حالة المشاريع (API) -->
    <div class="bg-white dark:bg-gray-800 p-4 rounded shadow h-96">
      <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-200">
        توزيع المشاريع حسب الحالة
      </h2>
      <canvas id="projectStatusChart"></canvas>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', async () => {
  // 1️⃣ مخطط نشاط المستخدمين الوهمي
  const ctxUser = document.getElementById('userActivityChart').getContext('2d');
  new Chart(ctxUser, {
    type: 'line',
    data: {
      labels: ['يناير','فبراير','مارس','أبريل','مايو','يونيو','يوليو','أغسطس'],
      datasets: [{
        label: 'نشاط المستخدمين',
        data: [5,8,6,12,9,15,10,13],
        borderColor: '#00a0af',
        backgroundColor: 'rgba(0,160,175,0.2)',
        fill: true,
        tension: 0.4,
        pointRadius: 5,
        pointBackgroundColor: '#00a0af'
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: { y: { beginAtZero: true, title: { display: true, text: 'عدد المستخدمين' } } }
    }
  });

  // 2️⃣ مخطط حالة المشاريع من API
  const ctxStatus = document.getElementById('projectStatusChart').getContext('2d');
  try {
    const res = await fetch('/api/dashboard');
    const data = await res.json();
    const labels = data.projects_by_status.map(s => s.status);
    const counts = data.projects_by_status.map(s => s.total);

    new Chart(ctxStatus, {
      type: 'doughnut',
      data: {
        labels: labels,
        datasets: [{
          label: 'حالة المشاريع',
          data: counts,
          backgroundColor: ['#10B981','#3B82F6','#F59E0B','#EF4444'],
          hoverOffset: 30
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { position: 'bottom' } }
      }
    });
  } catch (error) {
    console.error('خطأ في جلب البيانات:', error);
  }
});
</script>
