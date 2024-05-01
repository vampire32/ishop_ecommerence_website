@props(['ratings'])



<section class="py-24 relative">
    <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">
        <h2 class="font-manrope font-bold text-4xl text-black text-center mb-11">People Love Us</h2>
        <div class="grid grid-cols-12 py-6 border-y border-gray-200 mb-11">

            <div class="col-span-12 lg:col-span-2 max-lg:hidden">
                <h5 class="font-manrope font-semibold text-2xl leading-9 text-black text-center">Reviews</h5>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-8">

            @foreach($ratings as $rating)

                <div class="grid grid-cols-12 max-w-sm sm:max-w-full mx-auto">
                    <div class="col-span-12 lg:col-span-10 ">
                        <div class="sm:flex gap-6">

                            <div class="text">
                                <p class="font-medium text-lg leading-8 text-gray-900 mb-2">{{$rating->name}}</p>

                                <p class="font-normal text-base leading-7 text-gray-400 mb-4 lg:pr-8">{{$rating->message}}</p>

                            </div>
                        </div>
                    </div>
                    <div
                        class="col-span-12 lg:col-span-2 max-lg:hidden flex lg:items-center flex-row lg:flex-col justify-center max-lg:pt-6 ">

                        <p class="font-medium text-lg leading-8 text-gray-400 lg:text-center whitespace-nowrap">{{$rating->created_at}}</p>
                    </div>
                </div>

            @endforeach


            <div class="pb-8 border-b border-gray-100 w-full"></div>

        </div>
    </div>
</section>
