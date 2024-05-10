<form method="POST" action="{{ route('update') }}">
    @csrf
    <input id="prodId" name="prodId" type="hidden" value="{{$post->id}}" />
    <input type="text" name="title" value="{{ $post->title }}" />
    <textarea name="body" cols="30" rows="10"> {{ $post->body }} </textarea>
    <button type="submit">Enviar</button>
</form>
