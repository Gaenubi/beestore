<x-layout>
@foreach($posts as $post)
      <x-cardblog>
            <x-slot:headline>{{$post->headline}}</x-slot>
            <x-slot:comment>{{$post->comment}}</x-slot>
            <x-slot:id>{{$post->id}}</x-slot>
            @foreach($post->tags as $tag)
            <x-tag>
            {{$tag->name}}
            </x-tag> 
      @endforeach
      </x-cardblog> 
@endforeach

</x-layout>
