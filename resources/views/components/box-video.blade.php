<div class="col-lg-2 col-md-4 col-sm-6">
    <div class="video-item">
        <div class="thumb">
            <div class="hover-efect"></div>
            <small class="time">{{$video->LengthForHuman}}</small>
            <a href="{{route('video.show',$video->slug)}}"><img src="{{$video->thumbnail}}" alt=""></a>
        </div>
        <div class="video-info">
            <a href="{{route('video.show',$video->slug)}}" class="title">{{$video->name}} </a>
            <a href="{{route('video.edit',$video->slug)}}" style="font-size: 12px; background-color: #e2e2e2; padding: 5px;border-radius: 5px">
               ویرایش

            </a>
            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
            <span class="date"><i class="fa fa-clock-o"></i> {{$video->created_at}}</span>
        </div>
    </div>
</div>
