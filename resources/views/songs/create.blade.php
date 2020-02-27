
<form action="http://www.cbp-dataphp.test:8080/Day28/morning/public/songs/add" method="post">
  @csrf
  <input type='text' placeholder='Link for the song' name='link' />
  <input type='text' placeholder='Name of the song' name='title' />
  <input type='text' placeholder="Author's name" name='author' />

  <select>
    <option>1</option>
    <option>2</option>
  </select>

  <input type='text' placeholder='Genre' name='genre' />
  <input type='textarea' placeholder='What do you think about it?' name='description' />
  <input type='Submit' />
</form>