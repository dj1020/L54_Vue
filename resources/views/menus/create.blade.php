@extends('menus.layouts', ['pageName' => 'menu-create'])

@section('header-css')
    <link rel="stylesheet" href="/css/menus/create.css"/>
@stop

@section('footer-js')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <h1>Create Menu</h1>
        </div>
        <hr/>
        <div class="row">
            <form action="{{ route('menus.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="menuName">Menu Name</label>
                    <input class="form-control" type="text" name="name" id="menuName"
                           placeholder="Menu Name Here"/>
                </div>
                <div class="form-group">
                    <label for="selectParent">Select Parent</label>
                    <select class="form-control" name="parent_id">
                        <option value="">無</option>
                        @foreach ($menus as $menu)
                            <option value="{{ $menu->id }}">{{ $menu->route() }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@stop
