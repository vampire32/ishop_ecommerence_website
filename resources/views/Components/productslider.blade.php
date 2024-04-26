<style>
     .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
</style>
<div class="swiper mySwiper mt-5">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <x-productcard ProductName="kurta" />
      </div>
      <div class="swiper-slide">
        <x-productcard/>
      </div>
      <div class="swiper-slide">
        <x-productcard/>
</div>
      <div class="swiper-slide">
        <x-productcard/>
</div>
      <div class="swiper-slide">
        <x-productcard/>
</div>
      <div class="swiper-slide">
        <x-productcard/>
</div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>

  </div>

   <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
