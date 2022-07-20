<div class="filter">

    <div class="filter-text">
        <span class="filter-text__icon"><i class="fa fa-search"></i></span>
        <span>Etrafli axtarish</span>
        <span class="filter-text__icon2">  <i class="fa fa-sort-down"></i> </span>
    </div>

    <div class="container filter-main">
        <form action="">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 filter__item ">
                    <p class="filter__name">Kateqoriya</p>
                    <select class="filter__select">
                        <option> Bütün kateqoriyalar  </option>
                        <?php
                        $category = $db->prepare("SELECT * FROM `category`");
                        $category->execute();
                        while ($cat = $category->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?php echo $cat['id'] ?>"><?php echo  $cat['name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 filter__item ">
                    <p class="filter__name">Tag</p>
                    <select class="filter__select">
                        <option> Bütün taglər  </option>
                        <?php
                        $tags = $db->prepare("SELECT * FROM `tag`");
                        $tags->execute();
                        while ($tag = $tags->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?php echo $tag['id'] ?>"><?php echo  $tag['name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 filter__item ">
                    <p class="filter__name">Səviyyə</p>
                    <select class="filter__select">
                        <option> Bütün səviyyələr  </option>
                        <?php
                        $levels = $db->prepare("SELECT * FROM `level`");
                        $levels->execute();
                        while ($level = $levels->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?php echo $level['id'] ?>"><?php echo  $level['name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 filter__item ">
                    <p class="filter__name">Funksiya</p>
                    <select class="filter__select">
                        <option> Bütün funksiyalar  </option>
                        <?php
                        $function = $db->prepare("SELECT * FROM `function`");
                        $function->execute();
                        while ($fun = $function->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?php echo $fun['id'] ?>"><?php echo  $fun['name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>



                <div class="col-xl-12 filter__submit">
                    <input type="submit" value="Axtar">
                </div>

            </div>

        </form>

    </div>

</div>