<form method="POST" action="{{ route('store') }}">
@csrf
<input type="text" name="title"></input>
<textarea name="body" cols="30" rows="10">  </textarea>
<button type="submit"></button>
</form>
