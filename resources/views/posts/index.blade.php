<x-layout>

    @include('posts._header')

    {{--    @foreach ($posts as $post)--}}
    {{--        <article class="{{$loop->even ? 'FlickGod' : ''}}">--}}
    {{--            <h1>--}}
    {{--                <a href="/posts/{{$post->slug}}">--}}
    {{--                    {!! $post->title !!}--}}
    {{--                </a>--}}
    {{--            </h1>--}}
    {{--            <p>--}}
    {{--                By <a href="/authors/{!! $post->author->username !!}">{!! $post->author->username !!} </a> in <a href="/categories/{{$post->category->slug}}"> {!! $post->category->name !!} </a>--}}
    {{--            </p>--}}
    {{--            <div> {!! $post->excerpt !!} </div>--}}
    {{--        </article>--}}
    {{--    @endforeach--}}

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center"> No Posts yet. Please check back later.</p>
        @endif
    </main>

</x-layout>
