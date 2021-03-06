@extends('admin.layouts.base')

@section('title','修改权限')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')
    <div class="main animsition">
        <div class="container-fluid">
            <div class="row page-title-row" style="margin:5px;">
                <div class="btn-group pull-right" style="margin-right: 10px">
                    <a href="{{ Url('/admin/permission/index') }}" class="btn btn-sm btn-default"><i class="fa fa-list"></i>&nbsp;权限列表</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">编辑权限</h3>
                        </div>
                        <div class="panel-body">

                            @include('admin.partials.errors')
                            @include('admin.partials.success')
                            
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ url('/admin/permission/'. $id) }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="id" value="{{ $id }}">
                                @include('admin.permission._form', ['formSubmitButtonText'=>'修改'])
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop