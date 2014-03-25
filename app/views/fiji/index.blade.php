@extends('fiji.layouts.default')
@section('styles')
		@parent
        {{ Basset::show('index.css') }}
		<style>
			.box{background:url(../assets/images/index.jpg) center 0px no-repeat;}
		</style>
@stop
@section('content')
			<!-- 正文开始  -->
			<div class="content">
                <div class="content_title"><div style="float:left;padding-top:5px;"><span style="font-size:30px;color:#0099ff;">旅行</span><strong style="color:#333333;">攻略</strong></div>
<a href="/travel/index">    <div class="more_raiders"></div></a>
</div>
				<div class="content_body">
				<div class="hotel_1">
					<div class="hotel_part1">
						<div class="hotel_part1_img1 show-block img-block">
							<img src="{{{ URL::asset($hotels[0]->pic1_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
						</div>
						<div class="hotel_part1_img2 show-block img-block">
							<img src="{{{ URL::asset($hotels[0]->pic2_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
						</div>
					</div>
					<div class="hotel_part2 show-block">
						<div class="hotel_part2_img1 img-block">
							<img src="{{{ URL::asset($hotels[0]->pic3_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
						</div>
						<div class="hote1_part2_word">
							<div class="hote1_part2_word_top"></div>
                            <div class="hote1_part2_word_text"><div class="hote_special">玩转斐济岛</div></div>
						</div>
					</div>
					<div class="hotel_part3 show-block">
						<div class="hotel_part3_top"></div>
						<div class="hotel_part3_content">
								<div class="hotel_part3_text">{{{ $hotels[0]->content }}}</div>
						</div>
					</div>
				</div>
				
				<div class="hotel_2">
					<div class="hotel_part2 show-block" >
						<div class="hote1_part2_word">
							<div class="hote1_part2_word_text"><div class="hote_special">吃货走天下</div></div>
							<div class="hote1_part2_word_top"></div>
						</div>
						<div class="hotel_part2_img1 img-block" style="margin:0px;" >
							<img src="{{{ URL::asset($hotels[1]->pic1_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
						</div>
					</div>
					<div class="hotel_part1">
						<div class="hotel_part1_img1 show-block img-block" >
							<img src="{{{ URL::asset($hotels[1]->pic2_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">{{{ $hotels[1]->content }}}</div>
							</div>
                            </a>
						</div>
						<div class="hotel_part1_img2 show-block img-block">
							<img src="{{{ URL::asset($hotels[1]->pic3_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
						</div>
					</div>
					<div class="hotel_part3 show-block img-block">
						<img src="{{{ URL::asset($hotels[1]->pic4_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
					</div>
				</div>
				<div class="content_center">
					<p><span style="font-size:30px;margin-left:30px;color:#ff9500;">机票</span><span style="font-size:18px;color:#333;">信息</span></p>
					<div class="plane">
						<div class="plane_search">
							<table cellspacing=0 cellpadding=0 class="plane_mes">
								<tr>
									<td class="td1">航程类型</td>
									<td align=center><input type="radio" name="plane_type" value="0" />&nbsp;单程<input type="radio" name="plane_type" style="margin-left:25px;" value="0"  />&nbsp;往返</td>
								</tr>
								<tr>
									<td class="td1">出发城市</td>
									<td><input type="text" id="plane_city" class="inputs" /></td>
								</tr>
								<tr>
									<td class="td1">出发日期</td>
									<td><input type="text" id="plane_date_go" class="inputs" onClick="WdatePicker({position:{left:180}})" /></td>
								</tr>
								<tr>
									<td class="td1">返回日期</td>
									<td><input type="text" id="plane_date_return" class="inputs" onClick="WdatePicker({position:{left:180}})" /></td>
								</tr>
								<tr>
									<td class="td1">&nbsp;</td>
									<td class="td2"><div class="search"></div></td>
								</tr>
							</table>
						</div>
						<div class="plane_bg"></div>
					</div>
					<div class="plane_show">
						<table cellspacing=0 cellpadding=0 style="font-size:18px; width:100%;margin:40px  auto;border:0px solid red;">
                            <tbody>
							<tr class="tr2">
								<td class="plane_date_td">2013/12/13</td>
								<td class="plane_city_td">香港 - 斐济</td>
								<td class="plane_price_td">￥3968元</td>
							</tr>
							<tr class="tr2">
								<td class="plane_date_td">2013/12/13</td>
								<td class="plane_city_td">香港 - 斐济</td>
								<td class="plane_price_td">￥3968元</td>
							</tr>
							<tr class="tr2">
								<td class="plane_date_td">2013/12/13</td>
								<td class="plane_city_td">香港 - 斐济</td>
								<td class="plane_price_td">￥3968元</td>
							</tr>
							<tr class="tr2">
								<td class="plane_date_td">2013/12/13</td>
								<td class="plane_city_td">香港 - 斐济</td>
								<td class="plane_price_td">￥3968元</td>
							</tr>
							<tr class="tr2">
								<td class="plane_date_td">2013/12/13</td>
								<td class="plane_city_td">香港 - 斐济</td>
								<td class="plane_price_td">￥3968元</td>
							</tr>
							<tr class="tr2">
								<td class="plane_date_td">2013/12/13</td>
								<td class="plane_city_td">香港 - 斐济</td>
								<td class="plane_price_td">￥3968元</td>
							</tr>
                            </tbody>
						</table>
					</div>
					<div class="weather">
						<div class="weather_top"><span style="font-size:30px;margin-left:20px;">天气</span><span style="font-size:16px;margin-left:30px;">{{ date('Y/m/d') }}</span></div>
                        <img class="weather_img" src="{{ Asset('site/weather/'.$weather['weather_img']) }}" alt="">
                        <img class="weather_icon" style="width:60px;height:80px;" src="{{ Asset('site/weather/images/'.$weather['weather_icon']) }}" alt="">
                        <span class="weather_temp">{{{$weather['temp']}}}<em>℃</em></span>
					</div>
				</div>
				<div class="content_bottom"></div>
				<div style="height:885px;width:100%;margin-top:45px;">
					<p><span style="font-size:30px;margin-left:30px;color:#ff9500;">人气</span><span style="font-size:18px;color:#333;">之星</span></p>
					<ul class="user-star-block" >
@foreach($users as $user)
						<li class="user_mes">
							<ul>
                                <a href=" {{{ URL::to('user/show/'.$user->id) }}} ">
								<li class="user_img"><img src="{{{$user->avatar}}}" width=320 height=250 /></li>
                                </a>
								<li class="user_name">
                                <a href=" {{{ URL::to('user/show/'.$user->id) }}} ">
                        <div class="user_name_box">{{{$user->username}}}</div>
                                </a>
                        <div class="user_word">{{{$user->intro}}}</div>
                                <a href=" {{{ URL::to('user/show/'.$user->id.'#usercomment') }}} ">
                                <div class="user_talk"></div>
                                </a>
                                </li>
							</ul>
						</li>
@endforeach
					</ul>
				</div>
			</div>
				
			</div>
			<!-- 正文结束  -->
@stop
@section('scripts')
        <script src="{{ Asset('assets/js/My97DatePicker/WdatePicker.js') }}"></script>
			<script>
        $(document).ready(function(){
                
                $(".user_mes:nth-child(3n)").css('margin-right','0');

                $('.img-block').mouseover(function(){
                        $(this).find('.img-overlay-content').width($(this).width()).height($(this).height()).css('display','block');
                        }).mouseleave(function(){
                        $(this).find('.img-overlay-content').css('display','none');
                        });
            });
            
			</script>
			@stop
		
