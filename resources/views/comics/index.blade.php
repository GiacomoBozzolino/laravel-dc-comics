 
 @foreach($comics as $comic)
    <div class="col-2">
        <li class="d-flex pt-5 pb-2">
            
            <a href="{{route('comics.show', $comic->id)}}">
                <img class="thumb" src="{{$comic ->thumb }}" alt="{{$comic ->title }}">
                <div >
                {{$comic ->title }}
                </div>
            </a>
        </li> 
    </div>
@endforeach 