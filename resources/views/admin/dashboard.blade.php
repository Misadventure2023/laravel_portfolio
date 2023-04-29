@include('partials.adminheader')
<div> <!-- Dashboard Container-->
    <!-- Card Here -->
    <div class="flex flex-col md:flex-row gap-2 mx-2 md:mx-0">
        <div class="bg-white shadow md:w-72 w-full  rounded-lg mx-auto md:mx-0 max-h-24">
            <div class="flex items-center  h-24 p-4">
                <div class="h-12 w-12 bg-gradient-to-bl from-sky-500 to-blue-700 rounded-lg flex items-center">
                <svg class="h-8 text-white fill-white mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>
                </div>
                <div class=" flex flex-col flex-grow gap-2 mx-4 ">
                
                        <p class="text-gray-400 text-sm  font-medium tracking-wide">Revenue</p>
                        <span class="text-gray-700 font-bold text-xl">$20,000</span>
                
                </div>
                <div class="flex-shrink-0 self-end">
                    <span class="font-medium text-xs px-2 text-center text-green-600 bg-green-200 rounded-full">
                        + 2.65%
                    </span>
                </div>
            </div>
        </div>

        <div class="bg-white shadow md:w-72 w-full rounded-lg mx-auto md:mx-0 max-h-24">
            <div class="flex items-center  h-24 p-4">
                <div class="h-12 w-12 bg-gradient-to-bl from-sky-500 to-blue-700 rounded-lg flex items-center">
                    <svg class="h-8 text-white fill-white mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" >
                        <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class=" flex flex-col flex-grow gap-2 mx-4 ">
                        <p class="text-gray-400 text-sm  font-medium tracking-wide">Orders</p>
                        <span class="text-gray-700 font-bold text-xl">20,000</span>
                </div>
                <div class="flex-shrink-0 self-end">
                    <span class="font-medium text-xs px-2 text-center text-red-500 bg-red-200 rounded-full">
                        - 0.82%
                    </span>
                </div>
            </div>
        </div>

        <div class="bg-white shadow md:w-72 w-full  rounded-lg mx-auto md:mx-0 max-h-24">
            <div class="flex items-center  h-24 p-4">
                <div class="h-12 w-12 bg-gradient-to-bl from-sky-500 to-blue-700 rounded-lg flex items-center">
                    <svg class="h-8 text-white fill-white mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" >
                        <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                    </svg>
                </div>
                <div class=" flex flex-col flex-grow gap-2 mx-4 ">
                        <p class="text-gray-400 text-sm  font-medium tracking-wide">Customers</p>
                        <span class="text-gray-700 font-bold text-xl">20,000</span>
                </div>
                <div class="flex-shrink-0 self-end">
                    <span class="font-medium text-xs px-2 text-center text-red-500 bg-red-200 rounded-full">
                        - 0.82%
                    </span>
                </div>
            </div>
        </div>
        <div class="bg-white shadow md:w-72 w-full  rounded-lg mx-auto md:mx-0 max-h-24">
            <div class="flex items-center  h-24 p-4">
                <div class="h-12 w-12 bg-gradient-to-bl from-sky-500 to-blue-700 rounded-lg flex items-center">
                    <svg class="h-8 text-white fill-white mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" >
                        <path d="M15.75 8.25a.75.75 0 01.75.75c0 1.12-.492 2.126-1.27 2.812a.75.75 0 11-.992-1.124A2.243 2.243 0 0015 9a.75.75 0 01.75-.75z" />
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM4.575 15.6a8.25 8.25 0 009.348 4.425 1.966 1.966 0 00-1.84-1.275.983.983 0 01-.97-.822l-.073-.437c-.094-.565.25-1.11.8-1.267l.99-.282c.427-.123.783-.418.982-.816l.036-.073a1.453 1.453 0 012.328-.377L16.5 15h.628a2.25 2.25 0 011.983 1.186 8.25 8.25 0 00-6.345-12.4c.044.262.18.503.389.676l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.575 15.6z" clip-rule="evenodd" />
                      </svg>                      
                </div>
                <div class=" flex flex-col flex-grow gap-2 mx-4 ">
                        <p class="text-gray-400 text-sm  font-medium tracking-wide">Visitor</p>
                        <span class="text-gray-700 font-bold text-xl">20,000</span>
                </div>
                <div class="flex-shrink-0 self-end">
                    <span class="font-medium text-xs px-2 text-center text-red-500 bg-red-200 rounded-full">
                        - 0.82%
                    </span>
                </div>
            </div>
        </div>
       
    </div>
 <!-- Card End-->
    
</div>

    


@include('partials.adminFooter')