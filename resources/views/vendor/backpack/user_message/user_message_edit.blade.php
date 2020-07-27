@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            <span class="text-capitalize">{{ $crud->entity_name_plural }}</span>
            <small>{{ trans('backpack::crud.edit').' '.$crud->entity_name }}.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix'),'dashboard') }}">{{ trans('backpack::crud.admin') }}</a></li>
            <li><a href="{{ url($crud->route) }}" class="text-capitalize">{{ $crud->entity_name_plural }}</a></li>
            <li class="active">{{ trans('backpack::crud.edit') }}</li>
        </ol>
    </section>
@endsection

@section('content')
    <?php
    use App\Models\MessageUserModel;
    use App\Models\UserModel;
    $listMesssage = MessageUserModel::where('user_by_id', $fields['user_by_id']['value'])->orderBy('id', 'desc')->paginate(LIMIT_PAGE_USER_MSG);
    $user = UserModel::where('id',$fields['user_by_id']['value'])->first();
    ?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- Default box -->
            @if ($crud->hasAccess('list'))
                <a href="{{ url($crud->route) }}" class="hidden-print"><i class="fa fa-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a><br><br>
            @endif

            @include('crud::inc.grouped_errors')

            <form method="post"
                  action="{{ url($crud->route.'/'.$entry->getKey()) }}"
                  @if ($crud->hasUploadFields('update', $entry->getKey()))
                  enctype="multipart/form-data"
                    @endif
            >
                {!! csrf_field() !!}
                {!! method_field('PUT') !!}
                <div class="box">
                    <div class="box-header with-border">
                    @if ($crud->model->translationEnabled())
                        <!-- Single button -->
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{trans('backpack::crud.language')}}: {{ $crud->model->getAvailableLocales()[$crud->request->input('locale')?$crud->request->input('locale'):App::getLocale()] }} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    @foreach ($crud->model->getAvailableLocales() as $key => $locale)
                                        <li><a href="{{ url($crud->route.'/'.$entry->getKey().'/edit') }}?locale={{ $key }}">{{ $locale }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <h3 class="box-title" style="line-height: 30px;">Xem Nhắn Tin User: <a href="/user/{{$fields['user_by_id']['value']}}" target="_blank">{{$user->name}}</a></h3>
                        @else
                            <h3 class="box-title">Xem Nhắn Tin User: <a href="/user/{{$fields['user_by_id']['value']}}" target="_blank">{{$user->name}}</a></h3>
                        @endif
                    </div>
                    <div class="box-body row display-flex-wrap" style="display: flex;flex-wrap: wrap;">
                        <!-- load the view from the application if it exists, otherwise load the one in the package -->

                        <div class="form-group col-xs-12">
                            <label>Nội dung: </label>
                            <div>
                                <?php
                                echo $listMesssage->links();
                                foreach (array_reverse($listMesssage->ToArray()['data']) as $item) {
                                ?>
                                @if(!$item['admin_reply_id'])
                                    <div class="alert alert-primary" role="alert">
                                        <a href="/user/{{$item['user_by_id']}}" class="alert-link">{{$user->name}}</a>: {{$item['text']}} <i style="font-size: 11px;">({{$item['created_at']}})</i>
                                    </div>
                                @else
                                    <div class="alert alert-info" role="alert">
                                        <a href="/user/{{$item['admin_reply_id']}}" class="alert-link">Hỗ trợ {{$item['admin_username']}}</a>: {{$item['text']}} <i style="font-size: 11px;">({{$item['created_at']}})</i>
                                    </div>
                                @endif
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Trả lời tin nhắn</label>
                            <textarea name="text_new" class="form-control"></textarea>
                        </div>
                        @if(view()->exists('vendor.backpack.crud.form_content'))
                            @include('vendor.backpack.crud.form_content', ['fields' => $fields, 'action' => 'edit'])
                        @else
                            @include('crud::form_content', ['fields' => $fields, 'action' => 'edit'])
                        @endif
                    </div><!-- /.box-body -->

                    <div class="box-footer">

                        <div class="btn-group">
                            <button type="submit" class="btn btn-success">
                                <span class="fa fa-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                <span data-value="{{ $saveAction['active']['value'] }}">{{ $saveAction['active']['label'] }}</span>
                            </button>

                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aira-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">&#x25BC;</span>
                            </button>

                            <ul class="dropdown-menu">
                                @foreach( $saveAction['options'] as $value => $label)
                                    <li><a href="javascript:void(0);" data-value="{{ $value }}">{{ $label }}</a></li>
                                @endforeach
                            </ul>

                        </div>

                        <a href="{{ $crud->hasAccess('list') ? url($crud->route) : url()->previous() }}" class="btn btn-default"><span class="fa fa-ban"></span> &nbsp;{{ trans('backpack::crud.cancel') }}</a>

                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </form>
        </div>
    </div>
    <style>
        .alert-primary {
            color: #004085;
            background-color: #cce5ff8a;
            border-color: #b8daff!important;
        }
        .alert-info {
            background-color: #d1ecf1!important;
            border-color: #b8daff!important;
            color: #3c3030!important;
        }
        .alert {
            position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
        }
        .alert a {
            color: #3c8dbc;
        }
    </style>
@endsection
