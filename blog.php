<?php require_once __DIR__ . '/include/header.php'; ?>
<?php require_once __DIR__ . '/include/training.php'; ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $blog = $db->prepare("SELECT * FROM `blog` WHERE `id` = '$id' AND `s_id` = 1");
    $blog->execute();
    $post = $blog->fetch(PDO::FETCH_ASSOC);

    if (empty($post)) {
        header("Location: $site_url");
    }
} else {
    $id = 0;
}

if ($id == 0) {
    header("Location: $site_url/index.php");
}



$view = $post['view'] + 1;

$view_upt = $db -> prepare("UPDATE `blog`  SET view=:view WHERE id='$id'");
$view_upt -> execute(array('view' => $view));



?>


<div class="main">
    <div class="container">
        <div class="row">

            <div class="col-xl-9 ">
                <div class="blog-inner">
                    <input hidden id="blogId" type="text" value="<?php echo $id ?>">
                    <p class="blog-info"> By : Elnur Isayev 25.12.2018 Category : Başlanğıc, Table (Cədvəl), Ümumi
                        Tags:
                        Table (cədvəl) istifadəsi </p>
                    <h1 class="blog-header"><?php echo $post['title'] ?></h1>

                    <div class="blog-content">
                        <?php echo $post['text'] ?>
                    </div>


                    <div class="soc-blog soc-blog--mb">

                        <div class="soc-blog__title">Paylash:</div>

                        <ul class="soc-blog__menu">
                            <li class="soc-blog__item">
                                <a class="soc-blog__link soc-fb" target="_blank"
                                   href="http://www.facebook.com/sharer.php?u=http://erp-consulting.az/blog.php?id=5"><i
                                            class="fab fa-facebook-f"></i>
                                    <a target="_blank"">
                                </a>
                            </li>
                            <li class="soc-blog__item"><a class="soc-blog__link soc-in" href=""><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            <li class="soc-blog__item"><a class="soc-blog__link soc-telegram" href=""><i
                                            class="fab fa-telegram-plane"></i></a></li>
                            <li class="soc-blog__item"><a class="soc-blog__link soc-wp"
                            href="whatsapp://send?text=Azərbaycanda karantin rejiminin müddəti  http://metbuat.az/news/1446141">
                                    <i class="fab fa-whatsapp"></i></a></li>
                            <li class="soc-blog__item"><a class="soc-blog__link soc-letter" href=""><i
                                            class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>



                    <div class="star-wrap">
                        <h3 class="star-wrap__title">Məlumat nə qədər faydalı oldu?</h3>
                        <div class="star-rating">

                            <input id="star-5" type="radio"  name="rating" class="star-item" value="5"/>
                            <label for="star-5" title="5 stars">
                                <i class="fa fa-star"></i>
                            </label>

                            <input id="star-4" type="radio"  name="rating" class="star-item" value="4"/>
                            <label for="star-4" title="4 stars">
                                <i class=" fa fa-star"></i>
                            </label>

                            <input id="star-3" type="radio" name="rating" class="star-item" value="3"/>
                            <label for="star-3" title="3 stars">
                                <i class="fa fa-star"></i>
                            </label>

                            <input id="star-2" type="radio" name="rating" class="star-item" value="2"/>
                            <label for="star-2" title="2 stars">
                                <i class="fa fa-star"></i>
                            </label>

                            <input id="star-1" type="radio" name="rating" class="star-item" value="1"/>
                            <label for="star-1" title="1 star">
                                <i class="fa fa-star"></i>
                            </label>
                        </div>
                    </div>


                    <div class="similar-blog">

                        <h4 class="similar-blog__head">Benzer meqaleler</h4>

                        <div class="row">
                            <div class="col-xl-4 similar-blog__item">
                                <a href="#" class="similar-blog__img">
                                    <img src="./assets/image/blog/46-00.jpg" alt="">
                                </a>

                                <div class="similar-blog__wrap">

                                    <a href="" class="similar-blog__title cut-text">Sıra sayılarının funksiya ilə
                                        düzgün
                                        hesablanması</a>

                                    <p class="similar-blog__content">
                                        Hesabatlarımızı hazırlayarkən bir çoxumuzun ilk sütunu sıra sayıları olur.
                                        Ancaq
                                        tez-tez
                                        sətir silərkən və ya yeni məlumatlar əlavə edərkən sıra sayılarımızı
                                        yeniləməli
                                        oluruq.
                                        Bu məqalədə göstərilən metodla artıq sıra sayılarımızı yeniləməyə ehtiyac
                                        qalmır.
                                        Hər
                                        yeni məlumat əlavə edildikdə və silindikdə funksiya rəqəmləri yeniləyir. Bu
                                        məsələ
                                        Facebook qrupunda müsabiqə sualı kimi …
                                    </p>
                                </div>
                            </div>

                            <div class="col-xl-4 similar-blog__item">
                                <a href="#" class="similar-blog__img">
                                    <img src="./assets/image/blog/46-00.jpg" alt="">
                                </a>

                                <div class="similar-blog__wrap">

                                    <a href="" class="similar-blog__title cut-text">Sıra sayılarının funksiya ilə
                                        düzgün
                                        hesablanması</a>

                                    <p class="similar-blog__content">
                                        Hesabatlarımızı hazırlayarkən bir çoxumuzun ilk sütunu sıra sayıları olur.
                                        Ancaq
                                        tez-tez
                                        sətir silərkən və ya yeni məlumatlar əlavə edərkən sıra sayılarımızı
                                        yeniləməli
                                        oluruq.
                                        Bu məqalədə göstərilən metodla artıq sıra sayılarımızı yeniləməyə ehtiyac
                                        qalmır.
                                        Hər
                                        yeni məlumat əlavə edildikdə və silindikdə funksiya rəqəmləri yeniləyir. Bu
                                        məsələ
                                        Facebook qrupunda müsabiqə sualı kimi …
                                    </p>
                                </div>
                            </div>

                            <div class="col-xl-4 similar-blog__item">
                                <a href="#" class="similar-blog__img">
                                    <img src="./assets/image/blog/46-00.jpg" alt="">
                                </a>

                                <div class="similar-blog__wrap">

                                    <a href="" class="similar-blog__title cut-text">Sıra sayılarının funksiya ilə
                                        düzgün
                                        hesablanması</a>

                                    <p class="similar-blog__content">
                                        Hesabatlarımızı hazırlayarkən bir çoxumuzun ilk sütunu sıra sayıları olur.
                                        Ancaq
                                        tez-tez
                                        sətir silərkən və ya yeni məlumatlar əlavə edərkən sıra sayılarımızı
                                        yeniləməli
                                        oluruq.
                                        Bu məqalədə göstərilən metodla artıq sıra sayılarımızı yeniləməyə ehtiyac
                                        qalmır.
                                        Hər
                                        yeni məlumat əlavə edildikdə və silindikdə funksiya rəqəmləri yeniləyir. Bu
                                        məsələ
                                        Facebook qrupunda müsabiqə sualı kimi …
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="comment">

                    <h3 class="comment__title">Şərh:</h3>

                    <div class="comment-wrap">


                        <?php

                        $comm = $db->prepare("SELECT * FROM `comment` WHERE `blog_id` = '$id' AND `s_id` = 0 ORDER by `id` DESC");
                        $comm->execute();

                        while ($comms = $comm->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <div class="comment-wrap__item">

                                <div class="comment-wrap__info">
                                    <h5 class="comment-wrap__name"><?php echo $comms['name'] ?></h5>
                                    <p class="comment-wrap__date"><?php echo dateNorm($comms['date']) ?></p>
                                </div>

                                <p class="comment-wrap__text"><?php echo $comms['text'] ?></p>

                            </div>
                            <?php

                        }

                        ?>

                    </div>

                    <form action="" method="POST" id="comment-form">


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="group group--mb-xs group--w-100">
                                    <input class="group__input" name="name" type="text"
                                    value="<?php echo (!empty($_SESSION['user']) ? $_SESSION['user']['name'] . ' ' . $_SESSION['user']['surname'] : '') ?>">
                                    <label class="group__label">Adınız və soyadınız *</label>
                                </div>
                                <div class="group group--mb-xs group--w-100 ">
                                    <textarea class="group__input height-100" name="text"></textarea>
                                    <label class="group__label">Mesaj</label>
                                </div>

                                <?php
                                if (isset($_SESSION['msg'])) {
                                    ?>
                                    <div class="alert alert-danger">
                                        <?php echo $_SESSION['msg']; ?>
                                    </div>
                                    <?php
                                    unset($_SESSION['msg']);
                                }
                                ?>

                                <div>
                                    <input type="submit" class="contact-submit" name="btn_comment" value="ƏLAVƏ ET">
                                </div>
                            </div>
                        </div>


                    </form>

                </div>

            </div>

            <?php require_once __DIR__ . '/include/sidebar.php' ?>

        </div>
    </div>
</div>


<?php require_once __DIR__ . '/include/footer.php' ?>


<?php

if (isset($_POST['btn_comment'])) {

    $_POST = array_map('filter_form', $_POST);

    $name = $_POST['name'];
    $text = $_POST['text'];
    $blog_id = $id;

    if ($name == '') {
        $_SESSION['msg'] = 'Zəhmət olmasa ad bölməsini doldurun.';
        header("Location: $site_url/blog.php?id=$blog_id");
    } elseif ($text == '') {
        $_SESSION['msg'] = 'Zəhmət olmasa mesaj bölməsini doldurun.';
        header("Location: $site_url/blog.php?id=$blog_id");
    } else {
        $comment = $db->prepare("INSERT INTO `comment` (`name`, `text`, `blog_id`)
                                             VALUES('$name', '$text', '$blog_id')");
        $comment->execute();
        header("Location: $site_url/blog.php?id=$blog_id");
    }


}

?>


