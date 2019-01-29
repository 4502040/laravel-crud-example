@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <h4>Show Item</h4>

            <table class="table table-bordered">
                <tr>
                    <td>Item Name:</td><td>{{$model->name}}</td>
                </tr>
                <tr>
                    <td>Created:</td><td>{{$model->created_at}}</td>
                </tr>
            </table>

        </div>
    </div>

@endsection