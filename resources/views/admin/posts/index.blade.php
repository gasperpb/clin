<a href="{{route('post.create')}}">Criar um Post</a>

<H1> Post</H1>


@foreach ($posts as $post)

    <p>{{ $post->title }}</p>

@endforeach
