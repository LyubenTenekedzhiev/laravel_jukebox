
@foreach($songs as $song)
  <div style="background-color: black; color: white; text-align: center; margin-bottom: 3rem; padding: 1rem">
    <h1>{{$song->title}}</h1>
    <h2>{{$song->author}}</h2>
    <h3>{{$song->link}}</h3>
    <h4>{{$song->genre}}</h4>
    <h5>{{$song->description}}</h5>

    @if($song->id)
    <a href="{{ action('SongController@delete', [$song->id])}}">Delete</a>
    @endif
  </div>
@endforeach