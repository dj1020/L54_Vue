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
            margin-right: 20px;
        }
        form > *, .el-button {
            margin-top: 15px;
        }
    </style>
    <div id="root">

        <el-row :gutter="20">
            <el-col :offset="3" :span="18">
                <h1>Create Menu 2 - Cascader</h1>
                <form action="{{ route('menus.store') }}">
                    <my-cascader v-model="form.parent_id"></my-cascader><span>Select Parent id: @{{ form.parent_id }}</span>
                    <el-input size="large" placeholder="Menu name here ..." v-model="form.name"></el-input>
                    <el-button type="primary">建立</el-button>
                </form>
            </el-col>
        </el-row>

    </div>
@stop
