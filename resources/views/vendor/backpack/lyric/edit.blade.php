<?php
use App\Library\Helpers;
use App\Models\MusicModel;
$music = MusicModel::find($fields['music_id']['value']);
$partListenFullUrl = Helpers::listen_url($music, '');
$oldLyricArr = preg_split('/\r\n|\r|\n/', htmlspecialchars_decode($music->music_lyric, ENT_QUOTES));
$sugLyricArr = preg_split('/\r\n|\r|\n/', htmlspecialchars_decode($fields['music_lyric']['value'], ENT_QUOTES));
?>
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
    <script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/jQuery-File-Upload-9.21.0/js/vendor/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- Default box -->
            @if ($crud->hasAccess('list'))
                <a href="{{ url($crud->route) }}" class="hidden-print"><i class="fa fa-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a><br><br>
            @endif

            @include('crud::inc.grouped_errors')

            <form method="post"
                  action="{{ url($crud->route.'/'.$entry->getKey()) }}"
                  enctype="multipart/form-data" >
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
                            <h3 class="box-title" style="line-height: 30px;">{{ trans('backpack::crud.edit') }}</h3>
                        @else
                            <div style="font-size: 20px; font-family: 'SFProDisplay-Bold';" class="title"><a style="color: black;" href="/{{$partListenFullUrl}}" >{{$music->music_title}}</a> - <span><?php echo Helpers::rawHtmlArtists($music->music_artist_id, $music->music_artist) ?></span></div>
                        @endif
                        <hr>
                        <div class="form-group col-xs-6">
                            <h3 class="box-title">Thông tin gợi ý</h3>
                        </div>
                        <div class="form-group col-xs-6">
                            <h3 class="box-title">Thông tin lyric cũ</h3>
                        </div>
                    </div>
                    <div class="box-body row display-flex-wrap" style="display: flex;flex-wrap: wrap;">
                        <div class="form-group col-xs-6">
                            @foreach($sugLyricArr as $key => $item)
                                <p class="<?php echo isset($oldLyricArr[$key]) ? ($oldLyricArr[$key] != $item ? 'color-red' : '') : 'color-red' ?>">{{$item}}</p>
                            @endforeach
                        </div>
                        <div class="form-group col-xs-6">
                            @foreach($oldLyricArr as $key => $item)
                                <p class="">{{$item}}</p>
                            @endforeach
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">

                        <div id="saveActions" class="form-group">

                            <input type="hidden" name="save_action" value="{{ $saveAction['active']['value'] }}">

                            <div class="btn-group">
                                <a href="/lyric/" class="btn btn-primary suggest_lyric" style="margin-right: 5px;"><span class="fa fa-arrow-circle-right"></span> &nbsp;Xác nhận gợi ý</a>
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                    <span data-value="{{ $saveAction['active']['value'] }}">Lưu chỉnh sửa</span>
                                </button>
                                <ul class="dropdown-menu">
                                    @foreach( $saveAction['options'] as $value => $label)
                                        <li><a href="javascript:void(0);" data-value="{{ $value }}">{{ $label }}</a></li>
                                    @endforeach
                                </ul>

                            </div>

                            <a href="{{ $crud->hasAccess('list') ? url($crud->route) : url()->previous() }}" class="btn btn-default"><span class="fa fa-ban"></span> &nbsp;{{ trans('backpack::crud.cancel') }}</a>
                        </div>


                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </form>
        </div>
    </div>
@endsection
@push('after_scripts')
    <div id="uploadimageModal" class="modal" role="dialog">
        <div class="modal-dialog" style="width: auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cắt sửa ảnh</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10 text-center">
                            <div id="image_demo" style="width:470px; margin-top:30px"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success crop_image">Cắt ảnh</button>
                    <button class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/croppie.js"></script>
    <script>
        $('input[name=artist_avatar]').parent().addClass('hidden');
        $('input[name=artist_cover]').parent().addClass('hidden');

    </script>
@endpush
<style>
    .color-blue {
        color: green;
    }
    .color-red {
        color: red;
    }
</style>
