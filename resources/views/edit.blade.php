<x-layout> 
    <form method="post" action="/beestore/public/blog/{{$post->id}}" class="flex flex-col py-7">
        @csrf
        @method('PATCH')
        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="Title">Title:</label>
        <input type="text" id="Title" name="Title" value="{{$post->headline}}">
        </div> 

        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="user-id">Username:</label>
        <input type="text" value="" name="user-id">
        </div>

        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="comment">Body:</label>
        <textarea rows="5" cols="70" type="text-area" id="comment" name="comment"> {{$post->comment}} </textarea>
        </div>

        <div class="mt-5">
            <input class="bg-orange-900 px-2 font-bold py-2 border border-black-200 rounded" value="Save" type="submit">
        </div>

        <select name="tags" id="tags">
            <option value="good">good</option>
            <option value="bad">bad</option>
            <option value="ugly">ugly</option>
        </select>
    </form>
</x-layout>