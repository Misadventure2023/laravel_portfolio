@include('partials.adminheader')

<div class="container">
    <div class="bg-white w-full shadow rounded">
        <p class="text-2xl font-bold p-2 ">Orders</p>
    </div>

    <div class="flex justify-end items-center mb-2 mt-10 mx-4">
        <div class=" bg-gray-600 rounded p-1 inline-block">
            <svg  class=" w-6 h-6 font-bold text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
            </svg>
        </div>  
        <input type="text" id="search" class="py-1 pl-4 pr-12 outline-none w-full md:w-1/2 transition-width duration-500  border-b-2 focus:border-sky-300">            
    </div>

    <div class="overflow-auto  shadow rounded mx-4 md:mx-0 ">
        
        <table class="bg-white w-full text-xs table-auto text-left" id="table">
            <thead class="border-b uppercase bg-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Order#</th>
                    <th scope="col" class="px-6 py-3">Order Date</th>
                    <th scope="col" class="px-6 py-3">Order Qty</th>
                    <th scope="col" class="px-6 py-3">Total Amount</th>
                    <th scope="col" class="px-6 py-3">Store</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $orders)
                    <tr class="border-b " >
                        <td class="px-6 py-3">{{$orders->id}}</td>
                        <td class="px-6 py-3">{{$orders->order_no}}</td>
                        <td class="px-6 py-3">{{$orders->created_at}} </td>
                        <td class="px-6 py-3">{{$orders->qty}} </td>
                        <td class="px-6 py-3">{{$orders->amount}} </td>
                        <td class="px-6 py-3">{{$orders->store}} </td>
                        <td class="px-6 py-3">{{$orders->status}}</td>
                        <td class="px-6 py-3">Action</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$order->links()}} <!-- Pagination Link-->
</div>



@include('partials.adminFooter')