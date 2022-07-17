<?php
include_once __DIR__ . '/../include/header.php';

//$id_post = $_GET['delete'];

if (isset($_GET['delete'])) {
    $id_rew = $_GET['delete'];

    $delete=$db->prepare("DELETE FROM `contact` where `id`= '$id_rew' ");
    $delete -> execute();

    header("Location: $site_url/admin/contact/index.php");

}

?>