@extends('fiji.layouts.default')

@section('styles')
        {{ Basset::show('travel.css') }}
		<style>
			.box{background:url(../assets/images/travel.jpg) center 0px no-repeat;}
		</style>
@stop


@section('content')

<div class="content">
				<div class="content_body">
					<div class="content_user_show">
							<ul class="content_user_ul">
                                <a href="{{URL::to('travel/index')}}">
								<li class="content_user_card @if(Request::url()== URL::to('travel/index')) active @endif">
                                玩转斐济岛
                                </li>
                            </a>
                                <a href="{{URL::to('travel/content')}}">
								<li class="content_user_card @if(Request::url()==URL::to('travel/content')) active @endif" style="margin-left:10px;">
                                吃货走天下
                                </li>
                                </a>
							</ul>
							<div class="content_user_card_bottom"></div>
					</div>
					<div class="raiders_msg">
						<ul class="raiders_content">
@foreach($travels as $travel)
							<li class="raiders_li1">
                            <a href=" {{{ $travel->url() }}} "><img width="300" height="200" src="{{{ $travel->has_pic }}}" alt=""></a>
                            </li>
							<li class="raiders_li2">
								<div style="width:580px;margin:20px;">
                                    <a href=" {{{ $travel->url() }}} ">    <p class="raiders_title">{{{ $travel->title }}}</p></a>
                                    <p>
                                    <a href="{{ $travel->author->url() }}">
                                    <span class="raiders_user_name">{{{ $travel->author->username }}}</span>
                                </a>
                                    <span class="raiders_user_time">发布于{{{ $travel->date() }}}</span></p>
                                    <a href=" {{{ $travel->url() }}} "><p class="raiders_user_text">{{{ $travel->summary() }}}……</p></a>
								</div>
<div id="travel_mark_{{{ $travel->id }}}" style="float:right">
				<a href="javascript:;" onclick="unlike({{{$travel->id}}})" class="unlike_post" style="display:none;" >取消赞</a>
                <a href="javascript:;" onclick="like({{{$travel->id}}})" class="like_post" >
                    <img src=" {{asset('images/good.png')}} " alt="">
                </a> 
					<span id="if_like_{{{$travel->id}}}"></span> <span id="likecontent_{{{$travel->id}}}"><span  id="count_{{{$travel->id}}}" class="color">{{{$travel->mark}}}</span> <span id="people_{{{$travel->id}}}" class="color">人</span>喜欢</span>
</div>
							</li>
@endforeach
							
						</ul>
                        <div style="clear:both;"></div>
					</div>
                    <div class="page" style="float:right;padding-top:10px;">
{{ $travels->links() }}
                    </div>
					<!--<div style="width:100%;height:40px;margin-top:30px;">-->
						<!--<ul class="show_page_1">-->
							<!--<li  class="show_li_1">1</li>-->
							<!--<li  class="show_li_2">2</li>-->
							<!--<li class="show_page_next">下一页</li>-->
						<!--</ul>-->
					<!--</div>-->
				</div>
				<div class="content_bottom"></div>
			</div>


@stop
@section('scripts')

<script>

function like(travel_id){
        @if (is_null($user))
        window.location.href='/user/login';
        @else
        var user_id = {{{$user->id}}};
        $.ajax({
            url: '/travel/addmark',
            type: 'GET',
            data: 'user_id='+user_id+'&travel_id='+travel_id,
            success: function(data) {
            console.log(data);
            }
        });
        

        var count = parseFloat($('#count_'+travel_id).html()) + 1;
        if(count > 1) {
            $('#if_like_'+travel_id).html('除了你，还有');
            $('#people_'+travel_id).html('人也喜欢');
            $('#count_'+travel_id).html(count);
        } else {
            $('#if_like_'+travel_id).html('你点了赞');
            $('#likecontent_'+travel_id).hide();
		}

		$('#like_post_'+travel_id).hide();
		$('#unlike_post_'+travel_id).show();
        @endif
}

function unlike(travel_id){
        @if (is_null($user))
        window.location.href='/user/login';
        @else
        var user_id = {{{$user->id}}};
        $.ajax({
            url: '/travel/submark',
            type: 'GET',
            data: 'user_id='+user_id+'&travel_id='+travel_id,
            success: function(data) {
            console.log(data);
            }
        });
        var count = parseFloat($('#count_'+travel_id).html()) - 1;
        if(count < 1) {
            $('#likecontent_'+travel_id).show();	
        }
        $('#unlike_post_'+travel_id).hide();
        $('#like_post_'+travel_id).show();
        $('#if_like_'+travel_id).html('');
        $('#people_'+travel_id).html('人');
        @endif
}



</script>
@stop
