<?php
require_once "../layouts/header.php";

$categories = $conn->query("SELECT * FROM `categories`")->fetchAll();
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
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h5><i class="fas fa-table me-2 text-primary"></i> جدول کاربران</h5>
      <a href="create-table.html" class="btn btn-primary">ساخت دسته بندی جدید </a>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>عنوان</th>
          <th>عملیات</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($categories as $category) {
        ?>
          <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['title'] ?></td>
            <td>
              <a href="create-table.html" class="text-primary me-2"><i class="fas fa-eye"></i></a>
              <a href="<?=url_get("view/admin/category/updatecategory.php" , $category['id']) ?>" class="text-warning me-2"><i class="fas fa-pencil-alt"></i></a>
              <a href="<?=url_get("controller/category/deletecategory.php" , $category['id']) ?>" class="text-danger"><i class="fas fa-trash"></i></a>
            </td>
          </tr>

        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
    <div class="card p-4">
      <h5><i class="fas fa-file-alt me-2 text-primary"></i> افزودن دسته بندی</h5>
      <form action="<?=url("controller/category/insertcategory.php") ?>" method="post">
        <div class="row">
          <!-- ورودی متنی -->
          <div class="col-md-6 mb-3">
            <label class="form-label">نام دسته بندی</label>
            <input type="text" name="title" class="form-control" placeholder="نام دسته  را وارد کنید">
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