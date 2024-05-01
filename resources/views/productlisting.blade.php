<x-layout>
    <x-adminnav/>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Brand Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th id="editid" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$product['id']}}
                </th>
                <td  class="px-6 py-4">
                    {{$product['ProductName']}}
                </td>
                <td class="px-6 py-4">
                    {{$product['BrandName']}}
                </td>
                <td class="px-6 py-4">
                    {{$product['Category']}}
                </td>
                <td class="px-6 py-4">
                    {{$product['ProductPrice']}}
                </td>
                <td class="px-6 py-4">
                    <button onclick="openModel({{json_encode($product)}})" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" data-product="{{json_encode($product)}}" >Edit</button>

                    <form type="hidden" action="/admin/products" method="post">
                        @csrf
                        <input  type="hidden" name="productid" value="{{$product['id']}}">
                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach

            </tbody>
        </table>

    </div>
    <div id="modelbox" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                       Update Product
                    </h3>
                    <button onclick="closeModel()"  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="/admin/products/update" method="post" class="p-4 md:p-5">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <input type="hidden" name="productid" value="" id="productid" >
                            <label for="ProductName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="ProductName" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="ProductPrice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                            <input type="text" name="ProductPrice" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  >
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="Category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <input type="text" name="Category" id="Category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  >
                        </div>
                        <div class="col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                            <textarea name="ProductDescription" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Update product
                    </button>
                </form>
            </div>
        </div>
    </div>


    <script>
        const openModel = (product) => {
            let modal = document.getElementById('modelbox');
            modal.style.display = 'flex';

            // Populate modal fields with product data
            document.getElementById('productid').value = product.id;
            document.getElementById('name').value = product.ProductName;
            document.getElementById('price').value = product.ProductPrice;
            document.getElementById('Category').value = product.Category;
            document.getElementById('description').textContent = product.ProductDescription;
        }

        const closeModel = () => {
            let modal = document.getElementById('modelbox');
            modal.style.display = 'none';
        }
    </script>

</x-layout>
