<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-700 font-sans  min-h-screen	flex justify-between flex-col">
    <div class=" h-screen flex justify-center items-center ">
        <form action="" method="post" class="" >
            @csrf
            
            <div class="h-96 w-full bg-white mx-10 px-8 flex flex-col justify-center shadow-lg rounded relative">
                <div class="w-24 mb-4 mt-6 mx-auto ">
                    <img class="" src="{{URL::asset("assets/img/logowhitebg.jpg")}}" alt="">
                </div>
                <span class="text-sm ">Sign Up 
                    <a href="#" class="text-sky-600 cursor-pointer">HERE</a>
                </span>
                <hr class="mt-4"/>
                    <label class="text-xs mt-4 ml-6" for="email">Email Address</label>
                    <div class="inline-flex">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                        </svg>                      
                        
                        <input name="email" type="text" placeholder="Email Address" autocomplete="off" class="px-3 py-2  focus:outline-none border-b-2 focus:border-sky-300  w-full">
                    </div>
                        <label for="password" class="text-xs mt-4 ml-6">Password</label>
                    <div class="inline-flex ">
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        
                        <input name="password" type="password" autocomplete="off" class="px-3 py-2 w-full focus:outline-none border-b-2 focus:border-sky-300" placeholder="********">
                    </div>
                
                <div class="mt-6 mb-12">
                    <button class=" w-full py-2 bg-slate-600 text-white hover:bg-slate-400 transition ease-out duration-500 hover:text-gray-700">Sign In</button>
                </div>
                
            </div>
        </form>
    </div>




@include('partials.adminFooter')