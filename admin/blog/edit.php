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
            <div>Blog elave et</div>
        </div>
        <div class="page-main overflow">


            <form action="" class="blog-add" method="post" enctype="multipart/form-data">

                <div class="blog-add__wrap">
                    <p class="blog-add__title">Bashliq :</p>
                    <input class="blog-add__input" name="title" type="text">
                </div>

                <div class="blog-add__wrap">
                    <p class="blog-add__title">Qisa text :</p>
                    <textarea class="blog-add__text" name="short_text" ></textarea>
                </div>

                <div class="add-form__img">
                    <label for="addImageInput" class="add-form__img-input">
                        <span class="btn-submit"><i class="far fa-image"></i>Shekil sech</span>
                        <input type='file' name="fileToUpload" hidden  id="addImageInput">
                    </label>

                    <div class="add-form__img-result">
                        <img class="d-none" id="blah" src="" alt="your image"/>
                    </div>

                </div>

                <div class="row">
                    <div class="blog-add__wrap col-xl-6">
                        <p class="blog-add__title">Taglar :</p>
                        <select name="tag_id" class="blog-add__select">
                            <?php

                            $tag = $db->prepare("SELECT * FROM `tag`");
                            $tag->execute();

                            while ($tag2 = $tag->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <option value="<?php echo $tag2['id'] ?>"><?php echo $tag2['name'] ?></option>
                                <?php
                            }

                            ?>
                        </select>
                    </div>

                    <div class="blog-add__wrap col-xl-6">
                        <p class="blog-add__title">Funksiyalar :</p>
                        <select name="f_id" class="blog-add__select">
                            <?php

                            $function = $db->prepare("SELECT * FROM `function`");
                            $function->execute();

                            while ($fun = $function->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <option value="<?php echo $fun['id'] ?>"><?php echo $fun['name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>

                    </div>

                    <div class="blog-add__wrap col-xl-6">
                        <p class="blog-add__title">Kategoriya :</p>
                        <select name="cat_id" class="blog-add__select">
                            <?php

                            $category = $db->prepare("SELECT * FROM `category`");
                            $category->execute();

                            while ($cat = $category->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>

                    </div>

                    <div class="blog-add__wrap col-xl-6">
                        <p class="blog-add__title">Seviyye :</p>
                        <select name="level_id" class="blog-add__select">
                            <?php

                            $level = $db->prepare("SELECT * FROM `level`");
                            $level->execute();

                            while ($lev = $level->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <option value="<?php echo $lev['id'] ?>"><?php echo $lev['name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>


                <div class="blog-add__wrap">
                    <p class="blog-add__title">Metn :</p>
                    <textarea name="text"  id="editor" cols="30" rows="10"></textarea>
                </div>


                <div>

                    <label>
                        <input class="form-item__checkbox" checked name="s_id" type="checkbox" value="1">
                        <span class="form-item__title"> Saytda görsənsin </span>
                    </label>
                </div>

                <div>
                    <input type="submit" class="btn-submit2" name="btn_submit" value="ELave et">
                </div>
            </form>

        </div>
    </div>

</div>


<?php


if (isset($_POST['btn_submit'])) {


    $title = $_POST['title'];
    $short_text = $_POST['short_text'];
    $tag_id = $_POST['tag_id'];
    $cat_id = $_POST['cat_id'];
    $level_id = $_POST['level_id'];
    $cat_id = $_POST['cat_id'];
    $s_id = $_POST['s_id'];
    $f_id = $_POST['f_id'];
    $text = $_POST['text'];


    $img_name = $_FILES['fileToUpload']['name'];
    $img_size = $_FILES['fileToUpload']['size'];
    $tmp_name = $_FILES['fileToUpload']['tmp_name'];
    $error = $_FILES['fileToUpload']['error'];

    $img = $img_name;

    $target_dir = '../image/blog/';
//    $target_dir = $site_url . '/assets/image/blog/';

    $target_file = $target_dir . $img;

//    $name = $_POST['name'];

  /*  $sql = $db->prepare("INSERT INTO `blog` (`name`, `s_id`) VALUES ('$name', 1)");
    $sql->execute();*/
    move_uploaded_file($tmp_name, $target_file);


    $sql = $db->prepare("INSERT INTO `blog` (`title`, `short_text`, `text`, `tag_id`, `cat_id`, `level_id`, `img`, `f_id`, `view`, `s_id`)
                                           VALUES ('$title', '$short_text', '$text', '$tag_id', '$cat_id', '$level_id','$img', '$f_id', 0, '$s_id')");
    $sql->execute();

    header("Location: $site_url/admin/blog/index.php");

}

include_once __DIR__ . '/../include/footer.php';
?>

<script src="<?php echo $site_url . '/admin/ckeditor/ckeditor.js' ?>"></script>


<script>
    CKEDITOR.replace( 'editor', {
        filebrowserUploadUrl: 'ck_upload.php',
        filebrowserUploadMethod: 'form',
        language: 'az',
        "extraPlugins" : 'imagebrowser',
        "imageBrowser_listUrl": "/admin/blog/images_list.json"
    } );

</script>