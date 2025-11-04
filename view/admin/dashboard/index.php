<?php 
require_once "../layouts/header.php";
?>
<body>
  <div class="sidebar" id="sidebar">
    <button class="toggle-btn" onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>
    <h4 class="text-center text-white mb-4"><i class="fas fa-tachometer-alt me-2"></i> <span class="sidebar-title">پنل ادمین</span></h4>
    <a href="index.html"><i class="fas fa-home me-2"></i> <span>صفحه اصلی</span></a>
    <a href="settings.html"><i class="fas fa-cog me-2"></i> <span>تنظیمات</span></a>
    <a href="tables.html"><i class="fas fa-table me-2"></i> <span>جدول‌ها</span></a>
    <a href="profile.html"><i class="fas fa-user me-2"></i> <span>پروفایل</span></a>
    <a href="forms.html"><i class="fas fa-file-alt me-2"></i> <span>فرم‌ها</span></a>
    <a href="#"><i class="fas fa-sign-out-alt me-2"></i> <span>خروج</span></a>
  </div>

  <div class="content" id="content">
    <div class="header d-flex justify-content-between align-items-center mb-4">
      <div class="d-flex align-items-center">
        <div class="dropdown me-3">
          <button class="btn btn-light rounded-circle" data-bs-toggle="dropdown">
            <i class="fas fa-user"></i>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="profile.html"><i class="fas fa-user-circle me-2"></i> پروفایل</a></li>
            <li><a class="dropdown-item" href="settings.html"><i class="fas fa-cog me-2"></i> تنظیمات</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> خروج</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-light rounded-circle position-relative" data-bs-toggle="dropdown">
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill bg-danger">5</span>
          </button>
          <ul class="dropdown-menu notification-list">
            <li class="dropdown-item"><i class="fas fa-info-circle me-2 text-primary"></i> کاربر جدید - 1403/02/09</li>
            <li class="dropdown-item"><i class="fas fa-exclamation-circle me-2 text-warning"></i> خطا - 1403/02/08</li>
            <li class="dropdown-item"><i class="fas fa-check-circle me-2 text-success"></i> پرداخت - 1403/02/07</li>
          </ul>
        </div>
      </div>
      <div class="input-group w-25">
        <input type="text" class="form-control" placeholder="جستجو...">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
    </div>

    <h3 class="mb-4 text-center">خوش آمدید به پنل مدیریت!</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="card p-3 mb-4">
          <h5><i class="fas fa-users me-2 text-primary"></i> کاربران فعال</h5>
          <p class="display-6">150</p>
          <a href="tables.html" class="btn btn-primary">مشاهده کاربران</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 mb-4">
          <h5><i class="fas fa-file-alt me-2 text-primary"></i> پست‌های اخیر</h5>
          <p class="display-6">45</p>
          <a href="tables.html" class="btn btn-primary">مدیریت پست‌ها</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 mb-4">
          <h5><i class="fas fa-comment me-2 text-primary"></i> نظرات جدید</h5>
          <p class="display-6">12</p>
          <a href="comments.html" class="btn btn-primary">بررسی نظرات</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card p-3 mb-4">
          <h5><i class="fas fa-chart-pie me-2 text-primary"></i> آمار کلی</h5>
          <canvas id="statsChart"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card p-3 mb-4">
          <h5><i class="fas fa-bell me-2 text-primary"></i> اعلان‌های اخیر</h5>
          <ul class="list-group">
            <li class="list-group-item">کاربر جدید ثبت شد <span class="badge bg-info">جدید</span></li>
            <li class="list-group-item">پست تأیید شد</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>


<?php 
require_once "../layouts/footer.php";
?>