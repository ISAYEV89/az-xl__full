<?php require_once __DIR__ . './include/header.php'; ?>


    <div class="container2">
        <a href="#" class="ad">
            <img src="./assets/image/icon/ad2.png" alt="">
        </a>
    </div>


<div class="main">
    <div class="container">
        <div class="row contact-wrap">

            <div class="col-xl-6 col-lg-6">
                <div class="contact-map">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d645.6136163575943!2d49.82609858507299!3d40.36678171869654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x471b1868bf939b46!2zNDDCsDIyJzAwLjAiTiA0OcKwNDknMzUuMyJF!5e0!3m2!1sru!2s!4v1656682317262!5m2!1sru!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="contact-info">

                        <div class="contact-info__item">

                            <div class="contact-info__icon">
                                <i class="fa fa-envelope"></i>
                            </div>

                            <p class="contact-info__text">Akademik Mirəsədulla Mirqasımov küçəsi 1
                                (1 saylı Şəhər Kliniki Xəstəxanası)</p>

                        </div>

                        <div class="contact-info__item">

                            <div class="contact-info__icon">
                                <i class="fa fa-envelope"></i>
                            </div>

                            <a href="mailto:admin@az-xl.com" class="contact-info__text">admin@az-xl.com</a>
                        </div>

                        <div class="contact-info__item">


                            <div class="contact-info__icon rotate-90">
                                <i class="fa fa-phone"></i>
                            </div>


                            <div>
                                <a href="mailto:admin@az-xl.com" class="contact-info__text">+994 55 555 55 55</a>
                                <a href="mailto:admin@az-xl.com" class="contact-info__text">+994 55 555 55 55</a>
                            </div>
                        </div>


                    </div>

                </div>


            </div>


            <div class="col-xl-6 col-lg-6">
                <form action="" class="contact">

                    <h1 class="contact-header">Bizimlə Əlaqə</h1>
                    <p class="contact-paragraph">-------</p>

                    <div class="group group--mb-xs group--w-100">
                        <input required class="group__input" name="name" type="text">
                        <label class="group__label">Adınız və soyadınız *</label>
                    </div>

                    <div class="group group--mb-xs group--w-100">
                        <input required class="group__input" name="name" type="text">
                        <label class="group__label">E-poçtunuz *</label>
                    </div>

                    <div class="group group--mb-xs group--w-100">
                        <input required class="group__input" name="name" type="text">
                        <label class="group__label">Mövzu *</label>
                    </div>

                    <div class="group group--mb-xs group--w-100 ">
                        <textarea class="group__input height-100"></textarea>
                        <label class="group__label">Mesaj</label>
                    </div>


                    <div>
                        <input type="submit" class="contact-submit" value="Mesajı göndər">
                    </div>

                </form>

            </div>


        </div>
    </div>
</div>


<?php

if(isset($_POST['contact-btn'])) {

    print_r($_POST);

}

?>

<?php require_once __DIR__ . './include/footer.php' ?>

