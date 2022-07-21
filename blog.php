<?php require_once __DIR__ . '/include/header.php'; ?>

<?php require_once __DIR__ . '/include/training.php'; ?>

<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $blog = $db->prepare("SELECT * FROM `blog` WHERE `id` = '$id'");
    $blog->execute();
    $post = $blog->fetch(PDO::FETCH_ASSOC);

    if (empty($post)) {
        header("Location: $site_url");
    }
}
?>


    <div class="main">
        <div class="container">
            <div class="row">

                <div class="col-xl-9 ">
                    <div class="blog-inner">
                        <h1 class="blog-header"><?php echo $post['title'] ?></h1>

                        <p class="blog-info"> By : Elnur Isayev 25.12.2018 Category : Başlanğıc, Table (Cədvəl), Ümumi
                            Tags:
                            Table (cədvəl) istifadəsi </p>

                        <div class="blog-img">
                            <img src="<?php echo $site_url . '/admin/image/blog/' . $post['img'] ?>" alt="">
                            <p class="blog-label">
                                <?php
                                    $l_id = $post['level_id'];
                                    $level = $db->prepare("SELECT * FROM `level` WHERE `id` = '$l_id' LIMIT 1");
                                    $level -> execute();
                                    $l = $level->fetch(PDO::FETCH_ASSOC);
                                    echo $l['name'];
                                ?>
                            </p>
                        </div>

                        <div class="blog-content">
                            <?php echo $post['text'] ?>
                        </div>


                        <div class="soc-blog soc-blog--mb">

                            <div class="soc-blog__title">Paylash:</div>

                            <ul class="soc-blog__menu">
                                <li class="soc-blog__item"><a class="soc-blog__link soc-fb" href=""><i
                                                class="fab fa-facebook-f"></i></a></li>
                                <li class="soc-blog__item"><a class="soc-blog__link soc-in" href=""><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                <li class="soc-blog__item"><a class="soc-blog__link soc-telegram" href=""><i
                                                class="fab fa-telegram-plane"></i></a></li>
                                <li class="soc-blog__item"><a class="soc-blog__link soc-wp" href=""><i
                                                class="fab fa-whatsapp"></i></a></li>
                                <li class="soc-blog__item"><a class="soc-blog__link soc-letter" href=""><i
                                                class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>

                        <div class="star-wrap">
                            <h3 class="star-wrap__title">Məlumat nə qədər faydalı oldu?</h3>
                            <div class="star-rating">

                                <input id="star-5" type="radio" name="rating" value="star-5"/>
                                <label for="star-5" title="5 stars">
                                    <i class="fa fa-star"></i>
                                </label>
                                <input id="star-4" type="radio" name="rating" value="star-4"/>
                                <label for="star-4" title="4 stars">
                                    <i class=" fa fa-star"></i>
                                </label>
                                <input id="star-3" type="radio" name="rating" value="star-3"/>
                                <label for="star-3" title="3 stars">
                                    <i class="fa fa-star"></i>
                                </label>
                                <input id="star-2" type="radio" name="rating" value="star-2"/>
                                <label for="star-2" title="2 stars">
                                    <i class="fa fa-star"></i>
                                </label>
                                <input id="star-1" type="radio" name="rating" value="star-1"/>
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

                            <div class="comment-wrap__item">

                                <div class="comment-wrap__info">
                                    <h5 class="comment-wrap__name">Morri Mortalmente</h5>
                                    <p class="comment-wrap__date">15.07.2022</p>
                                </div>

                                <p class="comment-wrap__text">Like some people said You next generation people don't let
                                    this song die out, it's such a
                                    bop</p>

                            </div>

                            <div class="comment-wrap__item">

                                <div class="comment-wrap__info">
                                    <h5 class="comment-wrap__name">Morri Mortalmente</h5>
                                    <p class="comment-wrap__date">15.07.2022</p>
                                </div>

                                <p class="comment-wrap__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Architecto beatae dolores est hic maiores porro quisquam ullam voluptatum.
                                    Consectetur,
                                    sed.</p>

                            </div>

                            <div class="comment-wrap__item">

                                <div class="comment-wrap__info">
                                    <h5 class="comment-wrap__name">Morri Mortalmente</h5>
                                    <p class="comment-wrap__date">15.07.2022</p>
                                </div>

                                <p class="comment-wrap__text">Lorem ipsum dolor sit amet.</p>

                            </div>

                            <div class="comment-wrap__item">

                                <div class="comment-wrap__info">
                                    <h5 class="comment-wrap__name">Morri Mortalmente</h5>
                                    <p class="comment-wrap__date">15.07.2022</p>
                                </div>

                                <p class="comment-wrap__text">Like some people said You next generation people don't let
                                    this song die out, it's such a
                                    bop</p>

                            </div>
                        </div>

                        <form action="">

                            <div class="row">
                                <div class="col-xl-12">
                                    <!--<div>
                                        <input class="comment__input" type="text" placeholder="Ad və soyad *">
                                    </div>-->
                                    <div class="group group--mb-xs group--w-100">
                                        <input required class="group__input" name="name" type="text">
                                        <label class="group__label">Adınız və soyadınız *</label>
                                    </div>
                                    <div class="group group--mb-xs group--w-100 ">
                                        <textarea class="group__input height-100"></textarea>
                                        <label class="group__label">Mesaj</label>
                                    </div>


                                    <div>
                                        <input type="submit" class="contact-submit" value="ƏLAVƏ ET">
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