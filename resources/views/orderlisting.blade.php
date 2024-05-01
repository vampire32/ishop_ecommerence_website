<x-layout>
    <x-adminnav/>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>


                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Product Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    User Email
                </th>
                <th scope="col" class="px-6 py-3">
                    User Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">

                <td class="px-6 py-4">
                    {{$order->ProductName}}
                </td>
                <td class="px-6 py-4">
                    {{$order->ProductPrice}}
                </td>
                <td class="px-6 py-4">
                    {{$order->Quantity}}
                </td>
                <td class="px-6 py-4">
                    {{$order->name}}
                </td>
                <td class="px-6 py-4">
                    {{$order->email}}
                </td>
                <td class="px-6 py-4">
                    {{$order->Address}}
                </td>
                <td class="px-6 py-4">
                    <form action="/admin/orders" method="post">
                        @csrf
                        <input type="hidden" name="orderid" value="{{$order->id}}">

                        <select name="status" id="status">
                            <option value="{{$order->status}}" selected>{{$order->status}}</option>
                            <option value="Shipping">Shipping</option>
                            <option value="Deliverd">Deliverd</option>
                            <option value="Pending">Pending</option>
                        </select>
                        <button type="submit" >update</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-layout>
