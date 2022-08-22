<?php
//require_once __DIR__ .  '/../inc/config.php';
require_once '../inc/config.php';

if (isset($_POST['star'])) {

    $updt = $_POST['updt'];
    $point = $_POST['star'];
    $blog_id = $_POST['blogId'];

    if($updt == 0)  {
        $star = $db -> prepare("INSERT INTO `star` (`point`, `blog_id`)
                           VALUES ('$point', '$blog_id')");
        $star -> execute();

        $sql_for_last_id = $db->prepare("SELECT MAX(id) FROM `star`");
        $sql_for_last_id->execute();
        $id = $sql_for_last_id->fetchColumn();

        echo $id;
    }elseif ($updt == 1){

        $idUpdt = $_POST['id'];

        $updt = $db->prepare("UPDATE `star` SET point=:point WHERE `id`='$idUpdt' AND  `blog_id` = '$blog_id'");
        $updt->execute(array('point' => $point));

        echo $idUpdt;

    }







}


?>