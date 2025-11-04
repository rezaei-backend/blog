</body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const content = document.getElementById('content');
      sidebar.classList.toggle('collapsed');
      content.classList.toggle('collapsed');
    }

    const ctx = document.getElementById('statsChart').getContext('2d');
    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['کاربران', 'پست‌ها', 'نظرات'],
        datasets: [{ data: [150, 45, 12], backgroundColor: ['#a3bffa', '#ced4da', '#74c0fc'] }]
      }
    });
  </script>
</body>
</html>