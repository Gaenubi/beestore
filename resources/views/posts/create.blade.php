<x-layout> 
    <form method="post" action="/beestore/public/blog" class="flex flex-col py-7">
        @csrf
        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="Title">Title:</label>
        <input type="text" id="Title" name="Title">
        </div> 

        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="user-id">Username:</label>
        <input type="text" value="" name="user-id">
        </div>

        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="comment">Body:</label>
        <textarea rows="5" cols="70" type="text-area" id="comment" name="comment"> Enter paragraphs here </textarea>
        </div>

        <div class="mt-5">
            <input class="bg-orange-900 px-2 font-bold py-2 border border-black-200 rounded" value="Save" type="submit">
        </div>
    
    </form>
</x-layout>