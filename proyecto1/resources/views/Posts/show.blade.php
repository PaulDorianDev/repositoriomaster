<div>
    <p>{{ $post->title }}</p>
    <p>{{ $post->body }}</p>
    <form method="GET" action="{{ route('edit', ['post' => $post->id])}}">
        @csrf
        <button type ="submit"> Editar </button>
        </form>

    <form action="{{ route('delete', ['post' => $post]) }}">
        @csrf
        <button type ="submit"  > Eliminar </button>
        </form>
</div>




