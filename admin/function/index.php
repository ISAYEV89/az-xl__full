<?php
include_once __DIR__ . '/../include/header.php';
include_once __DIR__ . '/../include/menu.php';

$row = $db->prepare("SELECT * FROM `function` ORDER BY `id` DESC ");
$row->execute();

?>


<div class="wui-content">
    <div class="wui-content-header">
        <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
    </div>

    <div class="page">
        <div class="page-header">
            <div>Funksiyalar</div>
        </div>
        <div class="page-main overflow">

            <div class="tag-list">
                <h2>Funksiyalarin siyahisi</h2>

                <div>
                    <?php
                    while ($tag = $row->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <div class="sidebar-area__tag">
                            <p class="tag-name"><?php echo $tag['name'] ?></p>

                            <a class="edit-icon"
                               href="<?php echo $site_url ?>/admin/function/add.php?id=<?php echo $tag['id']; ?>">
                                <i class="fa fa-edit"></i>
                            </a>

                            <a class="delete-icon deleteItem confirm"
                               href="<?php echo $site_url ?>/admin/function/delete.php?delete=<?php echo $tag['id']; ?>">
                                <i class="fas fa-trash-alt"></i>
                            </a>


                        </div>
                        <?php

                    }

                    ?>


                </div>
            </div>

            <div class="tag-add">
                <h2>Funksiya elave et</h2>

                <form action="" method="post">

                    <input type="text" name="tag-name">

                    <input type="submit" name="add_tag" value="elave et">

                </form>


            </div>

        </div>
    </div>

</div>


<?php

if (isset($_POST['add_tag'])) {
    $name = $_POST['tag-name'];

    $sql_add = $db->prepare("INSERT INTO `function`  (`name`, `s_id`) VALUES ('$name', 1)");
    $sql_add->execute();


    header("Location: $site_url/admin/function/index.php");
}


include_once __DIR__ . '/../include/footer.php';
?>

