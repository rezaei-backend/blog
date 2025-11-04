<?php 
require_once "../../functions/pdo.php";
require_once "../../functions/helpers.php";
$id=$_GET['id'];

if ($_POST['title']!='' && isset($_POST['title'])) {
    $query="UPDATE `categories` SET `title`=? WHERE id='$id'";
    $stm=$conn->prepare($query);
    $stm->execute([$_POST['title']]);
    redirect("view/admin/category/index.php");
}else{
    redirect("view/admin/category/index.php");
}
?>