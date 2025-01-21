@extends('layout')
@section('content')
<div id="upload">
    <div class="row">
     <x-validation></x-validation>
        <!-- upload -->
        <div class="col-md-8">
            <h1 class="page-title"><span>@lang('videos.pageTitle1')</span> @lang('videos.pageTitle2')</h1>
            <form method="post" action="{{route('video.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label>@lang('videos.title')</label>
                        <input type="text" class="form-control" placeholder="@lang('videos.title')" name="name" value="{{old('name')}}">
                    </div>
                    <div class="col-md-6">
                        <label>@lang('videos.length')</label>
                        <input type="text" class="form-control" placeholder="@lang('videos.length')" name="length" value="{{old('length')}}">
                    </div>
                    <div class="col-md-6">
                        <label>@lang('videos.slug')</label>
                        <input type="text" class="form-control" placeholder="@lang('videos.slug')" name="slug" value="{{old('slug')}}">
                    </div>
                    <div class="col-md-6">
                        <label>@lang('videos.url')</label>
                        <input type="text" class="form-control" placeholder="@lang('videos.url')" name="url" value="{{old('url')}}">
                    </div>
                    <div class="col-md-6">
                        <label>@lang('videos.thumbnail')</label>
                        <input type="text" class="form-control" placeholder="@lang('videos.thumbnail')" name="thumbnail" value="{{old('thumbnail')}}">
                    </div>
                    <div class="col-md-6">
                        <label>@lang('videos.categories')</label>
                        <select name="category" id="category" class="form-control">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label>@lang('videos.description')</label>
                        <textarea class="form-control" rows="4" placeholder="@lang('videos.description')" name="description"> {{old('description')}}</textarea>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" id="contact_submit" class="btn btn-dm">@lang('videos.save')</button>
                    </div>
                </div>
            </form>
        </div><!-- // col-md-8 -->

        <div class="col-md-4">
            <a href="#"><img src="{{ asset('img/upload-adv.png') }}" alt=""></a>
        </div><!-- // col-md-8 -->
        <!-- // upload -->
    </div><!-- // row -->
</div>
@endsection
