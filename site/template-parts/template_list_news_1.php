<?php
// $banners = [
//   ['link' => 'https://google.com', 'img' => URL . '/img/true_banners/banner_320_250.jpg'],
//   ['link' => 'https://google.com', 'img' => URL . '/img/true_banners/banner_300_600.jpg'],
//   ['link' => 'https://google.com', 'img' => URL . '/img/true_banners/banner_320_250.jpg'],
//   ['link' => 'https://google.com', 'img' => URL . '/img/true_banners/banner_550_150.jpg'],
//   ['link' => 'https://google.com', 'img' => URL . '/img/true_banners/banner_300_250.jpg']
// ];

// $banners = json_encode($banners);
?>
<!-- 
if has banners add class "has-banner"
else
add class "no-banner" 
-->
<div class="row list-cards-row art-js-banners has-banner">

  <!-- 
  template_list_news_1
 home main section
-->

  <div class="banner display-mobile col-lg-12 row-banner" data-index="0">
    <!-- <div id="adriverBanner">
      <a href='https://google.com' target="_blank">
        <img src='/img/true_banners/banner_320_250.jpg' alt="preview image" />
      </a>
    </div> -->
    <!--  AdRiver code START. Type:AjaxJS Site: beauty BN:8 -->
    <div id="adriver_banner_1143170111"></div>
    <script type="text/javascript">
      new adriver("adriver_banner_1143170111", {
        sid: 210980,
        bt: 52,
        bn: 8
      });
    </script>

    <!--  AdRiver code END  -->

  </div>

  <!-- 0 -->
  <div class="art-card-col">

    <div class="card">

      <a href="#" class="thumb hover-overlay hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/01.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Косметичка Редактора</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Личный опыт: как я две недели тестировала Achronim
        </a>

        <div class="card-author fs-xm">
          <a href="#">Анжелика Баклага</a> • 7 минут чтения
        </div>

      </div>
    </div>

  </div>





  <!-- 1 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/02.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Новости</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          В Wish-List: многоразовая самоочищающаяся бутылка
        </a>

        <div class="card-author fs-xm">
          <a href="#">Анжелика Баклага</a> • 7 минут чтения
        </div>

      </div>
    </div>
  </div>



  <!-- 2 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/03.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Красота и косметика</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          10 средств, которые можно купить со скидкой на этой неделе
        </a>

        <div class="card-author fs-xm">
          <a href="#">Анжелика Баклага</a> • 7 минут чтения
        </div>

      </div>
    </div>
  </div>



  <!-- 3 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/04.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Красота и косметика</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Дайджест: лучшие бьюти-события прошедшей недели
        </a>

        <div class="card-author fs-xm">
          <a href="#">Анжелика Баклага</a> • 7 минут чтения
        </div>

      </div>
    </div>
  </div>



  <!-- display-desktop display-tablet -->
  <div class="art-card-col  vertical-banner" data-index="1">
    <div class="card banner">
      <div class="shadow-both display-desktop">
        <!-- <div id="adriverBanner2">
          <a href="https://google.com" target="_blank" class="thumb mb-0 hover-overlay">
            <img src="/img/true_banners/banner_300_600.jpg" alt="preview image" />
          </a>
        </div> -->
        <!--  AdRiver code START. Type:AjaxJS Site: beauty BN:3 -->
        <div id="adriver_banner_1611279608"></div>
        <script type="text/javascript">
          new adriver("adriver_banner_1611279608", {
            sid: 210980,
            bt: 52,
            bn: 3
          });
        </script>
        <!--  AdRiver code END  -->
      </div>
      <div class="shadow-both display-tablet">
        <!--  AdRiver code START. Type:AjaxJS Site: beauty BN:7 -->
        <div id="adriver_banner_1511748259"></div>
        <script type="text/javascript">
          new adriver("adriver_banner_1511748259", {
            sid: 210980,
            bt: 52,
            bn: 7
          });
        </script>

        <!--  AdRiver code END  -->

      </div>
    </div>
  </div>




  <!-- 4 -->
  <div class="art-card-col">
    <div class="card">

      <a href="https://youtu.be/VVwfRAwTUxw" class="thumb hover-overlay" data-fancybox>
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/05.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <span class="play-ico white white">
          <?= $svg->get_ico('play'); ?>
        </span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Материнство</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="https://youtu.be/VVwfRAwTUxw" class="card-title fs-xl" data-fancybox>
          13 фраз, которые нельзя говорить ребенку
        </a>

        <div class="card-author fs-xm">
          <a href="#">Анжелика Баклага</a> • 7 минут чтения
        </div>

      </div>
    </div>

  </div>




  <div class="banner display-mobile col-lg-12 row-banner" data-index="2">
    <!-- <div id="adriverBanner4">
      <a href="https://google.com" target="_blank">
        <img src="/img/true_banners/banner_320_250.jpg" alt="preview image" />
      </a>
    </div> -->
    <!--  AdRiver code START. Type:AjaxJS Site: beauty BN:9 -->
    <div id="adriver_banner_1097999900"></div>
    <script type="text/javascript">
      new adriver("adriver_banner_1097999900", {
        sid: 210980,
        bt: 52,
        bn: 9
      });
    </script>

    <!--  AdRiver code END  -->

  </div>





  <!-- 5 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/06.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Красота и косметика</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Как модели Victoria Secret выглядят на пляже и вне студий?
        </a>

        <div class="card-author fs-xm">
          <a href="#">Анжелика Баклага</a> • 7 минут чтения
        </div>

      </div>
    </div>
  </div>


  <!-- 6 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#videoCard6" class="thumb hover-overlay" data-fancybox>
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/07.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <span class="play-ico white">
          <?= $svg->get_ico('play'); ?>
        </span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Вопрос эксперту</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Кокосовое масло объявили вне ЗОЖ: действительно ли оно такое вредное?
        </a>

        <div class="card-author fs-xm">
          <a href="#">Анжелика Баклага</a> • 7 минут чтения
        </div>

      </div>
    </div>

    <div id="videoCard6" class="card-loop-video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/6JnGBs88sL0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

  </div>


  <!-- 7 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/09.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Папа может</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Как муж за небольшую сумму обустроил балкон в нашей квартире
        </a>

        <div class="card-author fs-xm">
          <a href="#">Алескей Беляков</a> • 7 минут чтения
        </div>

      </div>
    </div>
  </div>


  <!-- 8 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/10.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Материнство</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Младенцентризм: как ребенок становится центром нашей вселенной?
        </a>

        <div class="card-author fs-xm">
          <a href="#">Алексей Беляков</a> • 7 минут чтения
        </div>

      </div>
    </div>
  </div>





  <div class="col-lg-12 banner display-desktop display-tablet row-banner" data-index="3">
    <div class="dashed-shadow display-desktop">
      <span class="shadow"></span>
      <!-- <div id="adriverBanner3">
        <a href="https://google.com">
          <img src="/img/true_banners/banner_550_150.jpg" alt="preview image" />
        </a>
      </div> -->
      <!--  AdRiver code START. Type:AjaxJS Site: beauty BN:10 -->
      <div id="adriver_banner_674925246"></div>
      <script type="text/javascript">
        new adriver("adriver_banner_674925246", {
          sid: 210980,
          bt: 52,
          bn: 10
        });
      </script>

      <!--  AdRiver code END  -->

    </div>

    <div class="dashed-shadow display-tablet">
      <span class="shadow"></span>
      <!--  AdRiver code START. Type:AjaxJS Site: beauty BN:11 -->
      <div id="adriver_banner_851242586"></div>
      <script type="text/javascript">
        new adriver("adriver_banner_851242586", {
          sid: 210980,
          bt: 52,
          bn: 11
        });
      </script>

      <!--  AdRiver code END  -->

    </div>
  </div>



  <!-- 9 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/11.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Еда</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Худейте со вкусом: полезное меню на неделю
        </a>

        <div class="card-author fs-xm">
          <a href="#">Анжелика Баклага</a> • 14 минут чтения
        </div>

      </div>
    </div>
  </div>




  <div class="banner display-mobile col-lg-12 row-banner" data-index="4">
    <div class="dashed-shadow">
      <span class="shadow"></span>
      <!-- <div id="adriverBanner3">
        <a href="https://google.com">
          <img src="/img/true_banners/banner_300_250.jpg" alt="preview image" />
        </a>
      </div> -->
      <!--  AdRiver code START. Type:AjaxJS Site: beauty BN:12 -->
      <div id="adriver_banner_423644461"></div>
      <script type="text/javascript">
        new adriver("adriver_banner_423644461", {
          sid: 210980,
          bt: 52,
          bn: 12
        });
      </script>

      <!--  AdRiver code END  -->

    </div>
  </div>





  <!-- 10 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/12.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Астрология</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Астрология: Dior создали ароматы для каждого знака зодиака
        </a>

        <div class="card-author fs-xm">
          <a href="#">Маргарита Лиева</a> • 7 минут чтения
        </div>

      </div>
    </div>
  </div>


  <!-- 11 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/13.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Путешествия</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Пицца, велосипеды, селфи: непафосный отдых в Италии
        </a>

        <div class="card-author fs-xm">
          <a href="#">Анжелика Баклага</a> • 14 минут чтения
        </div>

      </div>
    </div>
  </div>


  <!-- 12 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/14.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Путешествия</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          10 лучших фестивалей на открытом воздухе этого лета
        </a>

        <div class="card-author fs-xm">
          <a href="#">Анжелика Баклага</a> • 14 минут чтения
        </div>

      </div>
    </div>
  </div>


  <!-- 13 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/15.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>

      <div class="card-meta">
        <a href="#" class="cat fs-xm">Красота и здоровье</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          10 фотоисторий Петера Линдберга об истинной красоте
        </a>

        <div class="card-author fs-xm">
          <a href="#">Маргарита Лиева</a> • 7 минут чтения
        </div>

      </div>
    </div>
  </div>


  <!-- 14 -->
  <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/16.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>


      <div class="card-meta">
        <a href="#" class="cat fs-xm">Красота и здоровье</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Почему 8 часов сна – обязательная норма для кажого?
        </a>
        <div class="card-author fs-xm">
          <a href="#">Маргарита Лиева</a> • 7 минут чтения
        </div>
      </div>

    </div>
  </div>




    <!-- 15 -->
    <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/16.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>


      <div class="card-meta">
        <a href="#" class="cat fs-xm">Красота и здоровье</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Почему 8 часов сна – обязательная норма для кажого?
        </a>
        <div class="card-author fs-xm">
          <a href="#">Маргарита Лиева</a> • 7 минут чтения
        </div>
      </div>

    </div>
  </div>




    <!-- 16 -->
    <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/16.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>


      <div class="card-meta">
        <a href="#" class="cat fs-xm">Красота и здоровье</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Почему 8 часов сна – обязательная норма для кажого?
        </a>
        <div class="card-author fs-xm">
          <a href="#">Маргарита Лиева</a> • 7 минут чтения
        </div>
      </div>

    </div>
  </div>




    <!-- 17 -->
    <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/16.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>


      <div class="card-meta">
        <a href="#" class="cat fs-xm">Красота и здоровье</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Почему 8 часов сна – обязательная норма для кажого?
        </a>
        <div class="card-author fs-xm">
          <a href="#">Маргарита Лиева</a> • 7 минут чтения
        </div>
      </div>

    </div>
  </div>



    <!-- 18 -->
    <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/16.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>


      <div class="card-meta">
        <a href="#" class="cat fs-xm">Красота и здоровье</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Почему 8 часов сна – обязательная норма для кажого?
        </a>
        <div class="card-author fs-xm">
          <a href="#">Маргарита Лиева</a> • 7 минут чтения
        </div>
      </div>

    </div>
  </div>



    <!-- 19 -->
    <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/16.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>


      <div class="card-meta">
        <a href="#" class="cat fs-xm">Красота и здоровье</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Почему 8 часов сна – обязательная норма для кажого?
        </a>
        <div class="card-author fs-xm">
          <a href="#">Маргарита Лиева</a> • 7 минут чтения
        </div>
      </div>

    </div>
  </div>



    <!-- 20 -->
    <div class="art-card-col">
    <div class="card">

      <a href="#" class="thumb hover-overlay">
        <img class="object-cover" src="<?= URL; ?>img/news-block-home/16.jpg" alt="как я две недели тестировала Achronim">
        <span class="card-date fs-xm">Сегодня в 11:47</span>
        <div class="overlay fs-xxm">
          <div class="overlay-content">
            <span>
              читать полностью
            </span>
          </div>
        </div>
      </a>


      <div class="card-meta">
        <a href="#" class="cat fs-xm">Красота и здоровье</a>
        <div class="views">
          <span class="ico eye">
            <?= $svg->get_ico('eye'); ?>
          </span>
          <span class="count fs-s">2k</span>
        </div>
      </div>

      <div class="card-content">
        <a href="#" class="card-title fs-xl">
          Почему 8 часов сна – обязательная норма для кажого?
        </a>
        <div class="card-author fs-xm">
          <a href="#">Маргарита Лиева</a> • 7 минут чтения
        </div>
      </div>

    </div>
  </div>







</div>