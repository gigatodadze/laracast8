<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/app.css">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FlickHouse</title>
    </head>
    <body>
        @foreach ($posts as $post)
            <article class="{{$loop->even ? 'FlickGod' : ''}}">
                <h1>
                    <a href="/posts/{{$post->slug}}">
                        {{$post->title}}
                    </a>
                </h1>

                <div> {{$post->excerpt}} </div>
            </article>
        @endforeach
    </body>
</html>
