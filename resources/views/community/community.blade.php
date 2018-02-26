<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta name="renderer" content="webkit" />
<title>社区讨论</title>
<meta name="keywords" content="顾客交流区" />
<meta name="description" content=""  />


<link rel="stylesheet" type="text/css" href="http://wenda.bootcss.com/static/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="http://wenda.bootcss.com/static/css/icon.css" />

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css" />

<link href="http://wenda.bootcss.com/static/css/default/common.css?v=20140912" rel="stylesheet" type="text/css" />
<link href="http://wenda.bootcss.com/static/css/default/link.css?v=20140912" rel="stylesheet" type="text/css" />
<link href="http://wenda.bootcss.com/static/js/plug_module/style.css?v=20140912" rel="stylesheet" type="text/css" />

<style type="text/css">


</style>


<script type="text/javascript">
  var _84E4A1A76C03FAF214EA835450722BF4='';
  var G_POST_HASH=_84E4A1A76C03FAF214EA835450722BF4;
  var G_INDEX_SCRIPT = '';
  var G_SITE_NAME = 'Bootstrap中文网';
  var G_BASE_URL = 'http://wenda.bootcss.com';
  var G_STATIC_URL = 'http://wenda.bootcss.com/static';
  var G_UPLOAD_URL = 'http://wenda.bootcss.com/uploads';
  var G_USER_ID = '';
  var G_USER_NAME = '';
  var G_UPLOAD_ENABLE = 'N';
  var G_UNREAD_NOTIFICATION = 0;
  var G_NOTIFICATION_INTERVAL = 100000;
  var G_CAN_CREATE_TOPIC = '';
  
  </script>
<script src="http://wenda.bootcss.com/static/js/jquery.2.js?v=20140912" type="text/javascript"></script>
<script src="http://wenda.bootcss.com/static/js/jquery.form.js?v=20140912" type="text/javascript"></script>
<script src="http://wenda.bootcss.com/static/js/plug_module/plug-in_module.js?v=20140912" type="text/javascript"></script>
<script src="http://wenda.bootcss.com/static/js/aws.js?v=20140912" type="text/javascript"></script>
<script src="http://wenda.bootcss.com/static/js/aw_template.js?v=20140912" type="text/javascript"></script>
<script src="http://wenda.bootcss.com/static/js/app.js?v=20140912" type="text/javascript"></script>
<script type="text/javascript" src="http://wenda.bootcss.com/static/js/compatibility.js"></script>
<!--[if lte IE 8]>
  <script type="text/javascript" src="http://wenda.bootcss.com/static/js/respond.js"></script>
<![endif]-->
</head>
<noscript unselectable="on" id="noscript">
    <div class="aw-404 aw-404-wrap container">
        <img src="http://wenda.bootcss.com/static/common/no-js.jpg">
        <p>你的浏览器禁用了JavaScript, 请开启后刷新浏览器获得更好的体验!</p>
    </div>
</noscript>


<body>
  
  <div class="aw-top-menu-wrap">
    <div class="container">
      <!-- logo -->
     
     

       
     
      <!-- end logo -->
      <!-- 搜索框 -->
      <div class="aw-search-box  hidden-xs hidden-sm">
        <form class="navbar-search" action="" id="global_search_form" method="post">
          <input class="form-control search-query" type="text" placeholder="搜索问题、话题或人" autocomplete="off" name="q" id="aw-search-query" />
          <span title="搜索" id="global_search_btns" onClick="$('#global_search_form').submit();"><i class="glyphicon glyphicon-search"></i></span>

          <div class="aw-dropdown">
            <div class="mod-body">
              <p class="title">输入关键字进行搜索</p>
              <ul class="aw-dropdown-list hide"></ul>
              <p class="search"><span>搜索:</span><a onClick="$('#global_search_form').submit();"></a></p>
            </div>
            <div class="mod-footer">
              <a href="" onClick="$('#header_publish').click();" class="pull-right btn btn-mini btn-success publish">发起问题</a>
            </div>
          </div>
        </form>
      </div>
      <!-- end 搜索框 -->


      <!-- 导航 -->
      <div class="aw-top-nav navbar">
        <div class="navbar-header">
            <button  class="navbar-toggle pull-left">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
        <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="" class="active"><i class="glyphicon glyphicon-th-list"></i> 发现</a></li>

          <!-- <li><a href="http://wenda.bootcss.com/question/" class="">问题</a></li>

          <li><a href="http://wenda.bootcss.com/article/" class="">文章</a></li> -->

          <li><a href="http://wenda.bootcss.com/topic/" ><i class="glyphicon glyphicon-comment"></i> 话题</a></li>

                      </ul>
          </nav>
      </div>
      <!-- end 导航 -->
      <!-- 用户栏 -->
      <div class="aw-user-nav">
        <!-- 登陆&注册栏 -->
         <span>
            @if(Auth::check())
          <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                  <i class="glyphicon glyphicon-user"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/personal">
                                          <i class="glyphicon glyphicon-user"></i>
                                            个人信息
                                        </a>
                                      </li>

                                      <li>
                                        <a href="">
                                          <i class="glyphicon glyphicon-th"></i>
                                            我的定制
                                        </a>
                                        </li>
                                        
                                        <li>
                                        <a href="">
                                          <i class="glyphicon glyphicon-cog"></i>
                                            设置
                                        </a>
                                        </li>
                                        <li role="presentation" class="divider"></li>
                                         
                                        <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="glyphicon glyphicon-log-out"></i>
                                            退出登陆
                                        </a>
                                        </li>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                   
                                </ul>
                              </li> 
                              </ul>                 

          @else
           <ul class="nav navbar-nav navbar-right">

              <li>
                <a href="{{ route('login') }}">
                  <i class="glyphicon glyphicon-log-in"></i>
                  登陆
                </a>
              </li>

              <li>
                <a href="{{ route('register') }}">
                  <i class="glyphicon glyphicon-pencil"></i>
                  注册
                </a>
              </li>
          </ul>

          @endif
         </span>
                <!-- end 登陆&注册栏 -->
      </div>
      <!-- end 用户栏 -->
      <!-- 发起 -->
            <!-- end 发起 -->
   </div>
   
  </div>

      


<div class="aw-container-wrap">
  
  <div class="container">
    <div class="row">
      <div class="aw-content-wrap clearfix">
        <div class="col-sm-12 col-md-9 aw-main-content">
          <!-- 新消息通知 -->
          <div class="aw-mod aw-notification-box hide" id="index_notification">
            <div class="mod-head common-head">
              <h2>
                <span class="pull-right"><a href="http://wenda.bootcss.com/setting/privacy/#notifications" class="text-color-999"><i class="icon icon-setting"></i> 通知设置</a></span>
                <i class="icon icon-bell"></i>新通知<em class="badge badge-important" name="notification_unread_num"></em>
              </h2>
            </div>
            <div class="mod-body">
              <ul id="notification_list"></ul>
            </div>
            <div class="mod-footer clearfix">
              <a href="javascript:;" onclick="AWS.Message.read_notification(false, 0, false);" class="pull-left btn btn-mini btn-gray">我知道了</a>
              <a href="http://wenda.bootcss.com/notifications/" class="pull-right btn btn-mini btn-success">查看所有</a>
            </div>
          </div>
          <!-- end 新消息通知 -->
          <!-- tab切换 -->
          <ul class="nav nav-tabs aw-nav-tabs active hidden-xs">
            <li><a href="">等待回复</a></li>
            <li><a href="" id="sort_control_hot">热门</a></li>
            <li><a href="">推荐</a></li>
            <li class="active"><a href="">最新</a></li>

            <h2 class="hidden-xs"><i class="glyphicon glyphicon-eye-open"></i> 发现</h2>
          </ul>
          <!-- end tab切换 -->



          
<div class="aw-mod aw-explore-list">
  <div class="mod-body">
    <div class="aw-common-list">
      <div class="aw-item article" data-topic-id="1023,">
  <a class="aw-user-name hidden-xs" data-id="4045" href="http://wenda.bootcss.com/people/Helper" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-max-img.png" alt="the user{id}" /></a>  
  <div class="aw-question-content">
          <h4>
            <a href="">我有一个问题，网站里面有个地方点不开</a>
          </h4>
          
    <p>
            
              <a href="http://wenda.bootcss.com/people/Helper" class="aw-user-name">Helper</a> <span class="text-color-999">发表了文章 • 0 个评论 • 410 次浏览 • 2017-09-21 16:34</span>
            <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
        <!-- 文章内容调用 -->
    <div class="markitup-box">
      <div class="img pull-right"></div>
      前不久呢，景安出了一个云服务器试用的活动，配置有两种，一种是4核CPU，4G内存，5M带宽的云服务器，1元30天，但是限制是企业用户，谁要是能搞到营业执照就去弄一个。<br />
<br />
还有一种，1核CPU，1G内存，1M带宽的VPS，也是1元30天，是个人用户的，测试一些小...
    </div>
        <a class="more" href="http://wenda.bootcss.com/article/3">查看更多</a>
        <!-- end 文章内容调用 -->
      </div>
</div>
<div class="aw-item " data-topic-id="">
  <a class="aw-user-name hidden-xs" data-id="2886" href="http://wenda.bootcss.com/people/_%E5%86%9B%E5%93%A5" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-max-img.png" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2355">问下,请人用bootstrap写套前端大概什么价位?</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="2942" href="http://wenda.bootcss.com/people/frankfang7" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-mid-img.png" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/frankfang7" class="aw-user-name" data-id="2942">frankfang7</a> 
        <span class="text-color-999">回复了问题 • 2 人关注 • 1 个回复 • 2975 次浏览 • 2017-08-17 17:13        </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="156,">
  <a class="aw-user-name hidden-xs" data-id="3480" href="http://wenda.bootcss.com/people/pulledup" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/34/80_avatar_max.jpg" alt="" /></a>  
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2407">bootcss.com官网首页的这句话是什么意思？  .job-hot</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="2942" href="http://wenda.bootcss.com/people/frankfang7" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-mid-img.png" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/frankfang7" class="aw-user-name" data-id="2942">frankfang7</a> 
        <span class="text-color-999">回复了问题 • 2 人关注 • 1 个回复 • 1566 次浏览 • 2017-08-17 17:12        </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="1021,">
  <a class="aw-user-name hidden-xs" data-id="3170" href="http://wenda.bootcss.com/people/murusheng" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/31/70_avatar_max.jpg" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2454">如何让div悬浮在栅格上面</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/rex" class="aw-user-name" data-id="367">rew1011</a> 
        <span class="text-color-999">回复了问题 • 2 人关注 • 1 个回复 • 1133 次浏览 • 2017-07-23 17:48        </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="1020,">
  <a class="aw-user-name hidden-xs" data-id="3170" href="http://wenda.bootcss.com/people/murusheng" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/31/70_avatar_max.jpg" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2453">如何实现导航栏在PC端（主要），平板端，手机端都可以实现导航左右移动功能? </a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/rex" class="aw-user-name" data-id="367">rew1011</a> 
        <span class="text-color-999">回复了问题 • 2 人关注 • 1 个回复 • 1078 次浏览 • 2017-07-10 21:09        </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="5,">
  <a class="aw-user-name hidden-xs" data-id="3927" href="http://wenda.bootcss.com/people/%E4%B8%80%E9%A2%97%E6%BB%9A%E7%9F%B3" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-max-img.png" alt="" /></a>  
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2451">bootstrap 动态创建列名</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/rex" class="aw-user-name" data-id="367">rew1011</a> 
        <span class="text-color-999">回复了问题 • 2 人关注 • 1 个回复 • 989 次浏览 • 2017-07-10 20:57       </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="2,">
  <a class="aw-user-name hidden-xs" data-id="3929" href="http://wenda.bootcss.com/people/yjc88" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/39/29_avatar_max.jpg" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2452">666666</a>
          </h4>
        <a href="http://wenda.bootcss.com/question/2452#!answer_form" class="pull-right text-color-999">回复</a>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/yjc88" class="aw-user-name" data-id="3929">yjc88</a> 
        <span class="text-color-999">回复了问题 • 1 人关注 • 1 个回复 • 678 次浏览 • 2017-06-29 15:33       </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="357,">
  <a class="aw-user-name hidden-xs" data-id="3787" href="http://wenda.bootcss.com/people/a529570233" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/37/87_avatar_max.jpg" alt="" /></a>  
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2435">bootsrap3怎么把table栅格化，就是把tr里的4个td在屏幕缩小时变成两行，上下各两个td</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/rex" class="aw-user-name" data-id="367">rew1011</a> 
        <span class="text-color-999">回复了问题 • 2 人关注 • 1 个回复 • 1173 次浏览 • 2017-06-27 12:24        </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="407,">
  <a class="aw-user-name hidden-xs" data-id="3789" href="http://wenda.bootcss.com/people/Lhy" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/37/89_avatar_max.jpg" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2437">bootstrap validator验证大概有300多个input ，提交的时候验证大概要10秒，有没有解决办法</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/rex" class="aw-user-name" data-id="367">rew1011</a> 
        <span class="text-color-999">回复了问题 • 2 人关注 • 1 个回复 • 1183 次浏览 • 2017-06-27 12:20        </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="259,">
  <a class="aw-user-name hidden-xs" data-id="3792" href="http://wenda.bootcss.com/people/%E5%98%89" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/37/92_avatar_max.jpg" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2438">bootstrap 滑动开关bootstrap-switch无效果</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/rex" class="aw-user-name" data-id="367">rew1011</a> 
        <span class="text-color-999">回复了问题 • 2 人关注 • 1 个回复 • 1866 次浏览 • 2017-06-27 12:04        </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="100,">
  <a class="aw-user-name hidden-xs" data-id="3922" href="http://wenda.bootcss.com/people/yztjr" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/39/22_avatar_max.jpg" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2450">Bootstrap 中jqzoom  冲突怎么解决?</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/rex" class="aw-user-name" data-id="367">rew1011</a> 
        <span class="text-color-999">回复了问题 • 2 人关注 • 1 个回复 • 499 次浏览 • 2017-06-27 11:45       </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="97,">
  <a class="aw-user-name hidden-xs" data-id="3861" href="http://wenda.bootcss.com/people/%E6%88%98%E4%BA%89%E9%AD%94%E6%96%B9" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/38/61_avatar_max.jpg" alt="" /></a>  
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2443">【新人问题】Unslider页面的按钮链接有误</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/rex" class="aw-user-name" data-id="367">rew1011</a> 
        <span class="text-color-999">回复了问题 • 2 人关注 • 1 个回复 • 689 次浏览 • 2017-06-26 16:41       </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="">
  <a class="aw-user-name hidden-xs" data-id="3902" href="http://wenda.bootcss.com/people/%E6%96%BD%E5%B3%B0" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-max-img.png" alt="" /></a>  
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2448">响应式导航栏火狐53.0.3 (64 位)下不起作用</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/rex" class="aw-user-name" data-id="367">rew1011</a> 
        <span class="text-color-999">回复了问题 • 1 人关注 • 1 个回复 • 602 次浏览 • 2017-06-26 16:23       </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="486,">
  <a class="aw-user-name hidden-xs" data-id="3867" href="http://wenda.bootcss.com/people/Nnnec" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/38/67_avatar_max.jpg" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2445">metronic怎么用？</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/rex" class="aw-user-name" data-id="367">rew1011</a> 
        <span class="text-color-999">回复了问题 • 2 人关注 • 1 个回复 • 740 次浏览 • 2017-06-26 16:11       </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="1019,">
  <a class="aw-user-name hidden-xs" data-id="3170" href="http://wenda.bootcss.com/people/murusheng" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/31/70_avatar_max.jpg" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2449">bootstrap里面navbar-fixed-top总是把下面div的内容遮住是怎么回事？ </a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="3915" href="http://wenda.bootcss.com/people/%E9%9D%92" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/39/15_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/%E9%9D%92" class="aw-user-name" data-id="3915">青</a> 
        <span class="text-color-999">回复了问题 • 3 人关注 • 1 个回复 • 703 次浏览 • 2017-06-22 16:35       </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="107,">
  <a class="aw-user-name hidden-xs" data-id="1571" href="http://wenda.bootcss.com/people/cmdi12345" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-max-img.png" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/439">bootstrap  Tab控件添加tab标签过多时会换行，怎么解决？</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
                <a class="aw-user-name" data-id="1614" href="http://wenda.bootcss.com/people/yamateH" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-mid-img.png" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/%E8%81%82%E5%AE%89%E7%A3%8A" class="aw-user-name" data-id="3893">聂安磊</a> 
        <span class="text-color-999">回复了问题 • 5 人关注 • 4 个回复 • 3908 次浏览 • 2017-06-16 15:11        </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="41,">
  <a class="aw-user-name hidden-xs" data-id="142" href="http://wenda.bootcss.com/people/noert" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-max-img.png" alt="" /></a>  
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/40">bootstrap支持树形表格吗，或者有什么插件吗？</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="162" href="http://wenda.bootcss.com/people/icyhoo" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-mid-img.png" alt="" /></a>
                <a class="aw-user-name" data-id="2" href="http://wenda.bootcss.com/people/wangsai" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/00/02_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/Jevousvoisa" class="aw-user-name" data-id="3887">Jevousvoisa</a> 
        <span class="text-color-999">回复了问题 • 4 人关注 • 3 个回复 • 9064 次浏览 • 2017-06-15 11:51        </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="237,">
  <a class="aw-user-name hidden-xs" data-id="3886" href="http://wenda.bootcss.com/people/%E4%B8%8A%E6%8F%9A%E5%98%B4%E8%A7%92" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/38/86_avatar_max.jpg" alt="" /></a>  
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2447">hello</a>
          </h4>
        <a href="http://wenda.bootcss.com/question/2447#!answer_form" class="pull-right text-color-999">回复</a>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/%E4%B8%8A%E6%8F%9A%E5%98%B4%E8%A7%92" class="aw-user-name" data-id="3886">上揚嘴角</a> 
        <span class="text-color-999">回复了问题 • 1 人关注 • 1 个回复 • 680 次浏览 • 2017-06-15 11:41       </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="4,3,">
  <a class="aw-user-name hidden-xs" data-id="3849" href="http://wenda.bootcss.com/people/GIL" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-max-img.png" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/2442">急求：Bootstrap 模态窗(Modal)与提示工具(Tooltip)怎样同时使用在一个按钮上</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="3801" href="http://wenda.bootcss.com/people/%E5%BF%97%E8%BF%9C" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/38/01_avatar_mid.jpg" alt="" /></a>
                <a class="aw-user-name" data-id="3807" href="http://wenda.bootcss.com/people/%E4%BB%A5%E7%8E%8B%E4%B9%8B%E5%90%8D" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/38/07_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/%E4%BB%A5%E7%8E%8B%E4%B9%8B%E5%90%8D" class="aw-user-name" data-id="3807">以王之名</a> 
        <span class="text-color-999">回复了问题 • 3 人关注 • 2 个回复 • 994 次浏览 • 2017-06-07 17:18       </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
<div class="aw-item " data-topic-id="374,">
  <a class="aw-user-name hidden-xs" data-id="1562" href="http://wenda.bootcss.com/people/wzh1314" rel="nofollow"><img src="http://wenda.bootcss.com/static/common/avatar-max-img.png" alt="" /></a> 
  <div class="aw-question-content">
    <h4>
            <a href="http://wenda.bootcss.com/question/433">bootstrap3自定义响应式要支持ie8</a>
          </h4>
        <div class="pull-right hidden-xs contribute">
      <span class="pull-right text-color-999">贡献</span>     
                <a class="aw-user-name" data-id="367" href="http://wenda.bootcss.com/people/rex" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/03/67_avatar_mid.jpg" alt="" /></a>
                <a class="aw-user-name" data-id="3803" href="http://wenda.bootcss.com/people/%E7%A0%B4%E6%99%93_%E6%AE%8B%E6%9C%88" rel="nofollow"><img src="http://wenda.bootcss.com/uploads/avatar/000/00/38/03_avatar_mid.jpg" alt="" /></a>
            </div>
        
    <p>
            
                  <a href="http://wenda.bootcss.com/people/%E7%A0%B4%E6%99%93_%E6%AE%8B%E6%9C%88" class="aw-user-name" data-id="3803">破晓_残月</a> 
        <span class="text-color-999">回复了问题 • 3 人关注 • 3 个回复 • 1704 次浏览 • 2017-06-06 09:37        </span>
                  <span class="text-color-999 related-topic hide"> •  来自相关话题</span>
    </p>
    
      </div>
</div>
              </div>
            </div>
            <div class="mod-footer">
              <div class="page-control"><ul class="pagination pull-right"><li class="active"><a href="javascript:;">1</a></li><li><a href="http://wenda.bootcss.com/sort_type-new__day-0__is_recommend-0__page-2">2</a></li><li><a href="http://wenda.bootcss.com/sort_type-new__day-0__is_recommend-0__page-3">3</a></li><li><a href="http://wenda.bootcss.com/sort_type-new__day-0__is_recommend-0__page-4">4</a></li><li><a href="http://wenda.bootcss.com/sort_type-new__day-0__is_recommend-0__page-2">&gt;</a></li><li><a href="http://wenda.bootcss.com/sort_type-new__day-0__is_recommend-0__page-38">&gt;&gt;</a></li></ul></div>            </div>
          </div>
        </div>

        <!-- 侧边栏 -->
        <div class="col-sm-12 col-md-3 aw-side-bar hidden-xs hidden-sm">
                    <div class="aw-mod aw-text-align-justify">
  <div class="mod-head">
    <a href="http://wenda.bootcss.com/topic/channel-hot" class="pull-right">更多 &gt;</a>
    <h3>热门话题</h3>
  </div>
  <div class="mod-body">
              </div>
</div>
          <div class="aw-mod aw-text-align-justify">
  <div class="mod-head">
    <a href="http://wenda.bootcss.com/people/" class="pull-right">更多 &gt;</a>
    <h3>热门用户</h3>
  </div>
  <div class="mod-body">
              </div>
</div>        </div>
        <!-- end 侧边栏 -->
      </div>
    </div>
  </div>
</div>

<footer class="footer ">
  <div class="container">
    <div class="row footer-top">
      <div class="col-sm-6 col-lg-6">
        <h4>
          <img src="http://wenda.bootcss.com/static/css/default/logo/logo.png">
        </h4>
        <p>本网站所列开源项目的中文版文档全部由<a href="http://www.bootcss.com/" target="_blank">Bootstrap中文网</a>成员翻译整理，并全部遵循 <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>协议发布。</p>
      </div>
      <div class="col-sm-6  col-lg-5 col-lg-offset-1">
        <div class="row about">
          <div class="col-xs-4">
            <h4>关于</h4>
            <ul class="list-unstyled">
              <li><a href="http://www.bootcss.com/about/" target="_blank">关于我们</a></li>
              <li><a href="http://www.bootcss.com/ad/" target="_blank">广告合作</a></li>
              <li><a href="http://www.bootcss.com/links/" target="_blank">友情链接</a></li>
            </ul>
          </div>
          <div class="col-xs-4">
            <h4>联系方式</h4>
            <ul class="list-unstyled">
              <li><a href="http://weibo.com/bootcss" title="Bootstrap中文网官方微博" target="_blank">新浪微博</a></li>
              <li><a href="mailto:admin@bootcss.com">电子邮件</a></li>
            </ul>
          </div>
          <div class="col-xs-4">
            <h4>旗下网站</h4>
            <ul class="list-unstyled">
              <li><a href="http://www.golaravel.com/" target="_blank">Laravel中文网</a></li>
              <li><a href="http://www.ghostchina.com/" target="_blank">Ghost中国</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <div class="row footer-bottom">
      <ul class="list-inline text-center">
        <li><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a></li><li>京公网安备11010802014853</li>
      </ul>
    </div>
  </div>
</footer>


<a class="aw-back-top hidden-xs" href="javascript:;" onclick="$.scrollTo(1, 600, {queue:true});"><i class="icon icon-up"></i></a>

<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fd799cb54bdae1c6134cf03ab0a98d443' type='text/javascript'%3E%3C/script%3E"));
</script>
<!-- DO NOT REMOVE -->
<div id="aw-ajax-box" class="aw-ajax-box"></div>
<div style="display:none;" id="__crond">
  <script type="text/javascript">
    $(document).ready(function () {
      $('#__crond').html(unescape('%3Cimg%20src%3D%22' + G_BASE_URL + '/crond/run/1510146631%22%20width%3D%221%22%20height%3D%221%22%20/%3E'));
    });
  </script>
</div>

<!-- Escape time: 0.031351089477539 --><!-- / DO NOT REMOVE -->

</body>
</html>