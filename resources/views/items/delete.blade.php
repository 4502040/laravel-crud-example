@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <h4>Delete Item?</h4>

            <form method="POST" action="{{route('items.destroy',['id'=>$model->id])}}">
                @csrf
                <input type="hidden" name="_method" value="DELETE">

                <button type="submit">Delete</button>
            </form>

        </div>
    </div>

@endsection