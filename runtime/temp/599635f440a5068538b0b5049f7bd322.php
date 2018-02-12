<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"C:\phpStudy\WWW\lunhui_tp5\public/../application/wx_index\view\index\index.html";i:1517364955;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>计算机应用技术系</title>
 <link rel="stylesheet" href="/static/wx_index/css/jquery-weui.min.css" />
 <link rel="stylesheet" href="/static/wx_index/css/swiper.min.css" />
 <link rel="stylesheet" href="/static/wx_index/css/weui.min.css" />
 	<style>
			*{
				margin: 0;
				padding: 0;
				border: none;
			}
			ul,li{	margin: 0;
				padding: 0;
				border: none;
				list-style: none;}
			html,body{
				width: 100%;
				height: auto;
				font-family: "microsoft yahei,微软雅黑 ";
				background-color: #f3f4f6;
			}
			.containar{
				width: 100%;
				height: auto;
				background-color: #f3f4f6;
			}
			 .weui-grids:before{
right: 0;
 height: 0px; 
 border-top: 0px solid #d9d9d9; 
transform-origin: 0 0;
-webkit-transform: scaleY(.5);
transform: scaleY(.5);
}
.weui-grid:before {
top: 0;
 width: 0px; 
 border-right: 1px solid #f3f4f6;
-webkit-transform-origin: 100% 0;
transform-origin: 100% 0;
-webkit-transform: scaleX(.5);
transform: scaleX(.5);
}
.weui-grid {
width: 25%;
}
.weui-grids{
	padding: 10px 0px;
	margin-top: -5px;
}
.weui-grid:after {
left: 0;
height: 0px;
border-bottom: 0px solid #d9d9d9;
}
.weui-grids:after {
width: 1px;
bottom: 0;
border-bottom: 1px solid #d9d9d9;
transform-origin: 0 0;
-webkit-transform: scaleX(.5);
transform: scaleX(.5);
background: #D9D9D9;
}
.weui-media-box:before {
content: " ";
position: absolute;
left: 0;
top: 0;
right: 0;
height: 1px;
border-top: 1px solid #f3f4f6;
color: #f3f4f6;
-webkit-transform-origin: 0 0;
transform-origin: 0 0;
-webkit-transform: scaleY(.5);
transform: scaleY(.5);
left: 15px;
}
.weui-media-box:after{
	
content: " ";
position: absolute;
left: 0;
bottom: 0;
right: 0;
height: 1px;
border-bottom: 1px solid #f3f4f6;
color: #f3f4f6;
-webkit-transform-origin: 0 100%;
transform-origin: 0 100%;
-webkit-transform: scaleY(.5);
transform: scaleY(.5);
left: 15px;

}
.weui-panel__ft .weui-cell_link:after{
content: " ";
position: absolute;
left: 0;
bottom: 0;
right: 0;
height: 1px;
border-bottom: 1px solid #f3f4f6;
color: #f3f4f6;
-webkit-transform-origin: 0 100%;
transform-origin: 0 100%;
-webkit-transform: scaleY(.5);
transform: scaleY(.5);
left: 15px;
}
.weui-grid__label{
	color: #41444a;
/*	font-weight: bold;*/
}
.h-tittle{
color:#999;	
}
.footer{
	position: fixed!important;
	/*height: 58px;*/
	bottom: 0px;
}
 </style>
</head>
<body>
<div class="containar">
<!--幻灯片-->
<div class="swiper-container" >
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="/static/wx_index/img/slide-1.png" width="100%"></div>
    <div class="swiper-slide"><img src="/static/wx_index/img/slide-2.png" width="100%"></div>
    <div class="swiper-slide"><img src="/static/wx_index/img/slide-3.png" width="100%"></div>
  </div>
   <!-- 添加圆点导航 -->
     <div class="swiper-pagination"></div>

</div>
<!--幻灯片-->
<!--中间分类-->
<div class="weui-grids" style=" background: #FFFFFF;">
 
  <a href="teacher.html" class="weui-grid js_grid">
    <div class="weui-grid__icon">
      <img src="/static/wx_index/img/icon_nav_sz.png" alt="">
    </div>
    <p class="weui-grid__label">
      教师团队
    </p>
  </a>
  <a href="course.html" class="weui-grid js_grid">
    <div class="weui-grid__icon">
      <img src="/static/wx_index/img/icon_nav_kc.png" alt="">
    </div>
    <p class="weui-grid__label">
     课程安排
    </p>
  </a>
  <a href="food.html" class="weui-grid js_grid">
    <div class="weui-grid__icon">
      <img src="/static/wx_index/img/icon_nav_sp.png" alt="">
    </div>
    <p class="weui-grid__label">
     一周食谱
    </p>
  </a>
  <a href="about_us.html" class="weui-grid js_grid">
    <div class="weui-grid__icon">
      <img src="/static/wx_index/img/icon_nav_hd.png" alt="">
    </div>
    <p class="weui-grid__label">
   校园简介
    </p>
  </a>
</div>
<div class="weui-grids" style=" background: #FFFFFF;">
  <a href="teacher.html" class="weui-grid js_grid">
    <div class="weui-grid__icon">
      <img src="/static/wx_index/img/icon_nav_sz.png" alt="">
    </div>
    <p class="weui-grid__label">
      教师团队
    </p>
  </a>
  <a href="course.html" class="weui-grid js_grid">
    <div class="weui-grid__icon">
      <img src="/static/wx_index/img/icon_nav_kc.png" alt="">
    </div>
    <p class="weui-grid__label">
     课程安排
    </p>
  </a>
  <a href="food.html" class="weui-grid js_grid">
    <div class="weui-grid__icon">
      <img src="/static/wx_index/img/icon_nav_sp.png" alt="">
    </div>
    <p class="weui-grid__label">
     一周食谱
    </p>
  </a>
  <a href="about_us.html" class="weui-grid js_grid">
    <div class="weui-grid__icon">
      <img src="/static/wx_index/img/icon_nav_hd.png" alt="">
    </div>
    <p class="weui-grid__label">
   校园简介
    </p>
  </a>
</div>	

<!--中间分类-->
<!--公告-->
<div class="weui-panel weui-panel_access ">
	<div class="weui-panel__ft">
    <a href="javascript:void(0);" class="weui-cell weui-cell_access weui-cell_link">
      <div class="weui-cell__bd h-tittle">公告</div>
      <span class="weui-cell__ft"></span>
    </a>    
  </div>

            <div class="weui-panel__bd">
            
                <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                    
                    <div class="weui-media__bd">
                        <h4 class="weui-media__title">端午节放假通知 </h4>
                        <p class="weui-media__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                    </div>
                </a>   
            </div>
        </div>

<!--公告-->
<!--公告-->
<div class="weui-panel weui-panel_access " style=" padding-bottom: 60px;">
		<div class="weui-panel__ft">
    <a href="javascript:void(0);" class="weui-cell weui-cell_access weui-cell_link">
      <div class="weui-cell__bd h-tittle">最新消息</div>
      <span class="weui-cell__ft"></span>
    </a>    
  </div>
            <div class="weui-panel__bd">
            	<ul>
            		<li >
                <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                    <div class="weui-media__hd">
                        <img class="weui-media__thumb" src="/static/wx_index/img/ch1.jpg" alt="">
                    </div>
                    <div class="weui-media__bd">
                        <h4 class="weui-media__title">端午节放假通知</h4>
                        <p class="weui-media__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                    </div>
                </a>
 
                </li>
                <li>
                <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                    <div class="weui-media__hd">
                        <img class="weui-media__thumb" src="/static/wx_index/img/ch8.jpg" alt="">
                    </div>
                    <div class="weui-media__bd">
                        <h4 class="weui-media__title">端午节放假通知</h4>
                        <p class="weui-media__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                    </div>
                </a>
                </li>
                 <li>
                <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                    <div class="weui-media__hd">
                        <img class="weui-media__thumb" src="/static/wx_index/img/ch8.jpg" alt="">
                    </div>
                    <div class="weui-media__bd">
                        <h4 class="weui-media__title">端午节放假通知</h4>
                        <p class="weui-media__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                    </div>
                </a>
                </li>
            	</ul>
            </div>
           
        </div>

<!--公告-->

<!--底部导航-->
<div class="weui-tabbar footer">
    <a href="index.html" class="weui-tabbar__item weui-bar__item--on">
      <span class="weui-badge" style="position: absolute;top: -.4em;right: 1em;">8</span>
      <div class="weui-tabbar__icon">
        <img src="/static/wx_index/img/icon_bg_home.png" alt="">
      </div>
      <p class="weui-tabbar__label">首页</p>
    </a>
    
    <a href="applicant.html" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
        <img src="/static/wx_index/img/icon_bg_bm.png" alt="">
      </div>
      <p class="weui-tabbar__label">报名</p>
    </a>
    <a href="activities.html" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
        <img src="/static/wx_index/img/icon_bg_hd.png" alt="">
      </div>
      <p class="weui-tabbar__label">活动</p>
    </a>
  </div>
<!--底部导航-->
</div>


<script type="text/javascript" src="/static/wx_index/js/jquery-2.1.4.js" ></script>
<script type="text/javascript" src="/static/wx_index/js/jquery-weui.min.js" ></script>
<script type="text/javascript" src="/static/wx_index/js/swiper.js" ></script>

	<script>
        var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay: 2500
    });
    </script>
</body>
</html>