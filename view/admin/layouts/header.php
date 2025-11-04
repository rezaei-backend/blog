<?php

use Soap\Url;

session_start();
require_once "../../../functions/helpers.php";
require_once "../../../functions/pdo.php";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>صفحه اصلی - پنل ادمین</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=assets("/admin/css/style.css") ?>">
</head>
<body>
  <div class="sidebar" id="sidebar">
    <button class="toggle-btn" onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>
    <h4 class="text-center text-white mb-4"><i class="fas fa-tachometer-alt me-2"></i> <span class="sidebar-title">پنل ادمین</span></h4>
    <a href="index.html"><i class="fas fa-home me-2"></i> <span>صفحه اصلی</span></a>
    <a href="<?=Url("view/admin/category/index.php")?>"><i class="fas fa-cog me-2"></i> <span>دسته بندی</span></a>
    <a href="tables.html"><i class="fas fa-table me-2"></i> <span>جدول‌ها</span></a>
    <a href="profile.html"><i class="fas fa-user me-2"></i> <span>پروفایل</span></a>
    <a href="forms.html"><i class="fas fa-file-alt me-2"></i> <span>فرم‌ها</span></a>
    <a href="#"><i class="fas fa-sign-out-alt me-2"></i> <span>خروج</span></a>
  </div>

