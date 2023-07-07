@include('partials.header')

<div class="">
    <!-- Container-->
    <div class="md:flex justify-between p-1 bg-white relative">
        <div class="px-2 py-2">
            <a href="#">
                <img class="w-12 ml-2" src="{{ URL::asset('assets/img/logo.png') }}" alt="">
            </a>
        </div>
        <div class="absolute right-0 top-0 mr-1 mt-1">
            <span class="md:hidden " id="burger">
                <svg class="w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </span>
        </div>

        <div class="flex  justify-end items-center px-3">
            <nav class="">
                <ul class="md:flex hidden" id="navigation">
                    <li class="p-2">
                        <a href="#">Home</a>
                    </li>
                    <li class="p-2">
                        <a href="#about">About</a>
                    </li>
                    <li class="p-2">
                        <a href="#projects">Projects</a>
                    </li>
                    <li class="p-2">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> <!-- End of Navigation-->

    <main class="bg-white ">
        <!--Main Content-->
        {{-- Hero --}}
        <div class="flex mb-12 h-screen bg-cover bg-top object-fill "
            style="background-image: url({{ URL::asset('assets/img/sample.jpg') }})">
            <div class="flex items-center m-2 md:px-8">
                <p class="p-2 my-4 antialiased text-4xl md:text-5xl font-extrabold text-white uppercase text-center">
                    Transforming your vision into exceptional web solutions
                </p>
            </div>
            {{-- <div class="md:shrink-0 px-4 my-4">
                <img class="w-full h-80 object-contain    " src="{{URL::asset('assets/img/logo.png')}}" alt="">
            </div> --}}
        </div> {{-- Hero Ends Here --}}

        <div class="grid gap-4 md:grid-cols-2 md:grid-flow-col  mx-8 my-4 items-center mb-4" id="about">
            {{-- Who WE ARE --}}
            <div class="col-span-1">
                <img class="object-contain " src="{{ URL::asset('assets/img/logo.png') }}" alt="">
            </div>
            <div class="col-span-1 mx-6 ">
                <p class="text-center text-4xl text-gray-700 font-bold uppercase">
                    Who WE ARE
                </p>
                <p class="text-justify align-baseline">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis neque vel eum ipsum ipsam
                    dolore magnam laboriosam, labore error, doloribus perspiciatis officia, totam odio alias obcaecati?
                    Tempora nulla quis commodi sint provident mollitia veritatis delectus dignissimos similique, ullam,
                    dolor dicta incidunt. Neque, facilis veritatis delectus dicta in ut architecto nesciunt.
                </p>
            </div>
        </div>{{-- Who WE ARE ENDS HERE --}}

        <div class="md:mt-12 p-8">
            <!--Main Skill  Icons-->
            <div class="text-center">
                <p class="font-bold text-gray-700 text-4xl"> Main Skills</p>
                <p class="text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, repudiandae!
                </p>
            </div> 
        <div class="relative logo-wrapper">
           
            <div class="logos whitespace-nowrap box-border overflow-hidden scroll-smooth ">
                <div class="logos-slide" >
                    <img  src="{{URL::asset('assets/img/php.png')}}" alt=""  draggable="false">
                    <img src="{{URL::asset('assets/img/laravel.png')}}" alt="" draggable="false">
                    <img src="{{URL::asset('assets/img/codeigniter.png')}}" alt=""  draggable="false">
                    <img src="{{URL::asset('assets/img/HTML.png')}}" alt=""  draggable="false">
                    <img src="{{URL::asset('assets/img/CSS.png')}}" alt=""  draggable="false">
                    <img src="{{URL::asset('assets/img/Bootstrap.png')}}" alt=""  draggable="false">
                    <img src="{{URL::asset('assets/img/Tailwind.png')}}" alt=""  draggable="false">
                    <img src="{{URL::asset('assets/img/JS.png')}}" alt="" draggable="false" >
                    <img src="{{URL::asset('assets/img/Flutterflow.png')}}" alt=""  draggable="false">

                </div>                  
            </div>
            <svg id="left" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              
              <svg id="right" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              
              
              
              
              
              
        </div>

           
            </div> 
            {{-- //Skills Icons Ends Here --}}

            <div class="grid gap-8 md:px-16  m-8 md:grid-cols-3 grid-flow-row">
                {{-- //Cards Starts Here --}}
                <div
                    class="p-4 border shadow rounded hover:shadow-xl hover:bg-amber-100  transform ease-in-out  duration-300 cursor-pointer">
                    <span class="mt-2">
                        <svg class="w-12 mx-auto " viewBox="0 0 256 134" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMinYMin meet">
                            <g fill-rule="evenodd">
                                <ellipse fill="#8993BE" cx="128" cy="66.63" rx="128"
                                    ry="66.63" />
                                <path
                                    d="M35.945 106.082l14.028-71.014H82.41c14.027.877 21.041 7.89 21.041 20.165 0 21.041-16.657 33.315-31.562 32.438H56.11l-3.507 18.411H35.945zm23.671-31.561L64 48.219h11.397c6.137 0 10.52 2.63 10.52 7.89-.876 14.905-7.89 17.535-15.78 18.412h-10.52zM100.192 87.671l14.027-71.013h16.658l-3.507 18.41h15.78c14.028.877 19.288 7.89 17.535 16.658l-6.137 35.945h-17.534l6.137-32.438c.876-4.384.876-7.014-5.26-7.014H124.74l-7.89 39.452h-16.658zM153.425 106.082l14.027-71.014h32.438c14.028.877 21.042 7.89 21.042 20.165 0 21.041-16.658 33.315-31.562 32.438h-15.781l-3.507 18.411h-16.657zm23.67-31.561l4.384-26.302h11.398c6.137 0 10.52 2.63 10.52 7.89-.876 14.905-7.89 17.535-15.78 18.412h-10.521z"
                                    fill="#232531" />
                            </g>
                        </svg>
                    </span>
                    <p class="mt-2 font-bold text-gray-700">DESIGN + DEVELOPMENT</p>
                    <p class="mt-2 text-gray-700">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit incidunt quas adipisci harum, id
                        perspiciatis doloremque voluptate nemo sint qui!
                    </p>
                </div>
                <div class="p-4 border shadow rounded">
                    <span class="mt-2">
                        <svg class="w-12 mx-auto" viewBox="0 -.11376601 49.74245785 51.31690859" width="2418"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z"
                                fill="#ff2d20" />
                        </svg>
                    </span>
                    <p class="mt-2 font-bold text-gray-700">ECOMMERCE </p>
                    <p class="mt-2 text-gray-700">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit incidunt quas adipisci harum, id
                        perspiciatis doloremque voluptate nemo sint qui!
                    </p>
                </div>
                <div class="p-4 border shadow rounded">
                    <span class="mt-2">
                        <svg class="w-12 mx-auto" viewBox="0 0 256 304" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMinYMin meet">
                            <path
                                d="M13.104 287.306c-5.204 0-6.717-3.03-6.717-7.57 0-1.513.19-3.22.424-5.018 1.14-7.851 3.923-12.343 10.64-12.343 4.543 0 6.758 2.032 6.758 5.722v1.799h4.507c.05 0 .05-1.656.05-2.033 0-5.392-3.265-10.506-11.308-10.506-10.929 0-15.423 5.937-17.079 17.576-.237 1.562-.379 3.02-.379 4.576 0 6.86 2.699 13.1 12.349 13.1 7.332 0 11.687-3.575 14.24-7.975l-4.306-2.9c-2.79 4.401-5.82 5.572-9.179 5.572zm29.57-21.668c-8.754 0-12.536 4.492-13.813 13.432a23.325 23.325 0 0 0-.24 3.124c0 5.77 2.697 10.362 10.17 10.362 8.754 0 12.587-4.685 13.864-13.486.142-1.134.237-2.175.237-3.215.002-5.865-2.788-10.217-10.218-10.217zm3.643 13.435c-.947 6.483-2.979 8.47-6.814 8.47-3.073 0-4.586-1.278-4.586-5.11 0-.947.096-2.081.284-3.36.947-6.433 2.839-8.42 6.718-8.42 3.123 0 4.682 1.277 4.682 5.156 0 .946-.096 2.035-.284 3.264zm28.58-21.246l-1.465 8.685c-.094.755-.046.504.24 1.214-1.372-1.04-3.834-1.728-5.49-1.728-7.854 0-12.252 3.555-13.67 13.49a19.414 19.414 0 0 0-.237 3.171c0 7.241 4.257 9.94 9.98 9.94 2.416 0 4.78.05 6.623-1.509l.471 2.943h4.543l5.298-36.206h-6.293zm-4.494 28.342c-2.127 1.274-4.207 1.562-5.484 1.562-3.454 0-4.4-1.799-4.4-4.683 0-1.089.142-2.363.333-3.739 1.086-7.521 3.5-8.848 6.623-8.848 2.032 0 3.592.333 5.062 1.139l-2.134 14.569zm24.603-20.531c-8.66 0-12.725 4.113-14.099 13.432-.144 1.137-.239 2.226-.239 3.266 0 6.387 3.266 10.22 10.454 10.22 5.583 0 9.75-2.32 11.972-6.578l-4.779-1.94c-1.37 2.08-3.215 3.5-6.48 3.5-3.5 0-4.92-.942-4.92-4.065 0-.616.048-1.511.143-1.511h17.076c.24-2.414.52-4.12.52-5.535 0-4.728-1.796-10.79-9.648-10.79zm3.263 11.499H87.861c1.043-2.414 2.79-6.15 6.387-6.15 2.79 0 4.164 1.631 4.164 4.422-.003.473-.046 1.728-.143 1.728zm24.591-12.069l.567-4.827h-13.343l-.565 4.827h3.5l-3.782 24.137h-3.505l-.564 4.828h13.34l.57-4.828h-3.503l3.783-24.137h3.502zm27.11 7.241l1.705-4.827h-4.589l-3.309.683c-1.846-1.18-4.354-2.066-6.717-2.066-6.768 0-12.537 3.268-12.537 10.697 0 2.084.756 3.766 1.653 4.903-1.416.755-2.647 2.02-2.647 3.726 0 .756.282 1.53.852 2.238-2.841 1.706-4.586 4.533-4.586 7.842 0 6.39 6.669 7.753 11.778 7.753 6.433 0 14.099-1.47 14.099-9.655 0-2.79-1.75-4.97-6.812-5.916l-9.13-1.706c-1.04-.191-1.277-.522-1.277-.995 0-.71.43-1.086 1.136-1.086l.616.094c1.23.283 2.65.427 4.115.427 6.578 0 12.443-2.84 12.443-10.22 0-1.042-.188-1.747-.661-2.884.803.38 1.846.995 2.268.995h1.6v-.003zm-13.007 19.583c1.796.333 2.41.994 2.41 2.177 0 3.833-4.116 4.306-7.095 4.306-4.542 0-6.244-1.086-6.244-3.502 0-2.13.613-3.121 2.035-4.637l8.894 1.656zM135.02 279.5c-2.744 0-4.258-.992-4.258-3.36 0-3.5 2.035-5.535 5.583-5.535 2.839 0 4.212 1.183 4.212 3.498 0 3.502-1.989 5.397-5.537 5.397zm31.757-13.862c-2.65 0-5.013 1.3-7.948 3.616l-.425-1.772h-5.206l-3.642 26.55h6.292l2.745-20.134c1.846-1.135 4.115-2.783 6.055-2.783 2.364 0 3.218 1.141 3.218 3.316 0 .521-.05 2.064-.145 2.631l-2.315 16.97h6.293l2.315-17.108c.096-.8.19-2.119.19-2.874.003-4.5-2.129-8.412-7.427-8.412zm19.38 21.743l.048-.65 2.742-19.249h-10.456l-.659 4.827h4.586c-.379 0-.615.423-.661.804l-1.893 12.82c-.094.617-.14 1.901-.14 2.418 0 3.311 1.796 5.682 5.484 5.682h3.218l.71-4.828h-2.033c-.712 0-.946-1.257-.946-1.824zm4.067-29.554h-6.15c-.379 0-.379-1.393-.425-.92l-.854 6.802c-.049.428-.049 1.36.33 1.36h6.153c.379 0 .379-1.654.425-2.084l.854-5.25c.048-.473.048.092-.333.092zm12.831 29.715c-1.559 0-2.317-.663-2.317-2.08l.048-.097 1.987-13.056h7.19l2.175-4.827h-8.704l1.465-10.623-6.62 2.117-1.185 8.506h-3.831l-.661 4.827h4.446c-.425 2.414-.852.848-.898 1.323l-1.704 11.448c-.094.522-.094.9-.094 1.371 0 4.495 3.311 6.177 7.289 6.177 3.688 0 6.669-1.077 8.989-3.02l-2.935-3.61c-1.47.897-2.462 1.544-4.64 1.544zm23.087-21.904c-8.657 0-12.725 4.113-14.098 13.432-.142 1.137-.237 2.226-.237 3.266 0 6.387 3.264 10.22 10.454 10.22 5.583 0 9.75-2.32 11.97-6.578l-4.777-1.94c-1.37 2.08-3.217 3.5-6.483 3.5-3.498 0-4.92-.942-4.92-4.065 0-.616.051-1.511.146-1.511h17.077c.236-2.414.52-4.12.52-5.535 0-4.728-1.797-10.79-9.652-10.79zm3.266 11.499H219c1.04-2.414 2.788-6.15 6.387-6.15 2.79 0 4.164 1.631 4.164 4.422-.003.473-.049 1.728-.143 1.728zm23.797-11.5c-2.271 0-4.4 1.302-6.53 3.332l-.378-1.487h-5.202l-3.644 26.55h6.34l2.79-20.56c1.657-.991 3.549-1.838 5.347-1.838 1.137 0 2.223-.181 3.263-.04l.809-5.485c-.951-.189-1.897-.471-2.795-.471zM92.54 238.81c-14.32-6.19-27.72-21.922-27.752-38.019-.039-17.55 11.083-32.45 24.916-42.242-1.663 6.283-2.57 12.03 1.55 17.65 3.83 5.225 10.538 7.764 16.872 6.386 14.8-3.24 15.479-19.51 6.705-28.989-8.675-9.387-17.067-19.99-13.765-33.603 1.653-6.824 5.843-13.216 11.151-17.785-4.08 10.722 7.514 21.296 15.153 26.563 13.251 9.138 27.79 16.044 39.974 26.756 12.816 11.258 22.28 26.48 20.369 44.135-2.071 19.136-17.277 32.445-34.333 39.164 36.042-7.955 73.283-35.928 74.046-75.9.632-32.885-21.927-58.193-49.872-72.682l-1.46-.797c.767 1.861 1.018 3.444.989 4.861.25-1.045.42-2.119.468-3.227a15.728 15.728 0 0 1-.512 3.9l.044-.673a16.383 16.383 0 0 1-2.069 4.931l.41-.441c-5.575 9.247-20.668 11.255-28.124 1.68-11.986-15.402.251-32.008 1.963-48.318 2.143-20.441-10.676-40.285-26.57-52.16 8.754 14.161-2.779 32.896-12.006 43.37C101.74 53.523 90.859 62 80.982 71.225c-10.61 9.908-20.81 20.345-29.531 31.974-17.442 23.276-28.12 52.55-20.273 81.588 7.842 29.018 32.978 47.49 61.363 54.022z"
                                fill="#EE4323" />
                        </svg>
                    </span>
                    <p class="mt-2 font-bold text-gray-700">ANALYTICS</p>
                    <p class="mt-2 text-gray-700">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit incidunt quas adipisci harum, id
                        perspiciatis doloremque voluptate nemo sint qui!
                    </p>
                </div>
                <div class="p-4 border shadow rounded">
                    <span class="mt-2">
                        <svg class="w-12 mx-auto" fill="none" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 124 141.53199999999998">
                            <path d="M10.383 126.894L0 0l124 .255-10.979 126.639-50.553 14.638z" fill="#e34f26" />
                            <path d="M62.468 129.277V12.085l51.064.17-9.106 104.851z" fill="#ef652a" />
                            <path
                                d="M99.49 41.362l1.446-15.49H22.383l4.34 47.49h54.213L78.81 93.617l-17.362 4.68-17.617-5.106-.936-12.085H27.319l2.128 24.681 32 8.936 32.255-8.936 4.34-48.17H41.107L39.49 41.362z"
                                fill="#fff" />
                        </svg>
                    </span>
                    <p class="mt-2 font-bold text-gray-700">BACKEND</p>
                    <p class="mt-2 text-gray-700">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit incidunt quas adipisci harum, id
                        perspiciatis doloremque voluptate nemo sint qui!
                    </p>
                </div>
                <div class="p-4 border shadow rounded">
                    <span class="mt-2">
                        <svg class="w-12 mx-auto" fill="none" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 124 141.53">
                            <path d="M10.383 126.892L0 0l124 .255-10.979 126.637-50.553 14.638z" fill="#1b73ba" />
                            <path d="M62.468 129.275V12.085l51.064.17-9.106 104.85z" fill="#1c88c7" />
                            <path
                                d="M100.851 27.064H22.298l2.128 15.318h37.276l-36.68 15.745 2.127 14.808h54.043l-1.958 20.68-18.298 3.575-16.595-4.255-1.277-11.745H27.83l2.042 24.426 32.681 9.106 31.32-9.957 4-47.745H64.765l36.085-14.978z"
                                fill="#fff" />
                        </svg>
                    </span>
                    <p class="mt-2 font-bold text-gray-700">CSS</p>
                    <p class="mt-2 text-gray-700">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit incidunt quas adipisci harum, id
                        perspiciatis doloremque voluptate nemo sint qui!
                    </p>
                </div>
                <div class="p-4 border shadow rounded">
                    <span class="mt-2">
                        <svg class="w-12 mx-auto" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMinYMin meet">
                            <path
                                d="M0 222.991C0 241.223 14.779 256 33.009 256H222.99C241.223 256 256 241.221 256 222.991V33.01C256 14.777 241.221 0 222.991 0H33.01C14.777 0 0 14.779 0 33.009V222.99z"
                                fill="#563D7C" />
                            <path
                                d="M106.158 113.238V76.985h31.911c3.04 0 5.97.253 8.792.76 2.822.506 5.319 1.41 7.49 2.713 2.17 1.303 3.907 3.112 5.21 5.427 1.302 2.316 1.954 5.283 1.954 8.9 0 6.513-1.954 11.217-5.862 14.111-3.907 2.895-8.9 4.342-14.979 4.342h-34.516zM72.075 50.5v155h75.112c6.947 0 13.713-.868 20.298-2.605 6.585-1.737 12.446-4.414 17.584-8.032 5.137-3.618 9.226-8.286 12.265-14.002 3.04-5.717 4.559-12.483 4.559-20.298 0-9.697-2.352-17.982-7.055-24.856-4.704-6.875-11.832-11.687-21.384-14.437 6.947-3.328 12.194-7.598 15.74-12.808 3.545-5.21 5.318-11.722 5.318-19.538 0-7.236-1.194-13.314-3.582-18.235-2.388-4.92-5.753-8.864-10.095-11.831-4.341-2.967-9.551-5.102-15.63-6.404-6.078-1.303-12.808-1.954-20.189-1.954H72.075zm34.083 128.515v-42.549h37.121c7.381 0 13.315 1.7 17.802 5.102 4.486 3.401 6.73 9.081 6.73 17.041 0 4.053-.688 7.381-2.063 9.986-1.375 2.605-3.22 4.668-5.536 6.187-2.315 1.52-4.993 2.605-8.032 3.257-3.04.65-6.223.976-9.552.976h-36.47z"
                                fill="#FFF" />
                        </svg>
                    </span>
                    <p class="mt-2 font-bold text-gray-700">BOOTSTRAP</p>
                    <p class="mt-2 text-gray-700">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit incidunt quas adipisci harum, id
                        perspiciatis doloremque voluptate nemo sint qui!
                    </p>
            
                {{-- //Cards Ends Here --}}
            </div>
            <!-- Main Skill Cards Ends Here-->
        </div>
        <div class="p-8" id="projects"> {{-- Project & Portfolio --}}
            <div class="text-center">
                <p class="text-gray-700 font-bold">RECENT PROJECTS</p>
                <p class="text-gray-700 font-extrabold text-5xl">Selected Portfolio</p>
            </div>
            <div class="md:flex border mt-4 rounded-md overflow-hidden">
                <img class="object-cover overflow-hidden mx-auto md:h-72 border-r bg-slate-50"
                    src="{{ URL::asset('assets/img/hdl.png') }}" alt="" width="700">
                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <div class="text-slate-700 dark:text-slate-500">
                        <p class="font-medium">Staff Engineer, Algolia</p>
                    </div>
                    <p class="p-2 md:p-0">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore culpa, maiores nemo tenetur
                        asperiores quia officiis ipsam quas fugit non.
                    </p>
                </div>
            </div>

            <div class="md:flex border mt-4 rounded-md overflow-hidden">
                <img class="object-cover overflow-hidden mx-auto md:h-72 border-r bg-slate-50"
                    src="{{ URL::asset('assets/img/global.png') }}" alt="" width="700">
                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <div class="text-slate-700 dark:text-slate-500">
                        <p class="font-medium">Staff Engineer, Algolia</p>
                    </div>
                    <p class="p-2 md:p-0">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore culpa, maiores nemo tenetur
                        asperiores quia officiis ipsam quas fugit non.
                    </p>
                </div>
            </div>
            <div class="md:flex border mt-4 rounded-md overflow-hidden">
                <img class="object-cover overflow-hidden mx-auto md:h-72 border-r bg-slate-50"
                    src="{{ URL::asset('assets/img/login.png') }}" alt="" width="700">
                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <div class="text-slate-700 dark:text-slate-500">
                        <p class="font-medium">Staff Engineer, Algolia</p>
                    </div>
                    <p class="p-2 md:p-0">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore culpa, maiores nemo tenetur
                        asperiores quia officiis ipsam quas fugit non.
                    </p>
                </div>
            </div>
        </div>{{-- Project & Portfolio  Ends Here --}}
        <div class="md:px-12 md:mx-12 p-6" id="contact">
            <div class="text-gray-700 text-center">
                <p class="text-4xl font-extrabold ">Contact Me</p>
                <p class="mt-2 tracking-wide leading-6 md:text-center text-justify	">I’m interested in freelance
                    opportunities – especially ambitious or large projects. However, if you have other request or
                    question, don’t hesitate to use the form.
                </p>
            </div>

            <form action="POST" autocomplete="off">
                <div class="grid grid-cols-2 grid-row-3 gap-2 mt-8">
                    <input name="name" placeholder="Name" type="text"
                        class=" border border-slate-300 rounded-md focus:outline-none focus:bg-sk focus:ring-1 focus:ring-sky-400 py-2 px-3 sm:text-sm shadow-sm placeholder-slate-400 w-full">
                    <input name="email" placeholder="name@email.com" type="email"
                        class="border border-slate-300 rounded-md focus:outline-none focus:bg-sk focus:ring-1 focus:ring-sky-400 py-2 px-3 sm:text-sm shadow-sm placeholder-slate-400 w-full">
                    <input name="subject" placeholder="Subject" type="text"
                        class="col-span-2 border border-slate-300 rounded-md focus:outline-none focus:bg-sk focus:ring-1 focus:ring-sky-400 py-2 px-3 sm:text-sm shadow-sm placeholder-slate-400 w-full">
                    <textarea name="message" placeholder="message"
                        class="h-36 col-span-2 border border-slate-300 rounded-md focus:outline-none focus:bg-sk focus:ring-1 focus:ring-sky-400 py-2 px-3 sm:text-sm shadow-sm placeholder-slate-400 w-full"></textarea>
                </div>
                <button
                    class="text-gray-700  font-bold border border-slate-300 w-full p-2 mt-2 rounded-md hover:bg-sky-500 hover:text-white transform ease-out duration-500">SEND
                    MESSAGE</button>
            </form>
        </div>

    </main>
    <!--Main Content Ends Here-->
</div>

<button id="to-top" class="hidden fixed z-50 bottom-16 right-3 md:right-16 w-10 h-10 overflow-hidden rounded-full bg-slate-400 drop-shadow-md " >
    <svg class="w-7 text-white   mx-auto  " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
      </svg> 
</button>


@include('partials.footer')
