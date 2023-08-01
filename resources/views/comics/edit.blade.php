@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf
                @method ('PUT')
                <div class="form-group">
                    <label class="control-label" >Title</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Title" value="{{old('title')?? $comic->title}}">
                </div>
                <div class="form-group ">
                    <div>
                        <label class="control-label" >Thumbnail</label>
                    </div>
                    @if($comic->thumb !=null || $comic->src !='')
                    <img src="{{$comic->thumb}}" class="img-fluid " alt="">  
                    @else
                    Nessuna copertina inserita 
                    @endif
                    <input type="text" id="thumb" name="thumb" class="form-control" placeholder="thumb"value="{{old('thumb')?? $comic->thumb}}">
                </div>
                <div class="form-group">
                    <label class="control-label" >Description</label>
                    
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="description">{{old('description') ?? $comic->description}}</textarea>
                </div>
                <div class="form-group">
                    <label class="control-label" >Price</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="price"value="{{old('price') ?? $comic->price}}">
                </div>
                <div class="form-group">
                    <label class="control-label" >Series</label>
                    <input type="text" id="Series" name="series" class="form-control" placeholder="Series" value="{{old('series') ?? $comic->series}}">
                </div>
                <div class=" form-group mt-2">
                    <button type="submit" clas="btn btn-primary"> Salva</button>
                </div>
            </form>
            </div>
        </div>

    </div>
</div>


@endsection