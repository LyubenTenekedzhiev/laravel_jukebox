
<form action="http://www.cbp-dataphp.test:8080/Day28/morning/public/songs/edit/{{$song->id}}" method="post">
  @csrf
  <input type='text' placeholder='Link for the song' name='link' value="{{$song->link}}" />
  <input type='text' placeholder='Name of the song' name='title' value="{{$song->title}}" />
  <input type='text' placeholder="Author's name" name='author' value="{{$song->author}}" />

  <select name="author_id">
    <option>1</option>
    <option>2</option>
  </select>

  <input type='text' placeholder='Genre' name='genre' value="{{$song->genre}}" />

  <select name="genre_id">
    <option>1</option>
    <option>2</option>
  </select>

  <input type='textarea' placeholder='What do you think about it?' name='description' value="{{$song->description}}" />
  <input type='Submit' />
</form>
