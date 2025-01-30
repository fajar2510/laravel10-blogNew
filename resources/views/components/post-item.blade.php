<article class="flex flex-col shadow my-4">
    <!-- Article Image -->
    <a href="{{ route('view', $post) }}" class="hover:opacity-75 ">
        <img src="{{ $post->getThumbnail() }}" 
             alt="{{ Str::limit($post->thumbnail, 50, '...') }}"
             class="w-full h-60 md:h-80 object-cover">
    </a>
    
    <div class="bg-white flex flex-col justify-start p-6">
        @foreach ($post->categories as $category )
        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
            {{ $category->title }}
        </a>
            
        @endforeach
        <a href="{{ route('view', $post) }}" class="text-3xl font-bold hover:text-gray-700 pb-4">
            {{ $post->title }}
        </a>
        <p href="#" class="text-sm pb-3 font-">
            By <a href="#" class="font-semibold hover:text-gray-800">
                {{ $post->user->name }}
            </a>, Published on {{ $post->getFormattedDate() }}
        </p>
        <a href="{{ route('view', $post) }}" class="pb-6">
            {{ $post->shortBody() }}
    </a>
        <a href="#" class="uppercase text-gray-800 hover:text-black hover:underline hover:font-bold">Continue Reading <i class="fas fa-arrow-right pl-2"></i></a>
    </div>
</article>
 