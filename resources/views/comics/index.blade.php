 
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
            <div class="d-flex">
                {{-- bottone per modifica --}}
                <a  class="btn btn-warning btn-sm me-2" href="{{route('comics.edit', $comic->id)}}">
                    <i class="fas fa-edit"></i>
                </a> 
                {{-- bottone per cancellazione (dentro form) --}}
                <form action="{{route('comics.destroy', $comic->id)}}" onsubmit="return confirm('Vuoi davvero cancellare il fumetto?')" method="post" >
                    @csrf
                    @method ('DELETE')
                    <button  class="btn btn-danger btn-sm" type="submit">
                        <i class="fas fa-trash"></i>
                    </button> 
                </form>
            </div>
        </li> 
    </div>
@endforeach 