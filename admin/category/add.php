<?php
include_once __DIR__ . '/../include/header.php';
include_once __DIR__ . '/../include/menu.php';

/*$row = $db->prepare("SELECT * FROM `tag` ORDER BY `id` DESC ");
$row->execute();*/


if (isset($_GET['id'])) {

    $id_rew = $_GET['id'];

    $baza = $db->prepare("SELECT * FROM `category` WHERE `id` = '$id_rew' ");
    $baza->execute();
    $baza2 = $baza->fetch(PDO::FETCH_ASSOC);


    if (empty($baza2)) {
        header("Location: $site_url/admin/category/index.php");
    }


}

?>


<div class="wui-content">
    <div class="wui-content-header">
        <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
    </div>

    <div class="page">
        <div class="page-header">
            <div>Kategoriyanin adini deyishdirmek</div>
        </div>
        <div class="page-main overflow">


            <div class="tag-add">


                <form action="" method="post">

                    <input type="text" name="name" value='<?php echo $baza2['name'] ?>'>

                    <input type="submit" name="add_tag" value="Deyishdir">

                </form>


            </div>

        </div>
    </div>

</div>


<?php


if (isset($_POST['add_tag'])) {

    $name = $_POST['name'];

    $updt = $db->prepare("UPDATE `category` SET name=:name WHERE id='$id_rew'");
    $updt->execute(array('name' => $name));
    header("Location: $site_url/admin/category/index.php");

}

include_once __DIR__ . '/../include/footer.php';
?>

