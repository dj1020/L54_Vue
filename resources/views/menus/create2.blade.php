@extends('menus.layouts', ['pageName' => 'menu-create2'])

@section('header-css')
    {{--<link rel="stylesheet" href="{{ asset('css/elementUI.css') }}"/>--}}
@stop

@section('footer-js')
    <script src="/js/menus/manifest.js"></script>
    <script src="/js/menus/vendor.js"></script>
    <script src="/js/menus/create2.js"></script>
@stop

@section('content')
    <style>
        .el-cascader {
            min-width: 420px;
        }
    </style>
    <div id="root">

        <el-row :gutter="20">
            <el-col :offset="3" :span="18">
                <h1>Create Menu 2 - Cascader</h1>
                <my-cascader></my-cascader>
            </el-col>
        </el-row>

    </div>
@stop
