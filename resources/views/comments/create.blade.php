<form method="POST" action="{{route('storeComment', $postId)}}">
  @csrf
  <input type='text' name="text">
  <button> send comment</button>
</form>