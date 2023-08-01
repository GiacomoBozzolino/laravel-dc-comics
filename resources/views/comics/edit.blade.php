@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div>
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label" >Title</label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label class="control-label" >Description</label>
                        <input type="text" id="description" name="description" class="form-control" placeholder="description">
                    </div>
                    <div class="form-group">
                        <label class="control-label" >Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="price">
                    </div>
                    <div class="form-group">
                        <label class="control-label" >Series</label>
                        <input type="text" id="Series" name="series" class="form-control" placeholder="Series">
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