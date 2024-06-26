<x-layout>
    <x-navbar/>
    <div class="h-screen bg-gray-300">
        <div class="py-12">


            <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg  md:max-w-5xl">
                <div class="md:flex ">
                    <div class="w-full p-4 px-5 py-5">

                        <div class="md:grid md:grid-cols-3 gap-2 ">

                            <div class="col-span-2 p-5">

                                <h1 class="text-xl font-medium ">Shopping Cart</h1>
                                @if(!$condition)
                                    <p class="mt-5 ml-4 text-red-600 font-bold text-[28px]">Please add product on cart</p>

                                @else

                                    @foreach($order as $item)


                                    <div class="flex justify-between items-center mt-6 pt-6">
                                        <div class="flex  items-center">
                                            <img src="{{$item['ProductPicture']}}" width="60" class="rounded-full ">

                                            <div class="flex flex-col ml-3">
                                                <span class="md:text-md font-medium">{{$item['ProductName']}}</span>
                                                <span class="text-xs font-light text-gray-400">#{{$item['id']}}</span>

                                            </div>


                                        </div>

                                        <div class="flex justify-center items-center">

                                            <div class="pr-8 flex ">

                                                <input  id="increament" type="text" class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2" value="1"/>
                                                <span onclick="incrementproduct()" id="plusbutton" class="font-semibold">+</span>
                                            </div>

                                            <div class="pr-8 ">

                                                <span class="text-xs font-medium">{{$item['ProductPrice']}}</span>
                                            </div>


                                        </div>

                                    </div>
                                    @endforeach


                                @endif



                            </div>
                            <div class=" p-5 bg-gray-800 rounded overflow-visible">

                                <span class="text-xl font-medium text-gray-100 block pb-3">Card Details</span>

                                <span class="text-xs text-gray-400 ">Card Type</span>

                                <div class="overflow-visible flex justify-between items-center mt-2">




                                    <div class="rounded w-52 h-28 bg-gray-500 py-2 px-4 relative right-10">

                                        <span class="italic text-lg font-medium text-gray-200 underline">VISA</span>

                                        <div class="flex justify-between items-center pt-4 ">

                                            <span class="text-xs text-gray-200 font-medium">****</span>
                                            <span class="text-xs text-gray-200 font-medium">****</span>
                                            <span class="text-xs text-gray-200 font-medium">****</span>
                                            <span class="text-xs text-gray-200 font-medium">****</span>

                                        </div>

                                        <div class="flex justify-between items-center mt-3">

                                            <span class="text-xs  text-gray-200">Giga Tamarashvili</span>
                                            <span class="text-xs  text-gray-200">12/18</span>
                                        </div>



                                    </div>






                                    <div class="flex justify-center  items-center flex-col">

                                        <img src="https://img.icons8.com/color/96/000000/mastercard-logo.png" width="40" class="relative right-5" />
                                        <span class="text-xs font-medium text-gray-200 bottom-2 relative right-5">mastercard.</span>

                                    </div>

                                </div>




                                <div class="flex justify-center flex-col pt-3">
                                    <label class="text-xs text-gray-400 ">Name on Card</label>
                                    <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="Giga Tamarashvili">
                                </div>


                                <div class="flex justify-center flex-col pt-3">
                                    <label class="text-xs text-gray-400 ">Card Number</label>
                                    <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="****     ****      ****      ****">
                                </div>




                                <div class="grid grid-cols-3 gap-2 pt-2 mb-3">

                                    <div class="col-span-2 ">

                                        <label class="text-xs text-gray-400">Expiration Date</label>
                                        <div class="grid grid-cols-2 gap-2">

                                            <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="mm">
                                            <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="yyyy">

                                        </div>



                                    </div>

                                    <div class="">
                                        <label class="text-xs text-gray-400">CVV</label>
                                        <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="XXX">

                                    </div>

                                </div>





                                <a href="/checkout"  class="h-12 w-full bg-blue-500 rounded focus:outline-none text-white hover:bg-blue-600">Check Out</a>










                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let plusbutton=document.getElementById('plusbutton');
        let increament=document.getElementById('increament').value;
        console.log(increament);
        let increamentvalue=parseInt(increament);
        let sum=1;
        const incrementproduct=()=>{
            for (let i=1;i<=increamentvalue;i++){
                sum+=i;
            }
            let sumsrting=sum.toString();

            let increament2=document.getElementById('increament').value=sumsrting
            localStorage.setItem('Quantity',increament2)
            console.log(increament2)
        }




    </script>
</x-layout>

