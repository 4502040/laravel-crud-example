@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <h4>Items</h4>

            <table class="table table-bordered">
                @foreach($models as $model)
                    <tr>
                        <td>{{$model->name}}</td>
                        <td>
                            <a href="{{route('items.show',['id'=>$model->id])}}">Show</a>
                            <a href="{{route('items.edit',['id'=>$model->id])}}">Edit</a>
                            <a href="{{route('items.delete',['id'=>$model->id])}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>

@endsection

