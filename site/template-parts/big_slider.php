<section class="section big-slider-section">


  <div class="container-fluid full">
    <div class="row big-slider-row">
      <div class="col-12 big-slider-col">

        <div class="big-slider slick">

          <?php
          for ($i = 0; $i < 30; $i++) {
          ?>

            <div class="slick-item overlay-bottom">
              <img class="object-cover" src="<?= URL; ?>img/big-slider/01.jpg" alt="slider item">
              <div class="slick-content">
                <a href="#" class="slick-title fs-lg">
                  Равшана Куркова: без чего ее
                  <br>
                  утро не будет добрым
                </a>
              </div>
            </div>

          <?php
          }
          ?>



          <div class="slick-item overlay-bottom">
            <img class="object-cover" src="<?= URL; ?>img/big-slider/02.jpg" alt="slider item">
            <div class="slick-content">
              <a href="#" class="slick-title fs-lg">
                Равшана Куркова: без чего ее
                <br>
                утро не будет добрым
              </a>
            </div>
          </div>

        </div>
        <div class="slick-arrows-container">
        </div>
        <div class="slick-dots-container">
        </div>

      </div>
    </div>
  </div>


  <div class="container-fluid under-slider-container">
    <?php
    require('template-new-news-list.php');
    ?>
  </div>

</section>