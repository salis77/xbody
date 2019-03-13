@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.md.bootstrap.datetimepicker.style.css')}}">
    <meta content="{{csrf_token()}}" name="content">

    <style>
        .xbody-img{
            width: 80%;
            height:80%;
            margin-left: 10%;
            margin-top: 5%;
            border-radius: 50px;
        }
        .titlebranch{
            border-bottom: 1px solid #f7ced6;
            font-weight: bold;
            font-size: 25px;
        }
        .desc-element{
            margin-left: 100%;
        }
        /*.xbody-form-group{*/
            /*background-color: darkgrey;*/
            /*border-radius: 30px;*/
        /*}*/
        .branchinfo{
            margin-bottom: 5%;
        }
    </style>
@endsection
@section('main_content')
    <div class="container-fluid">
        <div class="p-2 " style="width: 100%; height: 160px;"></div>
        @php
        $i=1;
        @endphp
        @foreach($branches as $branch)

        <div class="row xbody-form-group" style=" @if($i==1) display: inline-flex !important; @endif">
            @if($i%2)
            <div class="col-md-3">
                <img class="xbody-img" src="{{$branch->image_original}}">
            </div>
            <div class="col-md-9">
                <p class="titlebranch" style="text-align: right;">  شعبه {{$branch->name}}</p>
                <div style="text-align: right;">
                    {!! $branch->description !!}
                </div>

                <div class="branchinfo" style="text-align: center;">
                   <span class="btn btn-danger"><i class="fa fa-phone-square"></i> {{$branch->phone}}</span>
                    <span class="btn btn-primary"><i class="fa fa-map
"></i> {{$branch->address}}</span>
                    <a href="{{$branch->page_url}}" target="_blank">
                    <span class="btn btn-warning"><i class="fa fa-tv"></i> صفحه شعبه</span>
                    </a>
                    @if($branch->social_media)
                        @if(json_decode($branch->social_media)->telegram_id !=null)
                        <a href="https://t.me/{{json_decode($branch->social_media)->telegram_id}}" target="_blank">
                    <span class="btn btn-info"><img src="{{asset('images/telegram.png')}}" style="width: 80%; height: 80%"></span>
                        </a>
                        @endif
                            @if(json_decode($branch->social_media)->instagram_id !=null)
                    <a href="https://instagram.com/{{json_decode($branch->social_media)->instagram_id}}" target="_blank">
                    <span class="btn btn-light"><img src="{{asset('images/instagram.png')}}" style="width: 80%; height: 80%"></span>
                    </a>
                                @endif
                        @endif
                </div>
            </div>
                @else
                <div class="col-md-9">
                    <p class="titlebranch" style="text-align: right;">شعبه {{$branch->name}} </p>
                    <p style="text-align: right;">
                        {!! $branch->description !!}
                    </p>
                    <div class="branchinfo" style="text-align: center;">
                        <span class="btn btn-danger"><i class="fa fa-phone-square"></i> {{$branch->phone}}</span>
                        <span class="btn btn-primary"><i class="fa fa-map
"></i> {{$branch->address}}</span>
                        <a href="{{$branch->page_url}}" target="_blank">
                            <span class="btn btn-warning"><i class="fa fa-tv"></i> صفحه شعبه</span>
                        </a>
                        @if($branch->social_media)
                            @if(json_decode($branch->social_media)->telegram_id !=null)
                                <a href="https://t.me/{{json_decode($branch->social_media)->telegram_id}}" target="_blank">
                                    <span class="btn btn-info"><img src="{{asset('images/telegram.png')}}" style="width: 80%; height: 80%"></span>
                                </a>
                            @endif
                            @if(json_decode($branch->social_media)->instagram_id !=null)
                                <a href="https://instagram.com/{{json_decode($branch->social_media)->instagram_id}}" target="_blank">
                                    <span class="btn btn-light"><img src="{{asset('images/instagram.png')}}" style="width: 80%; height: 80%"></span>
                                </a>
                            @endif
                        @endif
                    </div>

                </div>
                <div class="col-md-3">
                    <img class="xbody-img" src="{{$branch->image_original}}">
                </div>
            @endif
        </div>
            @php
                $i++;
            @endphp
{{--
        <div class="row xbody-form-group">
            <div class="col-md-8">
                <p style="text-align: right;">نام شعبه2</p>
                <p style="text-align: right;">2- لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            </div>
            <div class="col-md-4">
                <img class="xbody-img" src="{{asset('images/contact/1.jpg')}}">
            </div>
        </div>
--}}
            @endforeach
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <label style="margin-left: 66%;">موقعیت شعبات روی نقشه</label>
                <div id="mapid" style="height: 88%;"></div>
            </div>
            <div class="col-md-6">
                <form action="{{route('message.store')}}" method="post" id="frm-send-message">
                    {{csrf_field()}}
                    <input type="hidden" name="status" value="1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" id="field_name" name="name" placeholder="نام">
                                <label id="name_error" class="pull-right" style="color:red; display: none;"></label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input class="form-control" type="text" id="field_lastname" name="lastname" placeholder="نام خانوادگی">
                                <label id="lastname_error" class="pull-right" style="color:red; display: none;"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="phonenumber" id="field_phonenumber" placeholder="تلفن همراه">
                        <label id="phonenumber_error" class="pull-right" style="color:red; display: none;"></label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="title" id="field_title" placeholder="عنوان">
                        <label id="title_error" class="pull-right" style="color:red; display: none;"></label>
                    </div>
                    <div class="form-group">
                        <textarea name="text" rows="5" class="form-control" id="field_text" placeholder="متن"></textarea>
                        <label id="text_error" class="pull-right" style="color:red; display: block;"></label>
                    </div>
                    <div class="form-group">
                        <button class="form-control btn btn-primary" id="btn-send-message">ارسال</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--waiting gif--}}
    <div class="container-fluid" id="register_wait" style="width: 100%;height: 100%;position: fixed;top: 0;background-color: #0000005c;z-index:5;display: none;">
        <img src="{{ asset('gifs/AppleLoading.gif') }}" style="margin-top: 8%;height: 400px;width: 500px;margin-left: 36%;">
    </div>
    {{--end of waiting gif--}}
@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{asset('js/jquery.md.bootstrap.datetimepicker.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
            integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
            crossorigin=""></script>
    {{--map script--}}
    <script>
        var mymap = L.map('mapid').setView([51.505, -0.09], 13);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox.streets'
        }).addTo(mymap);

        /*marker*/
        var marker = L.marker([51.5, -0.09]).addTo(mymap);
        /*marker text*/
        marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
    </script>



    {{--ajax send message--}}
    <script>
        $("#btn-send-message").on('click' , function (event) {
           event.preventDefault();
            $("#register_wait").css('display' , 'block');
            $("#name_error").css('display' , 'none');
            $("#lastname_error").css('display' , 'none');
            $("#title_error").css('display' , 'none');
            $("#phonenumber_error").css('display' , 'none');
            $("#text_error").css('display' , 'none');

            var data = $("#frm-send-message").serialize();
            var url = $("#frm-send-message").attr('action');
            var type = $("#frm-send-message").attr('method');

            $.ajax({
                data:data,
                url:url,
                type:type,
                success:function (data) {
                    $("#register_wait").css('display' , 'none');
                    swal(
                        'ارسال شد',
                        'پیام شما با موفقیت ارسال شد.',
                        'success'
                    )
                },
                error:function (error) {
                    console.log(error.responseJSON.errors);
                    if(error.responseJSON.errors.name){
                        $("#name_error").text(error.responseJSON.errors.name[0]);
                        $("#name_error").css('display' , 'inline-flex');
                    }
                    if(error.responseJSON.errors.lastname){
                        $("#lastname_error").text(error.responseJSON.errors.lastname[0]);
                        $("#lastname_error").css('display' , 'inline-flex');
                    }
                    if(error.responseJSON.errors.phonenumber){
                        $("#phonenumber_error").text(error.responseJSON.errors.phonenumber[0]);
                        $("#phonenumber_error").css('display' , 'inline-flex');
                    }
                    if(error.responseJSON.errors.title){
                        $("#title_error").text(error.responseJSON.errors.title[0]);
                        $("#title_error").css('display' , 'inline-flex');
                    }
                    if(error.responseJSON.errors.text){
                        $("#text_error").text(error.responseJSON.errors.text[0]);
                        $("#text_error").css('display' , 'inline-flex');
                    }
                    $("#register_wait").css('display' , 'none');
                }
            });
        });
    </script>



@endsection