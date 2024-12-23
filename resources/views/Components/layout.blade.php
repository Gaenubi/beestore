<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>beebuzz</title>
</head>
<body class="bg-orange-100">
<div class="px-10"> 
<nav class="flex justify-between border-b border-brown/10 py-5"> 
    <div class="flex">
        <a href="/home">
            <img  class="size-10"src="{{ Vite::asset('/resources/images/nubee.png') }}" alt=''>
        </a>
        <h1 class="my-auto">eebuzz</h1>
    </div>
    <div class="space-x-6 font-bold">
    <a href="/home">Home</a>
    <a href="/profile">My profile</a>
    <a href="/posts">My posts</a>
    <a class="mr-0" href="/beestore/public/blog/create">Create</a>
    </div>
    <div>
        @guest
        <div>
            <a href="/beestore/public/register">Register</a>
        </div>
        <div>
            <a href="/beestore/public/login">log in</a>
        </div>
        @endguest
    </div>
</nav>   

</div>
<main class="mt-5 max-w-[986px] mx-auto space-y-6">
    {{$slot}}
</main>
</body>
</html>
