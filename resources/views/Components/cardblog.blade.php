<section class=" flex flex-col bg-orange-900 px-10 py-10 rounded-xl hover:border-orange-200 group">

  <div class="flex">

    <div class="flex">
        <a href="/home">
            <img  class="size-20" src="{{ Vite::asset('/resources/images/nubee.png') }}" alt=''>
        </a>
      <div class="">
        <h2 class="font-bold text-lg group-hover:text-orange-200"> {{ $headline }}</h2>
        <p>{{$comment}}<a href="/beestore/public/blog/{{$id}}"> ...read more</a></p>
      </div>
</div>
    <div class="mb-0 flex space-x-4 font-bold">
      {{$slot}}
    </div>
  </div>
</section>