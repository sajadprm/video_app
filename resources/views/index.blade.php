@extends('layout');
@section('content')
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
            <div class="row">


                @foreach($latestVideos as $video)
                 <x-box-video :video="$video"  />
                @endforeach


            </div>
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
            <div class="row">

                @foreach($mostViewedVideos as $video)
                   <x-box-video :video="$video" />
                @endforeach


            </div>

            <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
            <div class="row">

                @foreach($popularVideos as $video)
                    <x-box-video :video="$video"  />
                @endforeach
            </div>



@endsection
