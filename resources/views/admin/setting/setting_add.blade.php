@extends('layouts.admin_master_full')

@section('content-header')
    <section class="content-header">
        <div class="pull-left">
            <button type="submit" form="form-category" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="ذخیره"><i class="fa fa-save"></i></button>
            <a href="/admin/menu" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="لغو"><i class="fa fa-reply"></i></a></div>
        <h1>
           تنظیمات سایت

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-bars"></i> وبسایت</a></li>
            <li class="active">تنظیمات سایت</li>
        </ol>
    </section>
@endsection

@section('content')

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-plus "></i>تنظیمات سایت</h3>
            </div>
            <div class="panel-body">
                <form action="{{route('admin.setting.update')}}" class="form-horizontal" method="post" enctype="multipart/form-data" id="form-category">
                    {{csrf_field()}}
{{method_field('PATCH')}}
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="name">لوگو</label>
                        <div class="col-sm-6">
                            <input id="name" name="logo" value="{{old('logo')}}"  class="form-control" type="file">
                            @if ($errors->has('logo'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <img src="{{url('/')}}/{{$setting->logo}}" width="300" height="100">

                    </div>

                   {{-- <div class="form-group required">
                        <label class="col-sm-2 control-label" for="name">تبلیغ بالای سایت</label>
                        <div class="col-sm-6">
                            <input id="ads" name="ads" value="{{old('ads')}}"  class="form-control" type="file">
                            @if ($errors->has('ads'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('ads') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <img src="{{url('/')}}/{{$setting->ads}}" class="center-block">

                    </div>--}}

                   {{-- <div class="form-group required">
                        <label class="col-sm-2 control-label" for="link">لینک عکس تبلیغ</label>
                        <div class="col-sm-8">
                            <input name="ads_url" value="{{$setting->ads_url}}" placeholder="http://xbody.com" id="link" class="form-control text-left" style="direction: ltr;" type="text">
                            @if ($errors->has('ads_url'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('ads_url') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
--}}
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="link">عنوان صفحه محصول</label>
                        <div class="col-sm-8">
                            <input name="product_header" value="{{$setting->product_header}}" placeholder="" id="link" class="form-control text-left" style="direction: ltr;" type="text">
                            @if ($errors->has('product_header'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('product_header') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="link">متن صفحه محصول</label>
                        <div class="col-sm-8">
                            <textarea name="product_des"  placeholder="{{$setting->product_des}}" id="link" class="form-control text-left" style="direction: ltr;" type="text">{{$setting->product_des}}</textarea>
                            @if ($errors->has('product_des'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('product_des') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="link">آی دی فیس بوک</label>
                            <div class="col-sm-8">
                                <input name="facebook" value="{{$setting->facebook}}" placeholder="xbody" id="link" class="form-control text-left" style="direction: ltr;" type="text">
                                @if ($errors->has('facebook'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="link">آی دی تلگرام</label>
                        <div class="col-sm-8">
                            <input name="telegram" value="{{$setting->telegram}}" placeholder="xbody" id="link" class="form-control text-left" style="direction: ltr;" type="text">
                            @if ($errors->has('telegram'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('telegram') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="link">آی دی اینستاگرام</label>
                        <div class="col-sm-8">
                            <input name="instagram" value="{{$setting->instagram}}" placeholder="xbody" id="link" class="form-control text-left" style="direction: ltr;" type="text">
                            @if ($errors->has('instagram'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('instagram') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


</form>

</div>
</div>

</section>

@endsection