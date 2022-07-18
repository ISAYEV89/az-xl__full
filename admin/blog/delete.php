<?php

include_once __DIR__ . '/../include/header.php';

if (isset($_GET['delete'])) {
    $id_rew = $_GET['delete'];

    $delete=$db->prepare("DELETE FROM `level` where `id`= '$id_rew' ");
    $delete -> execute();

    header("Location: $site_url/admin/level/index.php");;


}

//echo $_GET['delete'];

?>