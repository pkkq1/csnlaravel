@section('hidden_wapper', true)
@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row row_wrapper">
            <div class="col-md-9">
                <div class="box_playlist border-0">
                    <h3 class="title">UPLOAD SELECTOR</h3>
                </div>
                <div class="card card_playlist">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="upload.html" style="text-decoration: none;" title="">
                                <button id="btn_cloud_up"
                                        class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light btn-upload"
                                        type="button"><i class="material-icons">cloud_upload</i> Upload Music
                                </button>
                            </a>
                            <a href="upload.html" style="text-decoration: none;" title="">
                                <button id="btn_cloud_up"
                                        class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light btn-upload"
                                        type="button"><i class="material-icons">cloud_upload</i> Upload Video
                                </button>
                            </a>
                            <a href="upload.html" style="text-decoration: none;" title="">
                                <button id="btn_cloud_up"
                                        class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light btn-upload"
                                        type="button"><i class="material-icons">cloud_upload</i> Upload Album
                                </button>
                            </a>
                            <a href="upload.html" style="text-decoration: none;" title="">
                                <button id="btn_cloud_up"
                                        class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light btn-upload"
                                        type="button"><i class="material-icons">cloud_upload</i> Upload Cover
                                </button>
                            </a>
                            <a href="/upload/artist" style="text-decoration: none;" title="">
                                <button id="btn_cloud_up"
                                        class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-light btn-upload"
                                        type="button"><i class="material-icons">cloud_upload</i> Upload Artist
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <a class="catalog1 weekend" style="background-image: url(https://i.scdn.co/image/6a6098cd1369420b9b6ff941ff41ded1b1dceb06);" href="#" title="">
                    <span>weekend</span>
                </a>
                <a class="catalog1 edm" style="background-image: url(https://i.scdn.co/image/c8ffd7bd0df17c05fd8a1efef33ad793eea0e47d);" href="#" title="">
                    <span>EDM</span>
                </a>
                <a class="catalog1 love" style="background-image: url(https://i.scdn.co/image/56228f9353b23405516a6ea8af1c22083f450b57);" href="#" title="">
                    <span>love</span>
                </a>
                <br>
                <div class="card mb-3 cardads">
                    <a class="card-img-top" href="#" title=""><img class="" src="http://adi.admicro.vn/adt/adn/2018/03/7a-ad-adx5aa737ceba8f7.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection