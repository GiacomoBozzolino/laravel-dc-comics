@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div>
                <form action="" method="POST">
                    @crsf
                    <div class="form-group">
                        <label class="control-label" >Titolo</label>
                        <input type="text" id="title" name="title" class="fomr-control" placeholder="Titolo">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


@endsection