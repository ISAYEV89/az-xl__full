<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title>Webpack</title>
    <link href="./assets/css/app.css" rel="stylesheet"></head>
<body>

<header class="header">
    <div class="container">
        <section class="wrapper">
            <a href="" class="header-logo">
                <img src="./assets/image/icon/MicrosoftLogo.png" alt="">
            </a>
            <button type="button" class="opened-menu">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="overlay"></div>
            <nav class="navbar">
                <button type="button" class="closed-menu">
                    <div class="closed-icon">
                        <i class="fas fa-times"></i>
                    </div>

                </button>
                <ul class="menu">
                    <li class="menu-item"><a href="#">Ana Səhifə (Blog)</a></li>
                    <li class="menu-item"><a href="#">Təlim</a></li>
                    <li class="menu-item"><a href="#">Əlaqə</a></li>
                </ul>

                <div>
                    <div class="search search--desk">
                        <input type="text" class="searchTerm" placeholder="Axtar">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>

            </nav>
        </section>


        <div class="search search--mob">
            <input type="text" class="searchTerm" placeholder="Axtar">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>

    </div>
</header>

<div class="container2">
    <a href="#" class="ad">
        <img src="./assets/image/icon/ad2.png" alt="">
    </a>
</div>


<div class="main">
    <div class="container">
        <div class="row">

            <div class="col-xl-9 ">
                <div class="blog-inner">
                    <h1 class="blog-header">Daha rahat avtomatlaşdırma üçün Exceldə bazaları necə qurmalı?</h1>

                    <p class="blog-info"> By : Elnur Isayev 25.12.2018 Category : Başlanğıc, Table (Cədvəl), Ümumi Tags:
                        Table (cədvəl) istifadəsi </p>

                    <div class="blog-img">
                        <img src="assets/image/blog/46-00.jpg" alt="">
                        <p class="blog-label">Başlanğıc</p>
                    </div>

                    <div class="blog-content">
                        <p>Bir çoxumuz Exceli işlərimizi avtomatlışdırmaq üçün istifadə edirik. İstəyirik ki, bir dəfə
                            cədvəlimizi və funksiyalarımızı quraq və daha sonra eyni əziyyəti çəkmiyək. Bu şəkildə,
                            həmin
                            Excel faylında həm hesabatlarımız, həm də arxivlədiyimiz məlumatlar olsun və istənilən vaxt
                            həmin bazadan istifadə edək.</p>

                        <p>Ancaq, bunu etməyə çalışarkən cədvəllərimiz üçün düzgün struktur yaratmır və bir müddət
                            keçdikdən
                            sonra iş çıxılmaz vəziyyət alır. Belə ki, cədvəllər elə bir vəziyyər alır ki, hesabat almaq
                            çox
                            çətinləşir hətta sadə filter əməliyyatı çox əziyyətli olmağa başlayır.</p>

                        <p>Bu məqalədə, əvvəlcə ən düzgün bazalama forması göstəriləcək, daha sonra isə, digər cədvəl
                            növlərinin bizlərə nə kimi çətinlik yaratdığı haqqında yazmağa çalışacam. Əslində qeyd
                            olunan
                            metod heç də yeni deyil. SQL Server kimi proqramlarla işləyən proqramistlərin hər zaman
                            istifadə
                            etdiyi cədvəl növüdür. Ancaq Excel istifadəçilərində baza qurmaq seçimi sərbəst olduğu və
                            bazalar haqqında ilkin məlumatlarının olmadığı üçün bu problem ilə tez tez qarşılaşılır.</p>

                        <h4>Tabular Cədvəllər</h4>

                        <p>Bazanın qurulması üçün ən uyğun cədvəl növüdür. Bu cədvəllərdə hər bir məlumat növü ayrı
                            sütunda
                            göstərilir. Bu formatlı cədvəllərdə istənilən məlumat almaq üçün filter tətbiqi və
                            funksiyaların
                            qurulumu daha sadə olur. Nümunə format bu şəkildədir.</p>

                        <img class="center" src="./assets/image/blog/51-01.jpg" alt="">
                        <p></p>
                        <p>Yeni məlumat əlavə olunduğunda cədvəlin son sətrindən sonra əlavə olunduğu üçün funksiyaları
                            da
                            yeniləməyə ehtiyac qalmır. Bu formada olan cədvəllərdən hesabat yaratmaq da daha asan olur.
                            Baza
                            yaradarkən bəzi nüanslara da diqqət yetirmək lazımdır:</p>
                    </div>


                    <div class="soc-blog soc-blog--mb">

                        <div class="soc-blog__title">
                            Paylash:
                        </div>

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

                                    <a href="" class="similar-blog__title cut-text">Sıra sayılarının funksiya ilə düzgün
                                        hesablanması</a>

                                    <p class="similar-blog__content">
                                        Hesabatlarımızı hazırlayarkən bir çoxumuzun ilk sütunu sıra sayıları olur. Ancaq
                                        tez-tez
                                        sətir silərkən və ya yeni məlumatlar əlavə edərkən sıra sayılarımızı yeniləməli
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

                                    <a href="" class="similar-blog__title cut-text">Sıra sayılarının funksiya ilə düzgün
                                        hesablanması</a>

                                    <p class="similar-blog__content">
                                        Hesabatlarımızı hazırlayarkən bir çoxumuzun ilk sütunu sıra sayıları olur. Ancaq
                                        tez-tez
                                        sətir silərkən və ya yeni məlumatlar əlavə edərkən sıra sayılarımızı yeniləməli
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

                                    <a href="" class="similar-blog__title cut-text">Sıra sayılarının funksiya ilə düzgün
                                        hesablanması</a>

                                    <p class="similar-blog__content">
                                        Hesabatlarımızı hazırlayarkən bir çoxumuzun ilk sütunu sıra sayıları olur. Ancaq
                                        tez-tez
                                        sətir silərkən və ya yeni məlumatlar əlavə edərkən sıra sayılarımızı yeniləməli
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
                                Architecto beatae dolores est hic maiores porro quisquam ullam voluptatum. Consectetur,
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

            <div class="col-xl-3 sidebar">


                <div class="sidebar-area">

                    <div class="sidebar-area__heading">
                        Etiketlər
                    </div>

                    <div class="tagCloud">
                        <a href="#" class="sidebar-area__tag">"Xata"-larla iş (2)</a>
                        <a href="#" class="sidebar-area__tag">Mühasibatlıq (3)</a>
                        <a href="#" class="sidebar-area__tag">Müsabiqə suallarının cavabları (5)</a>
                        <a href="#" class="sidebar-area__tag">VBA (5)</a>
                        <a href="#" class="sidebar-area__tag">Vergi (5)</a>


                    </div>


                </div>

                <div class="sidebar-area">

                    <div class="sidebar-area__heading">
                        Funksiyalar
                    </div>

                    <div class="tagCloud">
                        <a href="#" class="sidebar-area__tag">"Xata"-larla iş (2)</a>
                        <a href="#" class="sidebar-area__tag">Mühasibatlıq (3)</a>
                        <a href="#" class="sidebar-area__tag">Müsabiqə suallarının cavabları (5)</a>
                        <a href="#" class="sidebar-area__tag">VBA (5)</a>
                        <a href="#" class="sidebar-area__tag">Vergi (5)</a>


                    </div>


                </div>

            </div>

        </div>
    </div>
</div>


<footer>
    <div class="footer__top">
        <div class="container">

            <div class="row ">

                <div class="col-xl-12 ">
                    <a href="" class="footer__logo">
                        <img src="./assets/image/icon/MicrosoftLogo.png" alt="">
                    </a>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <h3 class="footer__title">ƏLAQƏ MƏLUMATLARI</h3>


                    <div class="footer__contact border-contact">

                        <div class="footer__contact-icon">
                            <i class="fa fa-phone rotate-90"></i>
                        </div>


                        <div class="footer__contact-text">
                            <a href="mailto:admin@az-xl.com" class="contact-info__text">+994 55 555 55 55</a>
                            <a href="mailto:admin@az-xl.com" class="contact-info__text">+994 55 555 55 55</a>
                        </div>

                    </div>

                    <div class="footer__contact border-contact">

                        <div class="footer__contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>


                        <div class="footer__contact-text">
                            <a href="mailto:admin@az-xl.com" class="contact-info__text">admin@az-xl.com</a>
                        </div>

                    </div>

                    <div class="footer__contact border-contact">

                        <div class="footer__contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>


                        <div class="footer__contact-text">
                            <p>Akademik Mirəsədulla Mirqasımov küçəsi 1
                                (1 saylı Şəhər Kliniki Xəstəxanası)</p>
                        </div>

                    </div>

                    <div class="footer__soc">

                    </div>

                </div>

                <div class="offset-xl-0 col-xl-2 offset-lg-2 col-lg-4 offset-md-2 col-md-4">
                    <h3 class="footer__title">QISA KEÇİDLƏR</h3>


                    <ul class="footer__menu">
                        <li class="footer__menu-item"><a class="footer__menu-link" href=""> Ana sehife (blog) </a></li>
                        <li class="footer__menu-item"><a class="footer__menu-link" href=""> Telim </a></li>
                        <li class="footer__menu-item"><a class="footer__menu-link" href=""> Elaqe </a></li>
                    </ul>


                </div>

                <div class="col-xl-5 col-lg-8 col-md-9 ">
                    <h3 class="footer__title">SON MƏQALƏLƏR</h3>

                    <div class="footer__blog">


                        <a href="" class="footer__blog-img">
                            <img src="./assets/image/blog/46-00.jpg" alt="">
                        </a>


                        <div class="footer__blog-content">
                            <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                aliquam dolorum fugit rem sequi velit!.</a>
                            <p>Lorem İpsum – dizayn nəşrlərində istifadə olunan düzgün olmayan mətndir.Dəqiq quruluşa...
                                <br>
                                <a href="">DAVAMINI OXU </a></p>
                        </div>
                    </div>

                    <div class="footer__blog">


                        <a href="" class="footer__blog-img">
                            <img src="./assets/image/blog/46-00.jpg" alt="">
                        </a>


                        <div class="footer__blog-content">
                            <a href="" class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                aliquam dolorum fugit rem sequi velit!.</a>
                            <p>Lorem İpsum – dizayn nəşrlərində istifadə olunan düzgün olmayan mətndir.Dəqiq quruluşa...
                                <br>
                                <a href="">DAVAMINI OXU </a></p>
                        </div>
                    </div>

                </div>

                <div class="counter col-xl-2 col-lg-2 col-md-3">
                    <img class="" src="./assets/image/icon/shotchik.gif" alt="">
                </div>

            </div>

        </div>


    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    Copyright © 2018-2022.
                </div>
            </div>
        </div>

    </div>

</footer>

<script type="text/javascript" src="./assets/js/app.js"></script></body>
</html>
