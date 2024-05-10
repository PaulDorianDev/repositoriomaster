<div class = container>
 @foreach ($posts as $post)

 <p> {{ $post->title }}</p>

 <a href="{{ route('show', ['post' => $post]) }}">Mostrar</a>

 @endforeach

 {{ $posts->links() }}
</div>
