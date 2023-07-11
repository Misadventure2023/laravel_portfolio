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
            <div class="flex items-center m-2 md:px-8 mx-auto ">
                <p class="p-2 my-4 antialiased text-4xl md:text-6xl tracking-wide font-extrabold text-white uppercase text-center whitespace-pre-line">
                    Transforming your vision into 
                    exceptional web solutions
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
                    Who I Am
                </p>
                <p class="text-justify align-baseline py-2">
                    I’m Jerome Jardio an  Aspiring Web Developer who are self-motivated passionate, creative and eager to make a positive impact. I’m currently seeking an opportunity to contribute my knowledge and skills and grow as a professional web developer.
                </p>
                <p class="text-justify align-baseline  py-2">
                    I'm also part of group called MISADVENTURE. We are a small community of passionate programmers and IT peoples, united by our love for coding, problem solving, and technological innovation.
                </p>
                <p class="text-justify align-baseline  py-2">
                    Our group is dedicated to fostering knowledge sharing, collaboration, and personal growth. We believe in the power of programming to transform ideas into reality and to drive positive change in the world. Together, we aim to expand our skills, exchange insights, and inspire each other to reach new heights.

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

            <div class="flex flex-wrap mt-4 px-8 md:px-0 gap-5 justify-center">
                {{-- //Cards Starts Here --}}
                <div class="p-4 card-hover md:w-96">
                    <span class="mt-2">
                        <img src="{{URL::asset('assets/img/php.png')}}" alt=""  draggable="false">
                    </span>
                    <p class="mt-2 font-bold text-slate-700 dark:text-slate-500">PHP</p>
                    <p class="mt-2 text-gray-700">
                       PHP is a popular server-side scripting language used primarily for web development.
                       I've been using PHP since college because its the most widely use in our university.
                    </p>
                </div>
                <div class="p-4 card-hover md:w-96">
                    <span class="mt-2">
                        <img src="{{URL::asset('assets/img/laravel.png')}}" alt="" draggable="false">
                    </span>
                    <p class="mt-2 font-bold text-slate-700 dark:text-slate-500">Laravel </p>
                    <p class=" text-gray-700 ">
                        Laravel is a popular open-source PHP framework used for web application development and it follows MVC architectural pattern.
                        I just recently using this framework and i'm still on practice to familiarize all the functionality of Laravel 
                    </p>
                </div>
                <div class="p-4 card-hover md:w-96">
                    <span class="mt-2">
                        <img src="{{URL::asset('assets/img/codeigniter.png')}}" alt=""  draggable="false">
                    </span>
                    <p class="mt-2 font-bold  text-slate-700 dark:text-slate-500">Codeigniter</p>
                    <p class="mt-2 text-gray-700">
                        CodeIgniter is a lightweight PHP framework and It also follows the  MVC architectural pattern. I started to use Codeigniter to practice and familiarize in OOP and MVC architectural before I moved up to Laravel Framework.
                    </p>
                </div>
                <div class="p-4 card-hover md:w-96">
                    <span class="mt-2">
                        <img src="{{URL::asset('assets/img/HTML.png')}}" alt=""  draggable="false">
                    </span>
                    <p class="mt-2 font-bold text-slate-700 dark:text-slate-500">HTML</p>
                    <p class="mt-2 text-gray-700">
                        HTML is the standard markup language used for creating web pages and applications. HTML is the foundation of web development same with Javascript and Css to create interactive websites.
                    </p>
                </div>
                <div class="p-4 card-hover md:w-96">
                    <span class="mt-2">
                        <img src="{{URL::asset('assets/img/CSS.png')}}" alt=""  draggable="false">
                    </span>
                    <p class="mt-2 font-bold  text-slate-700 dark:text-slate-500">CSS</p>
                    <p class="mt-2 text-gray-700">
                        CSS allows web developers to control the appearance of web pages, including layout, colors, fonts, and other visual aspects.  
                    </p>
                </div>
                <div class="p-4 card-hover md:w-96">
                    <span class="mt-2">
                        <img src="{{URL::asset('assets/img/Bootstrap.png')}}" alt=""  draggable="false">
                    </span>
                    <p class="mt-2 font-bold  text-slate-700 dark:text-slate-500">BOOTSTRAP</p>
                    <p class="mt-2 text-gray-700">
                        Bootstrap is a popular open-source front-end framework that provides a collection of HTML, CSS, and JavaScript components and tools for building responsive and mobile-first web applications.
                    </p>
                    </p>
                </div>
                <div class="p-4 card-hover md:w-96">
                    <span class="mt-2">
                        <img src="{{URL::asset('assets/img/Tailwind.png')}}" alt=""  draggable="false">
                    </span>
                    <p class="mt-2 font-bold text-gray-700">Tailwind CSS</p>
                    <p class="mt-2 text-gray-700">
                        Tailwind CSS is a utility-first CSS framework that provides a set of pre-built utility classes.
                        Tailwind CSS focuses on providing low-level utility classes. BTW
                        This portfolio website is using Tailwind CSS Framework.
                </div>
                <div class="p-4 card-hover md:w-96">
                    <span class="mt-2">
                        <img src="{{URL::asset('assets/img/JS.png')}}" alt="" draggable="false" >
                    </span>
                    <p class="mt-2 font-bold text-gray-700">JavaScript</p>
                    <p class="mt-2 text-gray-700">
                        JavaScript is a high-level programming language primarily used for client-side web development. It allows developers to add interactive and dynamic elements to websites, create web applications, manipulate web page content, and interact with servers and databases. 
                    </p>
                </div>
                <div class="p-4 card-hover md:w-96">
                    <span class="mt-2">
                        <img class="p-2" src="{{URL::asset('assets/img/Flutterflow.png')}}" alt="" draggable="false" >
                    </span>
                    <p class="mt-2 font-bold text-gray-700">FlutterFlow</p>
                    <p class="mt-2 text-gray-700">
                        FlutterFlow is a visual development platform that allows developers and non-technical users to build mobile and web applications using a drag-and-drop interface. I'm Using FlutterFlow for my newly Freelancing project for mobile and web application.
                    </p>
                </div>
            <!-- Main Skill Cards Ends Here-->
        </div>
        <div class="p-8" id="projects"> {{-- Project & Portfolio --}}
            <div class="text-center">
                <p class="text-gray-700 font-bold">RECENT PROJECTS</p>
                <p class="text-gray-700 font-extrabold text-5xl">Selected Portfolio</p>
            </div>
            <div class="md:flex mt-4 overflow-hidden card-hover">
                <a href="//homedeluxe.com" class="mx-auto" target="_blank" rel="noopener noreferrer">
                    <img class="object-cover overflow-hidden mx-auto md:h-72 border-r bg-slate-50 cursor-pointer"
                        src="{{ URL::asset('assets/img/hdl.png') }}" alt="" width="700"/>
                </a>
                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <div class="text-slate-700 dark:text-slate-500">
                        <p class="font-medium">Home de luxe</p>
                    </div>
                    <p class="p-2 md:p-0">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore culpa, maiores nemo tenetur
                        asperiores quia officiis ipsam quas fugit non.
                    </p>
                    <p class="p-2 md:p-0">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore culpa, maiores nemo tenetur
                        asperiores quia officiis ipsam quas fugit non.
                    </p>
                </div>
            </div>

            <div class="md:flex mt-4 overflow-hidden card-hover ">
                <a href="//globalinens.com" class="mx-auto" target="_blank" rel="noopener noreferrer">
                    <img class="object-cover overflow-hidden  mx-auto md:h-72 border-r bg-slate-50 cursor-pointer"
                        src="{{ URL::asset('assets/img/global.png') }}" alt="" width="700">
                </a>
                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <div class="text-slate-700 dark:text-slate-500">
                        <p class="font-medium">Globalinens</p>
                    </div>
                    <p class="p-2 md:p-0">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore culpa, maiores nemo tenetur
                        asperiores quia officiis ipsam quas fugit non.
                    </p>
                </div>
            </div>
            <div class="md:flex mt-4 overflow-hidden card-hover ">
                <a href="/admin/login" class="mx-auto" target="_blank" rel="noopener noreferrer">
                    <img class="object-cover overflow-hidden mx-auto md:h-72 border-r bg-slate-50 cursor-pointer"
                        src="{{ URL::asset('assets/img/login.png') }}" alt="" width="700">
                </a>
                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <div class="text-slate-700 dark:text-slate-500">
                        <p class="font-medium">Login</p>
                    </div>
                    <p class="p-2 md:p-0">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore culpa, maiores nemo tenetur
                        asperiores quia officiis ipsam quas fugit non.
                    </p>
                </div>
            </div>

            <div class="md:flex mt-4 overflow-hidden card-hover ">
                <img class="object-cover overflow-hidden mx-auto md:h-72 border-r bg-slate-50 cursor-pointer"
                    src="{{ URL::asset('assets/img/login.png') }}" alt="" width="700">
                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <div class="text-slate-700 dark:text-slate-500">
                        <p class="font-medium">Laravel Crud</p>
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
