 
 @foreach($comics as $comic)
    <div class="col-2">
        <li class=" pt-5 pb-2">
            <div>
                <a href="{{route('comics.show', $comic->id)}}">
                    <img class="thumb" src="{{$comic ->thumb }}" alt="{{$comic ->title }}">
                    <div >
                    {{$comic ->title }}
                    </div>
                </a>

            </div>
            <a  class="btn btn-warning btn-sm" href="{{route('comics.edit', $comic->id)}}"><i class="fas fa-edit"></i></a> 
        </li> 
    </div>
@endforeach 