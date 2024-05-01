<x-layout>
    <x-navbar/>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{$product['ProductPicture']}}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$product['BrandName']}}</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$product['ProductName']}}</h1>
                    <div class="flex mb-4">
          <span class="flex items-center">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <span class="text-gray-600 ml-3">4 Rating</span>
          </span>

                    </div>
                    <p class="leading-relaxed mb-4">{{$product['ProductDescription']}}</p>

                    <div class="flex">
                        <span class="title-font font-medium text-2xl text-gray-900">{{$product['ProductPrice']}}</span>

                        <form  type="hidden" action="/cart" method="post">
                            @csrf
                            <input type="hidden" name="productname" value="{{$product['ProductName']}}" />
                            <input type="hidden" name="productprice" value="{{$product['ProductPrice']}}" />
                            <input type="hidden" name="productpicture" value="{{$product['ProductPicture']}}" />
                            <div class="flex">
                                <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" >Add Cart</button>
                                <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Buy Now</button>

                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-ratings :ratings="$ratings" />
    <form action="/rating" method="post" class="mt-16 flex w-full flex-col border rounded-lg bg-white p-8">
        @csrf
        <h2 class="title-font mb-1 text-lg font-medium text-gray-900">Feedback</h2>
        <p class="mb-5 leading-relaxed text-gray-600">If you had any issues or you liked our product, please share
            with us!
        </p>
        <div class="mb-4">
            <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full rounded border border-gray-300 bg-white py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
        </div>
        <div class="mb-4">
            <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
            <textarea id="message" name="message" class="h-32 w-full resize-none rounded border border-gray-300 bg-white py-1 px-3 text-base leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"></textarea>
        </div>
        <button type="submit" class="rounded border-0 bg-indigo-500 py-2 px-6 text-lg text-white hover:bg-indigo-600 focus:outline-none">Send</button>

    </form>
</x-layout>
