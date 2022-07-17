<?php
include_once __DIR__ . '/../include/header.php';
include_once __DIR__ . '/../include/menu.php';



?>


<div class="wui-content">
    <div class="wui-content-header">
        <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
    </div>

    <div class="page">
        <div class="page-header">
            <div>Kategoriya elave et</div>
        </div>
        <div class="page-main overflow">


            <div class="tag-add">


                <form action="" method="post">

                    <input type="text" name="name" value=''>

                    <input type="submit" name="btn_submit" value="Elave et">

                </form>


            </div>

        </div>
    </div>

</div>


<?php


if (isset($_POST['btn_submit'])) {

    $name = $_POST['name'];

    $sql = $db->prepare("INSERT INTO `category` (`name`, `s_id`) VALUES ('$name', 1)");
    $sql->execute();


    header("Location: $site_url/admin/category/index.php");

}

include_once __DIR__ . '/../include/footer.php';
?>

