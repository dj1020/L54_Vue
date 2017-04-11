@extends('menus.layouts', ['pageName' => 'menu-index'])

@section('header-css')
    <link rel="stylesheet" href="{{ asset('css/elementUI.css') }}"/>
@stop

@section('footer-js')
    <script src="/js/menus/index.js"></script>
@stop

@section('content')
    <style>
        * {
            border: 1px solid darkred;
        }
    </style>

    <div id="root">

        <el-row :gutter="20">
            <el-col :offset="3" :span="18">
                <h1>Menu List</h1>


            </el-col>
        </el-row>

    </div>
@stop
