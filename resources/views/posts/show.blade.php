<x-layout>
    <div class="flex">
        <div class="flex flex-col
         px-4 mr-0 text-align-center">
        <h1 class="font-bold text">{{$post->headline}}</h1>
        <x-slot:id>{{$post->id}}</x-slot>
        <a href="/beestore/public/edit/{{$post->id}}">
            <button class="border px-3 border-black-100">Edit</button>
        </a>
        <a href="/beestore/public/delete/{{$post->id}}">
            <button class="border px-3 border-black-100 hover:background-red-400">Delete</button>
        </a>
        </div>
        <h2>{{$post->comment}}</h2>
        
    </div>
</x-layout>
