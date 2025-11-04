<?php
require_once "../layouts/header.php";
$id=$_GET['id'];
$category = $conn->query("SELECT * FROM `categories` WHERE id='$id' ")->fetch();
?>
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
        </ul>
      </div>
    </div>
    <div class="input-group w-25">
      <input type="text" class="form-control" placeholder="جستجو...">
      <span class="input-group-text"><i class="fas fa-search"></i></span>
    </div>
  </div>
    <div class="card p-4">
      <h5><i class="fas fa-file-alt me-2 text-primary"></i> ویرایش دسته بندی</h5>
      <form action="<?=url_get("controller/category/updatecategory.php" , $id) ?>" method="post">
        <div class="row">
          <!-- ورودی متنی -->
          <div class="col-md-6 mb-3">
            <label class="form-label">نام دسته بندی</label>
            <input type="text" value="<?=$category['title'] ?>" name="title" class="form-control" placeholder="نام دسته  را وارد کنید">
          </div>
          
        </div>
        <button type="submit" class="btn btn-primary">ذخیره</button>
      </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');
    sidebar.classList.toggle('collapsed');
    content.classList.toggle('collapsed');
  }

  function confirmDelete() {
    if (confirm('آیا از حذف این مورد مطمئن هستید؟')) {
      alert('حذف با موفقیت انجام شد!');
    }
  }
</script>
</body>

<?php
require_once "../layouts/footer.php";
?>