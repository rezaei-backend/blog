<?php 
require_once "../../functions/pdo.php";
require_once "../../functions/helpers.php";


if ($_POST['title']!='' && isset($_POST['title'])) {
    $query="INSERT INTO `categories` (`title`) VALUES (?)";
    $stm=$conn->prepare($query);
    $stm->execute([$_POST['title']]);
    redirect("view/admin/category/index.php");
}else{
    redirect("view/admin/category/index.php");
}
?>