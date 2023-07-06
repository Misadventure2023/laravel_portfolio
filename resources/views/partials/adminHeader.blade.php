<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="{{URL::asset('assets/img/Logowhitebg.jpg')}}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-700 font-sans  min-h-screen	flex justify-between flex-col">

    <div class="relative"> <!-- Container -->
       <x-admin-navigation />
    <main class="absolute top-16 mt-2 md:pl-2 md:mx-48 w-full md:max-w-[85%] "><!-- Main Section-->