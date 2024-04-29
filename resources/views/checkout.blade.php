<x-layout>
    <x-navbar/>
    <div class="font-[sans-serif] bg-gray-50">
        <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-4 h-full">
            <div class="bg-[#3f3f3f] lg:h-screen lg:sticky lg:top-0">
                <div class="relative h-full">
                    <div class="p-8 lg:overflow-auto lg:h-[calc(100vh-60px)]">
                        <h2 class="text-2xl font-bold text-white">Order Summary</h2>
                        <div class="space-y-6 mt-10">
                            @foreach($order as $item)
                            <div class="grid sm:grid-cols-2 items-start gap-6">
                                <div class="px-4 py-6 shrink-0 bg-gray-50 rounded-md">
                                    <img src='{{$item['ProductPicture']}}' class="w-full object-contain" />
                                </div>
                                <div>
                                    <h3 class="text-base text-white">Brand: {{$item['BrandName']}}</h3>
                                    <ul class="text-xs text-white space-y-3 mt-4">

                                        <li id="quantity" class="flex flex-wrap gap-4">Quantity <span class="ml-auto">2</span></li>
                                        <li id="total" class="flex flex-wrap gap-4">Per Price <span class="ml-auto">{{$item['ProductPrice']}}</span></li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="absolute left-0 bottom-0 bg-[#444] w-full p-4">
                        <h4 id="grand"  class="flex flex-wrap gap-4 text-base text-white"> <span class="ml-auto">{{$item['ProductPrice']}}</span></h4>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-2 h-max rounded-md p-8 sticky top-0">
                <h2 class="text-2xl font-bold text-[#333]">Complete your order</h2>
                <form class="mt-10" action="/checkout" method="post">
                    @csrf
                    <input id="quantityinput" type="hidden" name="quantity" value="">
                    <input id="totalinput" type="hidden" name="total" value="">


                    <div class="mt-6">
                        <h3 class="text-lg font-bold text-[#333] mb-6">Shipping Address</h3>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <input type="text" placeholder="Address Line" name="address"
                                   class="px-4 py-3.5 bg-white text-[#333] w-full text-sm border-b-2 focus:border-[#333] outline-none" />

                        </div>
                        <div class="flex gap-6 max-sm:flex-col mt-10">
                            <button type="button" class="rounded-md px-6 py-3 w-full text-sm font-semibold bg-transparent hover:bg-gray-100 border-2 text-[#333]">Cancel</button>
                            <button type="submit" class="rounded-md px-6 py-3 w-full text-sm font-semibold bg-[#333] text-white hover:bg-[#222]">Complete Purchase</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let quantity=localStorage.getItem('Quantity')
        document.getElementById('quantity').textContent='Quantity:  '+quantity
        let totalprice=document.getElementById('total').textContent
       let converting=totalprice.replace(/\D/g,'');
        console.log(converting);
        let totalint=parseInt(converting);
        let mul=quantity*totalint;
        console.log(mul)
        document.getElementById('grand').textContent="Total      "+ mul +'PKR'
        document.getElementById('quantityinput').value=quantity
        document.getElementById('totalinput').value= mul +'PKR'


    </script>
</x-layout>
