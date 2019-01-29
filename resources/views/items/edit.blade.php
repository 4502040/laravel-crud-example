@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <h4>Update Item</h4>

            <form method="POST" action="{{route('items.update',['id'=>$model->id])}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <input type="text" name="name" value="{{$model->name}}" placeholder="Item Name" />

                <button type="submit">Update</button>
            </form>

        </div>
    </div>

@endsection