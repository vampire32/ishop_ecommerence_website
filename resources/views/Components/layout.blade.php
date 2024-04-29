<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ishop</title>


        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/585b384717.js" crossorigin="anonymous"></script>
        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

        <script type="module">
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

  const swiper = new Swiper(...)
</script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const openCartButton = document.getElementById('openCartButton');
                const modal = document.getElementById('cartModal');
                const close = document.getElementsByClassName('close')[0];
                const cartItems = document.getElementById('cartItems');

                openCartButton.addEventListener('click', function () {
                  modal.style.visibility='visible'
                });



            });
        </script>


    </head>
    <body>
        {{$slot}}

    </body>
</html>
