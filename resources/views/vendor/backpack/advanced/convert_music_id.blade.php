@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            <span class="text-capitalize">{{ $crud->entity_name_plural }}</span>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix'), 'dashboard') }}">{{ trans('backpack::crud.admin') }}</a></li>
            <li><a href="{{ url($crud->route) }}" class="text-capitalize">{{ $crud->entity_name_plural }}</a></li>
            <li class="active">{{ trans('backpack::crud.list') }}</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- Default box -->
            <form method="post" action="/admin/convert_music_id">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="PUT">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chuyển đổi</h3>
                    </div>
                    <div class="box-body row display-flex-wrap" style="display: flex;flex-wrap: wrap;">
                        <!-- load the view from the application if it exists, otherwise load the one in the package -->
                        <!-- load the view from type and view_namespace attribute if set -->

                        <!-- textarea -->
                        <div class="form-group col-xs-6">
                            <input type="text" name="code" class="form-control" placeholder="code or music_id" value="{{$code ?? ''}}" />
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Kết Quả</label>
                            <p style="color: red">{{$result ?? ''}}</p>
                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">

                        <div id="saveActions" class="form-group">

                            <input type="submit" class="btn btn-success" name="action" value="Chuyển đổi" />

                        </div>

                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </form>
        </div>
    </div>
@endsection

@section('after_scripts')

@endsection
