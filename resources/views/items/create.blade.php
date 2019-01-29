@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <h4>Create Item</h4>

            <form method="POST" action="{{route('items.store')}}">
                @csrf

                <input type="text" name="name" value="" placeholder="Item Name" />

                <button type="submit">Create</button>
            </form>

        </div>
    </div>

@endsection