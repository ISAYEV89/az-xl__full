<?php
include_once __DIR__ . '/../include/header.php';
include_once __DIR__ . '/../include/menu.php';

$row = $db->prepare("SELECT * FROM `settings` ORDER BY `id` DESC LIMIT 1");
$row->execute();

$setting = $row->fetch(PDO::FETCH_ASSOC);

?>


<div class="wui-content">
    <div class="wui-content-header">
        <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
    </div>

    <div class="page">
        <div class="page-header">
            <div>Ayarlar</div>
        </div>
        <div class="page-main overflow">

            <form action="" method="post">
                <h5>Tel nomresi</h5>
                <input type="text" name="tag-name" value="<?php echo $setting['tel'] ?>">
                <br><br>

                <h5>Tel nomresi</h5>
                <input type="text" name="tag-name" value="<?php echo $setting['adress'] ?>">
                <br><br>

                <h5>Tel nomresi</h5>
                <input type="text" name="tag-name" value="<?php echo $setting['email'] ?>">
                <br><br>

                <h5>Tel nomresi</h5>
                <input type="text" name="tag-name">
                <br><br>

                <h5>blog sayi</h5>
                <input type="text" name="tag-name">
                <br><br>

                <input type="submit" name="add_tag" value="deyishdir">


            </form>


        </div>
    </div>

</div>


<?php

if (isset($_POST['add_tag'])) {
    $name = $_POST['tag-name'];

    $sql_add = $db->prepare("INSERT INTO `tag`  (`name`, `s_id`) VALUES ('$name', 1)");
    $sql_add->execute();


    header("Location: $site_url/admin/tag/index.php");
}


include_once __DIR__ . '/../include/footer.php';
?>

