@extends('layouts.landing')

@section('hero')
    {{-- title --}}
    <div class="mt-8 text-center lg:my-16 xl:my-28">
        <span class="inline-block w-8 h-1 mx-auto bg-red-600"></span>
        <h3 class="relative mb-3 text-4xl font-bold text-center text-indigo-900 ">
            {{ __('How to effectively analyze your project data') }}
        </h3>
        <ul class="flex items-center justify-center space-x-3">
            <li class="text-blue-400 hover:underline">
                <a href="#">{{ __('Home /') }}</a>
            </li>
            <li class="text-blue-300 hover:underline">
                <a href="#">{{ __('blog') }}</a>
            </li>
        </ul>
    </div>
@endsection


@section('content')
    <article class="container px-8 mx-auto mt-8 lg:px-36 lg:my-16">

        <div class="my-4 lg:my-12">
            <img src="{{ asset($post->image) }}" alt="article header/cover" class="mb-4 responsive">
            <p class="text-sm font-semibold text-gray-500"><span class="text-gray-800">Posted: </span> Feb, 2 2021</p>
        </div>

        {{-- posts content --}}
        <div class="flex content-between space-x-20">

            {{-- left --}}
            <div class="w-8/12 prose">
            {!! Illuminate\Support\Str::markdown($post->content) ?? 'No data' !!}
            </div>

            {{-- right --}}
            <div class="w-4/12">
                <form action="#">
                    <input type="text" placeholder="Search..."
                        class="w-full px-3 py-2 mb-3 text-gray-600 border-2 border-gray-200 outline-none ring-2 ring-transparent focus:ring-blue-300">
                </form>

                {{-- tags --}}
                <div>
                    <p class="text-xl font-semibold text-blue-800">{{ __('Tags') }}</p>
                    <ul class="flex flex-wrap my-4">
                        <li class="mb-4 mr-2">
                            <a href="#"
                                class="px-6 py-2 text-sm text-blue-400 bg-blue-200 bg-opacity-50 text-opacity-95 hover:bg-blue-400 hover:text-blue-100">
                                <i class="bx bx-purchase-tag"></i>
                                {{ __('data analysis') }}
                            </a>
                        </li>
                        <li class="mb-4 mr-2">
                            <a href="#"
                                class="px-6 py-2 text-sm text-blue-400 bg-blue-200 bg-opacity-50 text-opacity-95 hover:bg-blue-400 hover:text-blue-100">
                                <i class="bx bx-purchase-tag"></i>
                                {{ __('ms excel') }}
                            </a>
                        </li>
                        <li class="mb-4 mr-2">
                            <a href="#"
                                class="px-6 py-2 text-sm text-blue-400 bg-blue-200 bg-opacity-50 text-opacity-95 hover:bg-blue-400 hover:text-blue-100">
                                <i class="bx bx-purchase-tag"></i>
                                {{ __('project') }}
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- tags end --}}

                {{-- categories --}}
                <div>
                    <p class="text-xl font-semibold text-blue-800">{{ __('Categories') }}</p>
                    <ul class="flex flex-wrap my-4">
                        <li class="mb-4 mr-2">
                            <a href="#"
                                class="px-6 py-2 text-sm text-gray-700 bg-gray-200 bg-opacity-50 text-opacity-95 hover:bg-gray-800 hover:text-gray-100">
                                <i class="bx bx-folder"></i>
                                {{ __('tech') }}
                            </a>
                        </li>
                        <li class="mb-4 mr-2">
                            <a href="#"
                                class="px-6 py-2 text-sm text-gray-700 bg-gray-200 bg-opacity-50 text-opacity-95 hover:bg-gray-800 hover:text-gray-100">
                                <i class="bx bx-purchase-tag"></i>
                                {{ __('programming') }}
                            </a>
                        </li>
                        <li class="mb-4 mr-2">
                            <a href="#"
                                class="px-6 py-2 text-sm text-gray-700 bg-gray-200 bg-opacity-50 text-opacity-95 hover:bg-gray-800 hover:text-gray-100">
                                <i class="bx bx-purchase-tag"></i>
                                {{ __('short') }}
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- categories end --}}

                {{-- recent posts --}}
                <p class="mt-8 mb-4 text-xl font-semibold text-blue-800">{{ __('Recent posts') }}</p>
                <div class="flex flex-col space-y-6">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="flex flex-col justify-center space-x-3 lg:flex-row">
                            <img src="https://picsum.photos/100/60" alt="blog cover" class="w-24 h-24 responsive">

                            {{-- article body --}}
                            <div class="flex flex-col justify-evenly">
                                <a href="#" class="relative -mt-2 font-semibold text-indigo-900 hover:text-opacity-80">
                                    {{ Str::words('How to effectively analyze your project data', 5) }}
                                </a>
                                <p class="mt-2 text-sm text-gray-600">
                                    {{ Str::words('One advanced diverted domestic old. Possible
                            procured her trifling uneasy saw', 7) }}
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>

                {{-- recent posts end --}}
            </div>
        </div>

        <div id="disqus_thread"></div>

    </article>

@endsection

@section('scripts')

<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    
    const disqus_config = function () {
    this.page.url = "https://reanalytix.disqus.com";  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = "reanalytix"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    
    (function() { // DON'T EDIT BELOW THIS LINE
    const d = document, s = d.createElement('script');
    s.src = 'https://reanalytix.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection
