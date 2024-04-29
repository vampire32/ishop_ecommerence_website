@props(['products'])
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
        @foreach($products as $item)
      <div class="swiper-slide">
          <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <a href="/product/{{$item['id']}}">
                  <img class="rounded-t-lg w-[50%]" src="{{$item['ProductPicture']}}" alt="" />
              </a>
              <div class="p-5">
                  <a href="/product/{{$item['id']}}">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$item['ProductName']}}</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$item['ProductDescription']}}</p>

              </div>
          </div>
      </div>
        @endforeach

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
