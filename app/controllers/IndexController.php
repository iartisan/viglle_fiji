<?php
class IndexController extends BaseController {
		protected $hotel;
		protected $user;
        protected $travel;
		public function __construct( Travel $travel, User $user, Hotel $hotel)
		{
				parent::__construct();
                $this->hotel = $hotel;
                $this->user  = $user;
                $this->travel= $travel;
		}


		public function getIndex(){

                $travels = $this->travel->orderBy('created_at','ASC')->take(2)->get();
                $hotels = $this->hotel->orderBy('created_at','ASC')->take(2)->get();
                $users = $this->user->orderBy('created_at','DESC')->take(6)->get();
                $weather = [];
							$url = 'http://xml.weather.yahoo.com/forecastrss?w=2345335&u=c';
							$yweather = "http://xml.weather.yahoo.com/ns/rss/1.0";	//命名空间
							$res = new DOMDocument();
                            $res->load($url);
                            if($res){
							$node = $res->getElementsByTagNameNS($yweather, 'atmosphere');
							$humi = $node->item(0)->attributes->item(0)->nodeValue;		//获取湿度
							$node = $res->getElementsByTagNameNS($yweather, 'condition');
							$code = $node->item(0)->attributes->item(1)->nodeValue;
							$temp = $node->item(0)->attributes->item(2)->nodeValue;	
                            $weather['temp'] = $temp;
                            $weather['code'] = $code;
                            $weather['weather_img'] = $this->weather_imgbg($code);
                            $weather['weather_icon'] = $this->weather_icon($code);
                            }else{
                                $weather = "fuck";
                            }
                return View::make('fiji/index',compact('travels','hotels','users','weather'));

		}

        private function weather_icon($code){
								switch($code){
                                    //小雨
									case 9:
										//return '细雨';
                                        return 'weather_icon_18.png';
                                    //中雨
									case 47:
										//return '局部雷阵雨';
                                        return 'weather_icon_16.png';
                                    //大雨
									case 3:
										//return '大雷雨';
                                        return 'weather_icon_14.png';
                                    //雷阵雨
									case 45:
										//return '雷阵雨';
									case 40:
										//return '偶有阵雨';
									case 12:
										//return '阵雨';
									case 11:
										//return '阵雨';
									case 4:
										//return '雷阵雨';
                                        return 'weather_icon_02.png';
                                    //打雷
									case 37:
										//return '局部雷雨';
									case 38:
										//return '偶有雷雨';
									case 39:
										//return '偶有雷雨';
                                        return 'weather_icon_04.png';
                                    //冰雪
									case 18:
										//return '雨淞';
									case 14:
										//return '小阵雪';
									case 13:
										//return '阵雪';
									case 10:
										//return '冻雨';
									case 8:
										//return '冻雾雨';
									case 5:
										//return '雨夹雪';
									case 35:
										//return '雨夹冰雹';
									case 6:
										//return '雨夹雹';
									case 17:
										//return '冰雹';
                                        return 'weather_icon_06.png';
                                    //小雪
									case 46:
										//return '阵雪';
                                        return 'weather_icon_08.png';
                                    //中雪
									case 16:
										//return '雪';
                                        return 'weather_icon_10.png';
                                    //大雪
									case 7:
										//return '雪夹雹';
									case 15:
									case 41:
										//return '大雪';
									case 42:
										//return '零星阵雪';
									case 43:
										//return '大雪';
										//return '高吹雪';
                                        return 'weather_icon_12.png';




                                    //阴天
										//return '薄雾';
									case 23:
										//return '大风';
									case 24:
										//return '风';
									case 25:
										//return '冷';
									case 26:
										//return '阴';
                                        return 'weather_icon_20.png';
                                    //多云
									case 22:
										//return '烟雾';
									case 0:
										//return '龙卷风';
									case 2:
										//return '暴风';
									case 19:
										//return '粉尘';
									case 20:
										//return '雾';
									case 21:
									case 27:
										//return '多云';
									case 28:
										//return '多云';
									case 29:
										//return '局部多云';
									case 30:
										//return '局部多云';
									case 44:
										//return '局部多云';
                                        return 'weather_icon_22.png';
                                    //晴
									case 1:
										//return '热带风暴';
									case 31:
										//return '晴';
									case 32:
										//return '晴';
									case 33:
										//return '转晴';
									case 34:
										//return '转晴';
									case 36:
										//return '热';
									default:
										//return '水深火热';
                                        return 'code_24.jpg';
								}

        }
							private function weather_imgbg($code){
								switch($code){
                                    //小雨
									case 9:
										//return '细雨';
                                        return 'code_09.jpg';
                                    //中雨
									case 47:
										//return '局部雷阵雨';
                                        return 'code_11.jpg';
                                    //大雨
									case 3:
										//return '大雷雨';
                                        return 'code_13.jpg';
                                    //雷阵雨
									case 45:
										//return '雷阵雨';
									case 40:
										//return '偶有阵雨';
									case 12:
										//return '阵雨';
									case 11:
										//return '阵雨';
									case 4:
										//return '雷阵雨';
                                        return 'code_21.jpg';
                                    //打雷
									case 37:
										//return '局部雷雨';
									case 38:
										//return '偶有雷雨';
									case 39:
										//return '偶有雷雨';
                                        return 'code_23.jpg';
                                    //冰雪
									case 18:
										//return '雨淞';
									case 14:
										//return '小阵雪';
									case 13:
										//return '阵雪';
									case 10:
										//return '冻雨';
									case 8:
										//return '冻雾雨';
									case 5:
										//return '雨夹雪';
									case 35:
										//return '雨夹冰雹';
									case 6:
										//return '雨夹雹';
									case 17:
										//return '冰雹';
                                        return 'code_26.jpg';
                                    //小雪
									case 46:
										//return '阵雪';
                                        return 'code_24.jpg';
                                    //中雪
									case 16:
										//return '雪';
                                        return 'code_25.jpg';
                                    //大雪
									case 7:
										//return '雪夹雹';
									case 15:
									case 41:
										//return '大雪';
									case 42:
										//return '零星阵雪';
									case 43:
										//return '大雪';
										//return '高吹雪';
                                        return 'code_27.jpg';




                                    //阴天
										//return '薄雾';
									case 23:
										//return '大风';
									case 24:
										//return '风';
									case 25:
										//return '冷';
									case 26:
										//return '阴';
                                        return 'code_05.jpg';
                                    //多云
									case 22:
										//return '烟雾';
									case 0:
										//return '龙卷风';
									case 2:
										//return '暴风';
									case 19:
										//return '粉尘';
									case 20:
										//return '雾';
									case 21:
									case 27:
										//return '多云';
									case 28:
										//return '多云';
									case 29:
										//return '局部多云';
									case 30:
										//return '局部多云';
									case 44:
										//return '局部多云';
                                        return 'code_07.jpg';
                                    //晴
									case 1:
										//return '热带风暴';
									case 31:
										//return '晴';
									case 32:
										//return '晴';
									case 33:
										//return '转晴';
									case 34:
										//return '转晴';
									case 36:
										//return '热';
									default:
										//return '水深火热';
                                        return 'code_03.jpg';
								}
							}

}
?>
