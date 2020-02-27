<body>
  @foreach($songs as $song)
    <div style="background-color: black; color: white; text-align: center; margin: 0 auto; margin-bottom: 3rem; padding: 1rem; width: 70vw;box-shadow: 0 .3rem .3rem rgba(0,0,0,0.7);">
      <h1>{{$song->title}}</h1>
      <h2>{{$song->author}}</h2>
      <iframe width="420" height="315" allowfullscreen frameborder="0"
        src="{{$song->link}}">
      </iframe>
      <h4>{{$song->genre}}</h4>
      <h5>{{$song->description}}</h5>
      <a style="text-decoration:none; color: red;"
        href="http://www.cbp-dataphp.test:8080/Day28/morning/public/songs/edit/{{$song->id}}">Edit...</a>

      @if($song->id)
      <a style="text-decoration:none;" href="{{ action('SongController@delete', [$song->id])}}">Delete...</a>
      @endif
    </div>
  @endforeach
  <div style="background-color: salmon; width: 30vw; text-align: center; height: 30vh; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 .3rem .3rem rgba(0,0,0,0.7); margin-bottom: 4rem; margin-left: 20rem;">
    <a href="http://www.cbp-dataphp.test:8080/Day28/morning/public/songs/create"  style=" text-decoration: none; color: black;">Keep adding songs</a>
  </div>
</body>