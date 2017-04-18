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
        .lable-product + .el-input {
            width: 50%;
        }
        form > *, .el-button {
            margin-top: 15px;
        }
    </style>
    <div id="root">

        <el-row :gutter="20">
            <el-col :offset="3" :span="18">
                <h1>Create Product - Cascader</h1>
                <form action="{{ route('menus.store') }}">
                    <label for="">分類：</label>
                    <my-cascader v-model="form.parent_id"></my-cascader><span>Select Parent id: @{{ form.parent_id }}</span>
                    <br/>
                    <label class="lable-product" for="">產品名稱：</label>
                    <el-input size="large" placeholder="Product name here ..." v-model="form.name"></el-input>
                    <el-button type="primary">建立</el-button>
                </form>
            </el-col>
        </el-row>

    </div>
@stop
