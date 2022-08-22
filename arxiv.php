<div class="blog-content">
    <!--   <p>Bir çoxumuz Exceli işlərimizi avtomatlışdırmaq üçün istifadə edirik. İstəyirik ki, bir
           dəfə
           cədvəlimizi və funksiyalarımızı quraq və daha sonra eyni əziyyəti çəkmiyək. Bu şəkildə,
           həmin
           Excel faylında həm hesabatlarımız, həm də arxivlədiyimiz məlumatlar olsun və istənilən
           vaxt
           həmin bazadan istifadə edək.</p>

       <p>Ancaq, bunu etməyə çalışarkən cədvəllərimiz üçün düzgün struktur yaratmır və bir müddət
           keçdikdən
           sonra iş çıxılmaz vəziyyət alır. Belə ki, cədvəllər elə bir vəziyyər alır ki, hesabat
           almaq
           çox
           çətinləşir hətta sadə filter əməliyyatı çox əziyyətli olmağa başlayır.</p>

       <p>Bu məqalədə, əvvəlcə ən düzgün bazalama forması göstəriləcək, daha sonra isə, digər
           cədvəl
           növlərinin bizlərə nə kimi çətinlik yaratdığı haqqında yazmağa çalışacam. Əslində qeyd
           olunan
           metod heç də yeni deyil. SQL Server kimi proqramlarla işləyən proqramistlərin hər zaman
           istifadə
           etdiyi cədvəl növüdür. Ancaq Excel istifadəçilərində baza qurmaq seçimi sərbəst olduğu
           və
           bazalar haqqında ilkin məlumatlarının olmadığı üçün bu problem ilə tez tez
           qarşılaşılır.</p>

       <h4>Tabular Cədvəllər</h4>

       <p>Bazanın qurulması üçün ən uyğun cədvəl növüdür. Bu cədvəllərdə hər bir məlumat növü ayrı
           sütunda
           göstərilir. Bu formatlı cədvəllərdə istənilən məlumat almaq üçün filter tətbiqi və
           funksiyaların
           qurulumu daha sadə olur. Nümunə format bu şəkildədir.</p>

       <img class="center" src="./assets/image/blog/51-01.jpg" alt="">
       <p></p>
       <p>Yeni məlumat əlavə olunduğunda cədvəlin son sətrindən sonra əlavə olunduğu üçün
           funksiyaları
           da
           yeniləməyə ehtiyac qalmır. Bu formada olan cədvəllərdən hesabat yaratmaq da daha asan
           olur.
           Baza
           yaradarkən bəzi nüanslara da diqqət yetirmək lazımdır:</p>-->
</div>


//// blog img ilk shekil

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



//// sherh

<div class="comment-wrap__item">

    <div class="comment-wrap__info">
        <h5 class="comment-wrap__name">Morri Mortalmente</h5>
        <p class="comment-wrap__date">15.07.2022</p>
    </div>

    <p class="comment-wrap__text">Like some people said You next generation people don't let
        this song die out, it's such a
        bop</p>

</div>