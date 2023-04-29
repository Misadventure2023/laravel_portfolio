
    <div class="p-4 bg-white shadow-sm">
        <div class="flex flex-row-reverse md:flex-row justify-between">
            <img class="w-12 mx-4 " src="{{URL::asset('assets/img/logo.png')}}" alt="">
        
            <span>
                <svg class="cursor-pointer w-6 md:hidden" id="burger" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </span>
        </div>
    </div>
    <nav class="w-48 -ml-48 min-h-screen transition-all ease-out duration-500 md:ml-0 bg-white shadow sticky z-10" id="sidebar"> <!-- navigation -->
      
        <ul class="text-gray-700 text-sm py-10">
            <li class="px-4 py-3">
                <a href="/admin">Dashboard</a>
            </li>
            <li class="px-4 py-3">
                <a href="#">Products</a>
            </li>
            <li class="px-4 py-3 cursor-pointer flex justify-between  " id="orderProcess">
               <a href="#">Order</a>   
                <svg class="w-5 mr-4 inline-block rotate-180 transition-all duration-500" id="arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                  </svg>    
                           
            </li>
            <ul class="hidden" id="orderDropdown">
                <li class="px-6 py-2" ><a href="/admin/order">All Order</a></li>
                <li class="px-6 py-2" ><a href="#">To Process</a></li>
                <li class="px-6 py-2"><a href="#">To ship</a></li>
                <li class="px-6 py-2"><a href="#">Shipping</a></li>
            </ul>
            <li class="px-4 py-3">
                <a href="#">Complaints</a>
            </li>
        </ul>
    </nav>