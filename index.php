<?php require_once __DIR__ . '/include/header.php'; ?>

<?php require_once __DIR__ . '/include/training.php'; ?>


<?php require_once __DIR__ . '/include/filter.php'; ?>


<div class="main">
    <div class="container">

        <div class="row ">

            <?php
            $posts = $db->prepare("SELECT * FROM `blog`");
            $posts->execute();

            while ($post = $posts->fetch(PDO::FETCH_ASSOC)) {
                ?>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 post--mb">
                    <div class="post d-block style_prevu_kit">
                        <a href="<?php echo $site_url . '/blog.php?id=' . $post['id'] ?>" class="post-img">
                            <img src="<?php echo $site_url . '/admin/image/blog/' . $post['img'] ?>" alt="">
                            <div class="post-text"><?php echo $post['short_text'] ?></div>
                        </a>
                        <div class="post-content">
                            <a href="<?php echo $site_url . '/blog.php?id=' . $post['id'] ?>"
                               class="post-title"><?php echo $post['title'] ?></a>
                            <div class="post-text-mob"><?php echo $post['short_text'] ?></div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>


            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 post--mb">
                <div class="post  style_prevu_kit">
                    <a href="#" class="post-img">
                        <img src="./assets/image/blog/46-00.jpg" alt="">
                        <div class="post-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cum delectus illum ipsa
                            ipsum quae quia ratione repudiandae. Possimus, sed.
                        </div>
                    </a>
                    <div class="post-content">
                        <a href="#" class="post-title">Daha rahat avtomatlaşdırma üçün Exceldə bazaları necə
                            qurmalı?</a>
                        <div class="post-text-mob">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cum delectus illum ipsa
                            ipsum quae quia ratione repudiandae. Possimus, sed.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="pagination ">
                    <button class="pagination__btn">
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <div class="pagination__pages">
                        <a class="pagination__page">1</a>
                        <a class="pagination__page">2</a>
                        <a class="pagination__page active">3</a>
                        <a class="pagination__page">4</a>
                        <a class="pagination__page">5</a>
                        <a class="pagination__page">6</a>
                        <a class="pagination__page">...</a>
                        <a class="pagination__page">23</a>
                    </div>
                    <button class="pagination__btn">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>

        </div>


    </div>
</div>


<?php require_once __DIR__ . '/include/footer.php' ?>
