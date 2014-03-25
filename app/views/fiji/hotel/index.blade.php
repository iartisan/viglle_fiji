@extends('fiji.layouts.default')

@section('styles')
		@parent
		
        {{ Basset::show('hotel.css') }}
		
		<style>
			.box{background:url(../assets/images/hotel.jpg) left 0px no-repeat;}
		</style>


@stop
@section('content')
			<div class="content">
				<p class="content_title"><span style="font-size:30px;color:#0099ff;">特色</span><strong style="color:#333333;">酒店</strong></p>
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
							<div class="price_tag">
									<div class="hotel_price_show"><span style="font-size:30px;">RMB</span><span class="hotel_price">{{{ $hotels[0]->price }}}</span></div>
							</div>
						</div>
						<div class="hote1_part2_word">
							<div class="hote1_part2_word_top"></div>
							<div class="hote1_part2_word_text"><div class="hote_special">特色酒店A</div></div>
						</div>
					</div>
					<div class="hotel_part3">
						<div class="hotel_part3_top"></div>
						<div class="hotel_part3_content">
							<div class="hotel_part3_text">{{{ $hotels[0]->content }}}</div>
						</div>
					</div>
				</div>
				
				<div class="hotel_2">
					<div class="hotel_part2">
						<div class="hote1_part2_word show-block">
							<div class="hote1_part2_word_text"><div class="hote_special">特色酒店B</div></div>
							<div class="hote1_part2_word_top"></div>
						</div>
						<div class="hotel_part2_img1 img-block" style="margin:0px;">
							<img src="{{{ URL::asset($hotels[1]->pic1_url) }}}/origin.jpg" />
                            <div class="price_tag">
									<div class="hotel_price_show"><span style="font-size:30px;">RMB</span><span class="hotel_price">{{{ $hotels[1]->price }}}</span></div>
                            </div>
						</div>
					</div>
					<div class="hotel_part1">
						<div class="hotel_part1_img1 img-block show-block">
							<img src="{{{ URL::asset($hotels[1]->pic2_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">{{{ $hotels[1]->content }}}</div>
							</div>
                            </a>
						</div>
						<div class="hotel_part1_img2 img-block show-block">
							<img src="{{{ URL::asset($hotels[1]->pic3_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
						</div>
					</div>
					<div class="hotel_part3 img-block show-block">
						<img src="{{{ URL::asset($hotels[1]->pic4_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
					</div>
				</div>
				
				<div class="hotel_3">
					<div class="hotel_part3 show-block"  style="margin:0px;">
						<div class="hotel_part3_top"></div>
						<div class="hotel_part3_content">
								<div class="hotel_part3_text">{{{ $hotels[2]->content }}}</div>
						</div>
					</div>
					<div class="hotel_part1" style="margin-left:10px;">
						<div class="hotel_part1_img1 show-block img-block">
							<img src="{{{ URL::asset($hotels[2]->pic2_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
						</div>
						<div class="hotel_part1_img2 show-block img-block">
							<img src="{{{ URL::asset($hotels[2]->pic3_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
						</div>
					</div>
					<div class="hotel_part2 show-block">
						<div class="hotel_part2_img1 img-block">
							<img src="{{{ URL::asset($hotels[2]->pic4_url) }}}/origin.jpg" />
                            <div class="price_tag">
									<div class="hotel_price_show"><span style="font-size:30px;">RMB</span><span class="hotel_price">{{{ $hotels[2]->price }}}</span></div>
                            </div>
						</div>
						<div class="hote1_part2_word" >
							<div class="hote1_part2_word_top"></div>
							<div class="hote1_part2_word_text"><div class="hote_special">特色酒店C</div></div>
						</div>
					</div>
				</div>
				
				<div class="hotel_4">
					<div class="hotel_part2 show-block">
						<div class="hote1_part2_word">
							<div class="hote1_part2_word_text"><div class="hote_special">特色酒店D</div></div>
							<div class="hote1_part2_word_top"></div>
						</div>
						<div class="hotel_part2_img1 img-block" style="margin:0px;">
							<img src="{{{ URL::asset($hotels[3]->pic1_url) }}}/origin.jpg" />
                            <div class="price_tag">
									<div class="hotel_price_show"><span style="font-size:30px;">RMB</span><span class="hotel_price">{{{ $hotels[3]->price }}}</span></div>
                            </div>
						</div>
					</div>
					<div class="hotel_part1">
						<div class="hotel_part1_img1 img-block">
							<img src="{{{ URL::asset($hotels[3]->pic2_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
						</div>
						<div class="hotel_part1_img2 img-block">
							<img src="{{{ URL::asset($hotels[3]->pic3_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">xxx</div>
							</div>
                            </a>
						</div>
					</div>
					<div class="hotel_part3 show-block" style="overflow:hidden;">
						<div class="hotel_part3_top"></div>
							<div class="hotel_part3_content img-block">
							<img  src="{{{ URL::asset($hotels[0]->pic4_url) }}}/origin.jpg"  />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">{{{ $hotels[3]->content }}}</div>
							</div>
                            </a>
						</div>
					</div>
				</div>
				<div class="hotel_5">
					<div class="hotel_part3 show-block" style="overflow:hidden;margin-left:0px;background:url('{{{ URL::asset($hotels[4]->pic1_url) }}}/origin.jpg') no-repeat;">
						<div class="hotel_part3_top"></div>
							<div class="hotel_part3_content img-block">
							<img src="{{{ URL::asset($hotels[0]->pic4_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">{{{ $hotels[4]->content }}}</div>
							</div>
                            </a>
						</div>
					</div>
					<div class="hotel_part1" style="margin-left:10px;">
						<div class="hotel_part1_img1 show-block img-block">
							<img src="{{{ URL::asset($hotels[4]->pic2_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">XXX</div>
							</div>
                            </a>
						</div>
						<div class="hotel_part1_img2 show-block img-block">
							<img src="{{{ URL::asset($hotels[4]->pic3_url) }}}/origin.jpg" />
                            <a href="{{Asset('blank')}}">
							<div class="img-overlay-content" >
								<div class="overlay-content">XXX</div>
							</div>
                            </a>
						</div>
					</div>
					<div class="hotel_part2 show-block">
						<div class="hotel_part2_img1 img-block">
							<img src="{{{ URL::asset($hotels[4]->pic4_url) }}}/origin.jpg"  />
							<div class="price_tag">
									<div class="hotel_price_show"><span style="font-size:30px;">RMB</span><span class="hotel_price">{{{ $hotels[0]->price }}}</span></div>
							</div>
						</div>
						<div class="hote1_part2_word">
							<div class="hote1_part2_word_top"></div>
							<div class="hote1_part2_word_text"><div class="hote_special">特色酒店E</div></div>
						</div>
					</div>
				</div>
			</div>
@stop
@section('scripts')
			<script>
				//function show_bg(num)
				//{
					//$(".hotel_base").eq(num).slideDown("fast");
				//}
				//function close_bg(num)
				//{
					//$(".hotel_base").eq(num).slideUp("fast");
				//}
$(document).ready(function(){
                

                $('.img-block').mouseover(function(){
                        $(this).find('.img-overlay-content').width($(this).width()).height($(this).height()).css('display','block');
                        $(this).find('.price_tag').css('display','block');
                        }).mouseleave(function(){
                        $(this).find('.img-overlay-content').css('display','none');
                        $(this).find('.price_tag').css('display','none');
                        });
        });
			</script>
@stop
